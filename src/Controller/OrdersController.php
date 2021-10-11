<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Mailer\Mailer;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Agents'],
        ];
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
    }

    public function confirm()
    {
        $this->paginate = [
            'contain' => ['Products', 'Agents'],
        ];
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Products', 'Agents'],
        ]);

        $this->set(compact('order'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $id = $this->getRequest()->getSession()->read('product_id');
        $quantity = $this->getRequest()->getSession()->read('quantity');
        $order = $this->Orders->newEmptyEntity();

        if ($this->request->is('post')) {
            $this->loadModel('Agents');
            $agentId = $this->request->getData('agent_id');
            $currentAgent = $this->Agents->get($agentId);
            $email = $currentAgent->email;
            $order = $this->Orders->patchEntity($order, $this->request->getData());

            $order_quantity = $order->quantity;
            $order_total = $this->getRequest()->getSession()->read('total');
            $order->agent_email = $email;
            $order->paid = "No";
            $order->product_id = $id;
            $order_price = (int)$order_total * (int)$order_quantity;
            $order->total_price = $order_price;

            if ($this->Orders->save($order)) {

                $session = $this->getRequest()->getSession();
                $session->write(['subtract' => $order_quantity]);
                $session->read('subtract');


                return $this->redirect(['controller' => 'Products', 'action' => 'update']);
            }
            $this->Flash->error(__('There is an new order request'));
        }
        $agentsForOrder = $this->Orders->Agents->find('list', ['limit' => 200,
            'keyField' => 'id',
            'valueField' => 'id'
        ]);
        $agents = $this->Orders->Agents->find('list', ['limit' => 200]);


        $this->set(compact('order', 'agents', 'agentsForOrder'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $products = $this->Orders->Products->find('list', ['limit' => 200]);
        $agents = $this->Orders->Agents->find('list', ['limit' => 200]);
        $this->set(compact('order', 'products', 'agents'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
            $this->redirect(['controller' => 'Products', 'action' => 'cancel']);
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function mark($id = null)
    {
        $this->loadModel('Orders');
        $order = $this->Orders->get($id, [
            'contain' => [],
        ]);
        $quantity = $this->getRequest()->getSession()->read('quantity');
        $order_quantity = $order->quantity;

        if ($quantity - $order_quantity >= 0) {
            if ($order->email_sent == 0) {
                $mailer = new Mailer('default');
                $mailer
                    ->setEmailFormat('html')
                    ->setTo($order->agent_email)
                    ->setFrom(Configure::read('OrderEmail.from'))
                    ->setReplyTo($order->agent_email)
                    ->setSubject(" Order request approved")
                    ->viewBuilder()
                    ->disableAutoLayout()
                    ->setTemplate('orderemail');

                $mailer->setViewVars([
                    'content' => $order->body,

                    'email' => $order->agent_email,
                    'deal_date' => $order->deal_date,
                    'quantity' => $order->quantity,
                    'price' => $order->total_price,
                    'email_id' => $order->id]);


                $email_result = $mailer->deliver();
                if ($email_result) {
                    $order->email_sent = 1;
                    $this->Orders->save($order);
                    $this->Flash->success(__('The order is sent to agent.'));
                }
            } else {
                $this->Flash->error(__('Email sent before!'));
            }
        } else {
            $this->Flash->error(__('Inventory quantity not enough for this order!'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function marking($id = null)
    {
        $this->loadModel('Orders');
        $order = $this->Orders->get($id, [
            'contain' => [],
        ]);
        if ($order->email_sent == "Yes" && $order->Paid == "No") {
            $mailer = new Mailer('default');
            $mailer
                ->setEmailFormat('html')
                ->setTo($order->agent_email)
                ->setFrom(Configure::read('OrderEmail.from'))
                ->setReplyTo($order->agent_email)
                ->setSubject(" Shipment on the way ")
                ->viewBuilder()
                ->disableAutoLayout()
                ->setTemplate('confirmmail');

            $mailer->setViewVars([
                'content' => $order->body,

                'email' => $order->agent_email,
                'deal_date' => $order->deal_date,
                'quantity' => $order->quantity,
                'price' => $order->total_price,
                'address' => $order->shipping_address,
                'email_id' => $order->id]);


            $email_result = $mailer->deliver();
            if ($email_result) {
                $order->Paid = "Yes";
                $this->Orders->save($order);
                $this->Flash->success(__('The order is sent to agent.'));
            }
        } else {
            $this->Flash->error(__('Please check whether you sent Email sent before or did the agent paid yet!'));
        }

        return $this->redirect(['action' => 'confirm']);
    }

//         public function marking1($id=null) {
//      $order = $this->Orders->get($id, [
//          'contain' => [],
//      ]);
//          $order->Paid='Yes';
//          if ($this->Orders->save($order)) {
//              $this->Flash->success(__('The order has been marked as paid.'));
//
//              return $this->redirect(['action' => 'confirm']);
//          }
//          $this->Flash->error(__('The order could not be mark as Paid. Please, try again.'));
//
//      $products = $this->Orders->Products->find('list', ['limit' => 200]);
//      $agents = $this->Orders->Agents->find('list', ['limit' => 200]);
//      $this->set(compact('order', 'products', 'agents'));
//  }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect('/');
        }
    }
}
