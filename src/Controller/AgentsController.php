<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Mailer\Mailer;
use Cake\Core\Configure;
use Cake\ORM\Locator\LocatorAwareTrait;

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

    public function homepage()
    {
        $admins = $this->paginate($this->Agents);

        $this->set(compact('admins'));
    }

    /**
     * faq
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function faq()
    {

    }

    public function add()
        {
            $agent = $this->Agents->newEmptyEntity();
            if ($this->request->is('post')) {
                $agent = $this->Agents->patchEntity($agent, $this->request->getData());

                $sub = $this->request->getData('subscription_status');
                if($sub=='0'){
                            $agent->subscription_status='Yes';}
                            else{
                            $agent->subscription_status='No';};
                $email = $this->request->getData('email');
                $fname = $this->request->getData('family_name');
                $gname = $this->request->getData('given_name');
                $user_name = $this->request->getData('user_name');
                $status=$agent->subscription_status;

                $password = $this->request->getData('password');
                $key = $this->request->getData('email');
                $session = $this->getRequest()->getSession();
                $session->write(['email' => $email,'status'=>$status,'user_name' => $user_name,'email' => $email, 'password' => $password,'family_name' => $fname,
                    'given_name' => $gname]);
                $session->read('email');
                $session->read('family_name');
                $session->read('given_name');
                $session->read('user_name');
                $session->read('password');
                $session->read('status');



                if ($this->Agents->save($agent)) {
                {$this-> redirect(['controller' => 'Users', 'action' => 'adduser1']);}



    //                 if ($sub == 'Yes') {
    //                 debug($sub);
    //                 exit;
    //                     $this->redirect(['controller' => 'NewsletterSubscriptions', 'action' => 'display']);
    //                 }

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The agent could not be saved. Please, try again.'));
            }
            $this->set(compact('agent'));
        }
public function addfront()
    {
        $agent = $this->Agents->newEmptyEntity();
        if ($this->request->is('post')) {
            $agent = $this->Agents->patchEntity($agent, $this->request->getData());

            $sub = $this->request->getData('subscription_status');
            if($sub=='0'){
                        $agent->subscription_status='Yes';}
                        else{
                        $agent->subscription_status='No';};
            $email = $this->request->getData('email');
            $fname = $this->request->getData('family_name');
            $gname = $this->request->getData('given_name');
            $user_name = $this->request->getData('user_name');
            $status=$agent->subscription_status;

            $password = $this->request->getData('password');
            $key = $this->request->getData('email');
            $session = $this->getRequest()->getSession();
            $session->write(['email' => $email,'status'=>$status,'user_name' => $user_name,'email' => $email, 'password' => $password,'family_name' => $fname,
                'given_name' => $gname]);
            $session->read('email');
            $session->read('family_name');
            $session->read('given_name');
            $session->read('user_name');
            $session->read('password');
            $session->read('status');



            if ($this->Agents->save($agent)) {
            {$this-> redirect(['controller' => 'Users', 'action' => 'adduser']);}



//                 if ($sub == 'Yes') {
//                 debug($sub);
//                 exit;
//                     $this->redirect(['controller' => 'NewsletterSubscriptions', 'action' => 'display']);
//                 }

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

    public function login()
    {

        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();


        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            // redirect to /articles after login success
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Pages',
                'action' => 'home',
            ]);


            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    public function forgot()
        {
         if ($this->request->is('post')){

        $agents = $this->getTableLocator()->get('Agents');
        $this->loadModel('Agents');

         // request data from the user form
         $userEmailFromForm = $this->request->getData('email');
//          debug($userEmailFromForm);
//          exit;

         $selectedUser = $agents->find()->where(['email' => $userEmailFromForm])->first();
$email=$selectedUser->email;
$username=$selectedUser->user_name;
$password=$selectedUser->password;
// debug($username);
// exit;


            if ($userEmailFromForm==$email) {


                $mailer = new Mailer('default');
                $mailer
                    ->setEmailFormat('html')
                    ->setTo($email)
                    ->setFrom(Configure::read('OrderEmail.from'))
                    ->setReplyTo(Configure::read( 'OrderEmail.from'))
                    ->setSubject(" Forgot password Email ")
                    ->viewBuilder()
                    ->disableAutoLayout()
                    ->setTemplate('forgotpassword');

                $mailer->setViewVars([

                    'email' => $email, 'username' => $username,'password' => $password]);


                $email_result = $mailer->deliver();

            } else {
                $this->Flash->error(__('Please check whether you sent Email sent before or did the agent paid yet!'));
            }

            return $this->redirect(['action' => '/forgot1']);
        }}

public function forgot1()
    {}
    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect('/');
        }
    }
       public function beforeFilter(\Cake\Event\EventInterface $event)
        {
            parent::beforeFilter($event);
            // Configure the login action to not require authentication, preventing
            // the infinite redirect loop issue
            $this->Authentication->addUnauthenticatedActions(['addfront','forgot','forgot1','add']);


        }
}
