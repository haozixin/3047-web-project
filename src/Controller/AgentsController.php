<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Agents Controller
 *
 * @property \App\Model\Table\AgentsTable $Agents
 * @method \App\Model\Entity\Agent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $agents = $this->paginate($this->Agents);

        $this->set(compact('agents'));
    }

    /**
     * View method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agent = $this->Agents->get($id, [
            'contain' => ['AdminAgents'],
        ]);

        $this->set(compact('agent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
 /*   public function add()
    {
        $agent = $this->Agents->newEmptyEntity();
        if ($this->request->is('post')) {
            $agent = $this->Agents->patchEntity($agent, $this->request->getData());
            if ($this->Agents->save($agent)) {
                $this->Flash->success(__('The agent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agent could not be saved. Please, try again.'));
        }
        $this->set(compact('agent'));
    }
*/
    public function add()
    {
        $agent = $this->Agents->newEmptyEntity();
        if ($this->request->is('post')) {
            $customer = $this->Agents->patchEntity($agent, $this->request->getData());
            $sub= $this->request->getData('subscription_status');
            $email=$this->request->getData('email');
            $fname= $this->request->getData('family_name');
            $gname= $this->request->getData('given_name');

            $key=$this->request->getData('email');
            $session = $this->getRequest()->getSession();
            $session->write(['email'=> $email,'family_name' => $fname,
                'given_name' => $gname]);
            $session->read('email');
            $session->read('family_name');
            $session->read('given_name');

            if ($this->Agents->save($agent)) {

                $this->Flash->success(__('The customer has been saved.'));
               if($sub == 'yes'){ $this->redirect(['controller' => 'NewsletterSubscriptions', 'action' => 'add_customer']); }


                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agent could not be saved. Please, try again.'));
        }
        $this->set(compact('agent'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agent = $this->Agents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agent = $this->Agents->patchEntity($agent, $this->request->getData());
            if ($this->Agents->save($agent)) {
                $this->Flash->success(__('The agent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agent could not be saved. Please, try again.'));
        }
        $this->set(compact('agent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agent id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agent = $this->Agents->get($id);
        if ($this->Agents->delete($agent)) {
            $this->Flash->success(__('The agent has been deleted.'));
        } else {
            $this->Flash->error(__('The agent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
