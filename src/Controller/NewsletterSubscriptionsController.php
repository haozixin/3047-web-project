<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Mailer\Mailer;

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

        }
        $this->Flash->success(__('Remember to input a valid Email otherwise we cannot send you our best Offers!( e.g. abc@example.com)'));
        $this->set(compact('newsletterSubscription'));
    }


    public function addforcustomer()
    {
        $newsletterSubscription = $this->NewsletterSubscriptions->newEmptyEntity();
        if ($this->request->is('post')) {

            $newsletterSubscription = $this->NewsletterSubscriptions->patchEntity($newsletterSubscription, $this->request->getData());


            if ($this->NewsletterSubscriptions->save($newsletterSubscription)) {
                {

                    $mailer = new Mailer('default');
                    $mailer
                        ->setEmailFormat('html')
                        ->setTo($newsletterSubscription->customer_email)
                        ->setFrom(Configure::read('NewsletterSubscriptionEmail.from'))
                        ->setReplyTo($newsletterSubscription->customer_email)
                        ->setSubject("Newsletter Subscription Confirmation")
                        ->viewBuilder()
                        ->disableAutoLayout()
                        ->setTemplate('newslettersubscription');


                    $email_result = $mailer->deliver();

                    return $this->redirect(['action' => '/display']);

                }


                return $this->redirect(['action' => '/display']);

            }

        }

        $this->set(compact('newsletterSubscription'));
    }


    public function addCustomer()
    {
        $newsletterSubscription = $this->NewsletterSubscriptions->newEmptyEntity();
        $this->loadModel('Customers');
        $email = $this->getRequest()->getSession()->read('email');

        $fname = $this->getRequest()->getSession()->read('family_name');
        $gname = $this->getRequest()->getSession()->read('given_name');
        $name = $fname . ' ' . $gname;

        $newsletterSubscription['customer_email'] = $email;
        $newsletterSubscription['customer_name'] = $name;


        $this->NewsletterSubscriptions->save($newsletterSubscription);

        $this->set(compact('newsletterSubscription'));
    }


    public function unsubscribe()
    {

        if ($this->request->is('post')) {

//                 $newsletterSubscription = $this->NewsletterSubscriptions->patchEntity($newsletterSubscription, $this->request->getData());
            $agents = $this->getTableLocator()->get('Agents');
            $customers = $this->getTableLocator()->get('Customers');
            $userEmailFromForm = $this->request->getData('email');
//                       debug($userEmailFromForm);
//                       exit;
            $selectedAgent = $agents->find()->where(['email' => $userEmailFromForm])->first();
            if ($selectedAgent != null) {
                $Aemail = $selectedAgent->email;
                $Aid = $selectedAgent->id;


                if ($userEmailFromForm == $Aemail) {
                    $session = $this->getRequest()->getSession();
                    $session->write(['id' => $Aid, 'email' => $Aemail]);
                    $session->read('id');

                    $selectedAgent->subscription_status = 'No';

                    $this->loadModel('Agents')->save($selectedAgent);


                    $mailer = new Mailer('default');
                    $mailer
                        ->setEmailFormat('html')
                        ->setTo($Aemail)
                        ->setFrom(Configure::read('NewsletterSubscriptionEmail.from'))
                        ->setReplyTo(Configure::read('NewsletterSubscriptionEmail.from'))
                        ->setSubject("Newsletter Subscription Cancellation")
                        ->viewBuilder()
                        ->disableAutoLayout()
                        ->setTemplate('cancelemail');


                    if ($email_result = $mailer->deliver()) {

                        $news = $this->getTableLocator()->get('NewsletterSubscriptions');

                        $this->request->allowMethod(['post', 'delete']);
                        $agentEmail = $this->getRequest()->getSession()->read('email');


                        $newsletterSubscription = $news->find()->where(['customer_email' => $agentEmail])->first();


                        $this->loadModel('NewsletterSubscriptions')->delete($newsletterSubscription);
                        return $this->redirect(['action' => 'unsubscribe1']);


                    }


                }
            }
            $selectedCustomer = $customers->find()->where(['email' => $userEmailFromForm])->first();


            $news = $this->getTableLocator()->get('NewsletterSubscriptions');

            $this->request->allowMethod(['post', 'delete']);
            $agentEmail = $this->getRequest()->getSession()->read('email');


            $newsletterSubscription = $news->find()->where(['customer_email' => $userEmailFromForm])->first();


            if ($selectedCustomer != null) {
                $Cemail = $selectedCustomer->email;
                $Cid = $selectedCustomer->id;

                if ($userEmailFromForm == $Cemail) {
                    $session = $this->getRequest()->getSession();
                    $session->write(['id' => $Cid, 'email' => $Cemail]);
                    $session->read('id');
                    $session->read('email');


                    {
                        $selectedCustomer->subscription_status = 'No';
                        $this->loadModel('Customers')->save($selectedCustomer);


                        $mailer = new Mailer('default');
                        $mailer
                            ->setEmailFormat('html')
                            ->setTo($Cemail)
                            ->setFrom(Configure::read('NewsletterSubscriptionEmail.from'))
                            ->setReplyTo(Configure::read('NewsletterSubscriptionEmail.from'))
                            ->setSubject("Newsletter Subscription Cancellation")
                            ->viewBuilder()
                            ->disableAutoLayout()
                            ->setTemplate('cancelemail');


                        if ($email_result = $mailer->deliver()) {

                            $news = $this->getTableLocator()->get('NewsletterSubscriptions');

                            $this->request->allowMethod(['post', 'delete']);
                            $customerEmail = $this->getRequest()->getSession()->read('email');


                            $newsletterSubscription = $news->find()->where(['customer_email' => $customerEmail])->first();


                            $this->loadModel('NewsletterSubscriptions')->delete($newsletterSubscription);
                            return $this->redirect(['action' => 'unsubscribe1']);


                        }


                    }
                }


            }
            if ($newsletterSubscription != null) {

                $news = $this->getTableLocator()->get('NewsletterSubscriptions');

                $this->request->allowMethod(['post', 'delete']);
                $customerEmail = $this->request->getData('email');


                $newsletterSubscription = $news->find()->where(['customer_email' => $customerEmail])->first();


                $this->loadModel('NewsletterSubscriptions')->delete($newsletterSubscription);
                $mailer = new Mailer('default');
                $mailer
                    ->setEmailFormat('html')
                    ->setTo($customerEmail)
                    ->setFrom(Configure::read('NewsletterSubscriptionEmail.from'))
                    ->setReplyTo(Configure::read('NewsletterSubscriptionEmail.from'))
                    ->setSubject("Newsletter Subscription Cancellation")
                    ->viewBuilder()
                    ->disableAutoLayout()
                    ->setTemplate('cancelemail');
                $email_result = $mailer->deliver();
                return $this->redirect(['action' => 'unsubscribe1']);


            }

        }


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


    public function unsubscribe1($id = null)
    {
    }

    public function display()
    {
        if ($this->request->is('post')) {
            $newsletterSubscriptions = $this->NewsletterSubscriptions->newEmptyEntity();
            $this->loadModel('Customers');
            $email = $this->getRequest()->getSession()->read('email');

            $fname = $this->getRequest()->getSession()->read('family_name');
            $gname = $this->getRequest()->getSession()->read('given_name');
            $name = $gname . ' ' . $fname;
            $newsletterSubscriptions['customer_email'] = $email;
            $newsletterSubscriptions['customer_name'] = $name;


            $this->NewsletterSubscriptions->save($newsletterSubscriptions);
            $this->set(compact('newsletterSubscriptions'));

            $mailer = new Mailer('default');
            $mailer
                ->setEmailFormat('html')
                ->setTo($newsletterSubscriptions->customer_email)
                ->setFrom(Configure::read('NewsletterSubscriptionEmail.from'))
                ->setReplyTo($newsletterSubscriptions->customer_email)
                ->setSubject("Newsletter Subscription Confirmation")
                ->viewBuilder()
                ->disableAutoLayout()
                ->setTemplate('newslettersubscription');
            $email_result = $mailer->deliver();


        }
    }

    public function display1()
    {
        $newsletterSubscriptions = $this->NewsletterSubscriptions->newEmptyEntity();
        $this->loadModel('Customers');
        $email = $this->getRequest()->getSession()->read('email');

        $fname = $this->getRequest()->getSession()->read('family_name');
        $gname = $this->getRequest()->getSession()->read('given_name');
        $name = $gname . ' ' . $fname;
        $newsletterSubscriptions['customer_email'] = $email;
        $newsletterSubscriptions['customer_name'] = $name;


        $this->NewsletterSubscriptions->save($newsletterSubscriptions);
        $this->set(compact('newsletterSubscriptions'));

        $mailer = new Mailer('default');
        $mailer
            ->setEmailFormat('html')
            ->setTo($newsletterSubscriptions->customer_email)
            ->setFrom(Configure::read('NewsletterSubscriptionEmail.from'))
            ->setReplyTo($newsletterSubscriptions->customer_email)
            ->setSubject("Newsletter Subscription Confirmation")
            ->viewBuilder()
            ->disableAutoLayout()
            ->setTemplate('newslettersubscription');
        $email_result = $mailer->deliver();


    }


    public function addcustomer1()
    {
        $newsletterSubscription = $this->NewsletterSubscriptions->newEmptyEntity();
        $this->loadModel('Customers');
        $email = $this->getRequest()->getSession()->read('email');

        $fname = $this->getRequest()->getSession()->read('family_name');
        $gname = $this->getRequest()->getSession()->read('given_name');
        $name = $gname . ' ' . $fname;


//                                               $newsletterSubscription['customer_name']=$fname+$gname;
        $newsletterSubscription['customer_email'] = $email;
        $newsletterSubscription['customer_name'] = $name;


        $this->NewsletterSubscriptions->save($newsletterSubscription);

        $mailer = new Mailer('default');
        $mailer
            ->setEmailFormat('html')
            ->setTo($newsletterSubscription->customer_email)
            ->setFrom(Configure::read('NewsletterSubscriptionEmail.from'))
            ->setReplyTo(Configure::read('NewsletterSubscriptionEmail.from'))
            ->setSubject("Newsletter Subscription Confirmation")
            ->viewBuilder()
            ->disableAutoLayout()
            ->setTemplate('newslettersubscription');


        $email_result = $mailer->deliver();


    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect('/');
        }
    }


    public function mark($id = null)
    {

        $mailer = new Mailer('default');
        $mailer
            ->setEmailFormat('html')
            ->setTo($newsletterSubscriptions->customer_email)
            ->setFrom(Configure::read('NewsletterSubscriptionEmail.from'))
            ->setReplyTo($newsletterSubscriptions->customer_email)
            ->setSubject("Newsletter Subscription Confirmation")
            ->viewBuilder()
            ->disableAutoLayout()
            ->setTemplate('newslettersubscription');


        $email_result = $mailer->deliver();
        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check
        $this->Authentication->addUnauthenticatedActions(['addforcustomer', 'addcustomer', 'addCustomer', 'display', 'unsubscribe', 'unsubscribe1']);
    }

}


