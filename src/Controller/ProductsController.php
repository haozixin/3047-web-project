<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders'],
        ];
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Orders', 'ProductRecipes'],
        ]);

        $this->set(compact('product'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            $expired_date = $product->expired_date;
            $manufacture = $product ->date_of_manufacture;
            $customer_price = $product->customer_price;
            $agent_price = $product->agent_price;
            $status=false;

            if(($customer_price<=0||$customer_price>1000) or ($agent_price<=0||$agent_price>1000)) {
                $this->Flash->success(__('You must input a valid unit price, the range should be 0-1000'));
                if ($expired_date<$manufacture) {
                    $this->Flash->success(__('And the expired date cannot be early than the date of manufacture'));
                }
                else{
                    //check if it is saved
                    if ($this->Products->save($product)) {
                        $this->Flash->success(__('The product has been saved.'));

                        return $this->redirect(['action' => 'index']);
                    }
                }
            }

            $this->Flash->success('The product could not be saved. Please, try again.');
            //$this->Flash->error(__('The product could not be saved. Please, try again.'));
        }

        $orders = $this->Products->Orders->find('list', ['limit' => 200]);
        $this->set(compact('product', 'orders'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $orders = $this->Products->Orders->find('list', ['limit' => 200]);
        $this->set(compact('product', 'orders'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function display()
    {

        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
    }

}
