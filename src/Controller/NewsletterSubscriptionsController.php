<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * NewsletterSubscriptions Controller
 *
 * @property \App\Model\Table\NewsletterSubscriptionsTable $NewsletterSubscriptions
 * @method \App\Model\Entity\NewsletterSubscription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsletterSubscriptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $newsletterSubscriptions = $this->paginate($this->NewsletterSubscriptions);

        $this->set(compact('newsletterSubscriptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Newsletter Subscription id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newsletterSubscription = $this->NewsletterSubscriptions->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('newsletterSubscription'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newsletterSubscription = $this->NewsletterSubscriptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $newsletterSubscription = $this->NewsletterSubscriptions->patchEntity($newsletterSubscription, $this->request->getData());
            if ($this->NewsletterSubscriptions->save($newsletterSubscription)) {
                $this->Flash->success(__('The newsletter subscription has been saved.'));

                return $this->redirect(['action' => '/display']);
            }
            $this->Flash->error(__('The newsletter subscription could not be saved. Please, try again.'));
        }
        $this->set(compact('newsletterSubscription'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Newsletter Subscription id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newsletterSubscription = $this->NewsletterSubscriptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newsletterSubscription = $this->NewsletterSubscriptions->patchEntity($newsletterSubscription, $this->request->getData());
            if ($this->NewsletterSubscriptions->save($newsletterSubscription)) {
                $this->Flash->success(__('The newsletter subscription has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newsletter subscription could not be saved. Please, try again.'));
        }
        $this->set(compact('newsletterSubscription'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Newsletter Subscription id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newsletterSubscription = $this->NewsletterSubscriptions->get($id);
        if ($this->NewsletterSubscriptions->delete($newsletterSubscription)) {
            $this->Flash->success(__('The newsletter subscription has been deleted.'));
        } else {
            $this->Flash->error(__('The newsletter subscription could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function display()
        {

        }
}