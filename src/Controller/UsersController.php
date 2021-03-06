<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function addbyhand()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['controller'=>'Pages','action' => 'display']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

        public function adduser (){
            $user = $this->Users->newEmptyEntity();

            $email = $this->getRequest()->getSession()->read('email');
            $username = $this->getRequest()->getSession()->read('user_name');
            $password = $this->getRequest()->getSession()->read('password');
            $sub = $this->getRequest()->getSession()->read('status');





            $user['email'] = $email;
            $user['username'] = $username;
            $user['password'] = $password;

            $this->Users->save($user);
            $this->set(compact('user'));




            if ($sub == 'Yes') {
             return  $this->redirect(['controller' => 'NewsletterSubscriptions', 'action' => 'display2']);   }

             else return $this->Flash->success(__('The user has been saved.'));


             }
 public function adduser1 (){
            $user = $this->Users->newEmptyEntity();

            $email = $this->getRequest()->getSession()->read('email');
            $username = $this->getRequest()->getSession()->read('user_name');
            $password = $this->getRequest()->getSession()->read('password');
            $sub = $this->getRequest()->getSession()->read('status');





            $user['email'] = $email;
            $user['username'] = $username;
            $user['password'] = $password;

            $this->Users->save($user);
            $this->set(compact('user'));



            if ($sub == 'Yes') {
             return  $this->redirect(['controller' => 'NewsletterSubscriptions', 'action' => 'display1']);   }

             else return $this->Flash->success(__('The user has been saved.'));


             }


    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login','addbyhand','adduser']);
//,'adduser','adduser1','add','edit','index','view'
    }

    public function login()
    {


        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        //debug($this->request);




        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            if(true){
                $email = $this->request->getAttribute('authentication')->getIdentity()->email;
                $domain = strstr($email,'@');
                //if user email is not from hearty honey company
                if($domain != "@heartyHoney.com"){


                    $u = $this->request->getAttribute('authentication')->getIdentity()->id;
                    $session = $this->getRequest()->getSession();
                    $session->write(['id'=>$u]);
                    $session->read('id');


                    return $this->redirect([
                        'controller' => 'Agents',
                        'action' => 'homepage',
                    ]);
                }
            }


            // redirect to /articles after login success
//            debug($result->getData());
//            exit;
            $id = $result->getData()->id;
            $username = $result->getData()->username;
            $email = $result->getData()->email;
            $data = [
                'id' => $id,
                'username' => $username,
                'useremail' => $email
            ];


            $this->set($data);


            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Pages',
                'action' => 'home',

            ]);


            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->success(__('Invalid username or password'));
        }
    }
    // in src/Controller/UsersController.php

}
