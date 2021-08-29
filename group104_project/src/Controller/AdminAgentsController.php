<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AdminAgents Controller
 *
 * @property \App\Model\Table\AdminAgentsTable $AdminAgents
 * @method \App\Model\Entity\AdminAgent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminAgentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agents', 'Admins'],
        ];
        $adminAgents = $this->paginate($this->AdminAgents);

        $this->set(compact('adminAgents'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin Agent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adminAgent = $this->AdminAgents->get($id, [
            'contain' => ['Agents', 'Admins'],
        ]);

        $this->set(compact('adminAgent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adminAgent = $this->AdminAgents->newEmptyEntity();
        if ($this->request->is('post')) {
            $adminAgent = $this->AdminAgents->patchEntity($adminAgent, $this->request->getData());
            if ($this->AdminAgents->save($adminAgent)) {
                $this->Flash->success(__('The admin agent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin agent could not be saved. Please, try again.'));
        }
        $agents = $this->AdminAgents->Agents->find('list', ['limit' => 200]);
        $admins = $this->AdminAgents->Admins->find('list', ['limit' => 200]);
        $this->set(compact('adminAgent', 'agents', 'admins'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin Agent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adminAgent = $this->AdminAgents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adminAgent = $this->AdminAgents->patchEntity($adminAgent, $this->request->getData());
            if ($this->AdminAgents->save($adminAgent)) {
                $this->Flash->success(__('The admin agent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin agent could not be saved. Please, try again.'));
        }
        $agents = $this->AdminAgents->Agents->find('list', ['limit' => 200]);
        $admins = $this->AdminAgents->Admins->find('list', ['limit' => 200]);
        $this->set(compact('adminAgent', 'agents', 'admins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin Agent id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adminAgent = $this->AdminAgents->get($id);
        if ($this->AdminAgents->delete($adminAgent)) {
            $this->Flash->success(__('The admin agent has been deleted.'));
        } else {
            $this->Flash->error(__('The admin agent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
