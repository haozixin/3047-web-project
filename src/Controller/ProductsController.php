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
        // View, index and tags actions are public methods
        // and don't require authorization checks.
        $this->Authorization->skipAuthorization();

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
        // View, index and tags actions are public methods
        // and don't require authorization checks.
        $this->Authorization->skipAuthorization();

        $product = $this->Products->get($id, [
            'contain' => ['Orders', 'ProductRecipes'],
        ]);

        $this->set(compact('product'));
    }


   public function restock($id = null)
   {
       $product = $this->Products->newEmptyEntity();
       $this->Authorization->authorize($product);

        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        $productID= $product->id;
        $product_name= $product->name;
        $product_quantity= $product->quantity;
        $product_price= $product->customer_price;

        $session = $this->getRequest()->getSession();
        $session->write(['product_id'=> $productID,'name'=> $product_name,'quantity' => $product_quantity,'total'=>$product_price ]);
        $session->read('product_id');
        $session->read('name');
        $session->read('quantity');
        $session->read('total');
        $this->redirect(['controller' => 'Orders', 'action' => 'add']);
   }


    public function update($id = null)
    {
        $id = $quantity = $this->getRequest()->getSession()->read('product_id');
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        $currentQty = (int)$product['quantity'];
        $toSubtract = $this->getRequest()->getSession()->read('subtract');
        $newQuantity = $currentQty - $toSubtract;
        $product->quantity = $newQuantity;

        if ($newQuantity >= 0) {
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                $this->redirect(['controller' => 'Orders', 'action' => '/']);
            }
        }
        $this->set(compact('product'));
    }

//         public function submitrequest($id = null)
//                 {
//                      $this->paginate = [
//                          'contain' => ['Orders'],
//                      ];
//                      $products = $this->paginate($this->Products);
//
//                      $this->set(compact('products'));
//                  }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        $this->Authorization->authorize($product);
// rest of the method
        $product = $this->Products->newEmptyEntity();


        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            // Changed: Set the user_id from the current user.
            $product->id = $this->request->getAttribute('identity')->getIdentifier();

            $expired_date = $product->expired_date;
            $manufacture = $product ->date_of_manufacture;
            $customer_price = $this->request->getData('customer_price');
            $agent_price = $this->request->getData('agent_price');


            if(($customer_price<=0||$customer_price>1000) or ($agent_price<=0||$agent_price>1000)) {
                $this->Flash->success(__('You must input a valid unit price, the range should be 0-1000'));


            }else {
            if ($expired_date<$manufacture) {
                $this->Flash->success(__('And the expired date cannot be early than the date of manufacture'));
                                       }
                else{

                 //check if it is saved
                 if ($this->Products->save($product)) {
                 $this->Flash->success(__('The product has been saved.'));

                 return $this->redirect(['action' => 'index']);
                 }}}


            $this->Flash->success('The product could not be saved. Please, try again.');
            //$this->Flash->error(__('The product could not be saved. Please, try again.'));
        }

        $orders = $this->Products->Orders->find('list', ['limit' => 200]);
        $this->set(compact('product'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null,$slug)
    {
        $product = $this->Products
            ->findBySlug($slug)
            ->contain('Tags') // load associated Tags
            ->firstOrFail();
        $this->Authorization->authorize($product);
//rest of the method

        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData(),[
                // Added: Disable modification of user_id.
                'accessibleFields' => ['user_id' => false]
            ]);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $orders = $this->Products->Orders->find('list', ['limit' => 200]);
        $this->set(compact('product'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null,$slug)
    {
        $this->request->allowMethod(['post', 'delete']);

        $product = $this->Articles->findBySlug($slug)->firstOrFail();
        $this->Authorization->authorize($product);
        // Rest of the method.

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
