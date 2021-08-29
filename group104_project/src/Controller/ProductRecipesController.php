<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductRecipes Controller
 *
 * @property \App\Model\Table\ProductRecipesTable $ProductRecipes
 * @method \App\Model\Entity\ProductRecipe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductRecipesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recipes', 'Products'],
        ];
        $productRecipes = $this->paginate($this->ProductRecipes);

        $this->set(compact('productRecipes'));
    }

    /**
     * View method
     *
     * @param string|null $id Product Recipe id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productRecipe = $this->ProductRecipes->get($id, [
            'contain' => ['Recipes', 'Products'],
        ]);

        $this->set(compact('productRecipe'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productRecipe = $this->ProductRecipes->newEmptyEntity();
        if ($this->request->is('post')) {
            $productRecipe = $this->ProductRecipes->patchEntity($productRecipe, $this->request->getData());
            if ($this->ProductRecipes->save($productRecipe)) {
                $this->Flash->success(__('The product recipe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product recipe could not be saved. Please, try again.'));
        }
        $recipes = $this->ProductRecipes->Recipes->find('list', ['limit' => 200]);
        $products = $this->ProductRecipes->Products->find('list', ['limit' => 200]);
        $this->set(compact('productRecipe', 'recipes', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Recipe id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productRecipe = $this->ProductRecipes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productRecipe = $this->ProductRecipes->patchEntity($productRecipe, $this->request->getData());
            if ($this->ProductRecipes->save($productRecipe)) {
                $this->Flash->success(__('The product recipe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product recipe could not be saved. Please, try again.'));
        }
        $recipes = $this->ProductRecipes->Recipes->find('list', ['limit' => 200]);
        $products = $this->ProductRecipes->Products->find('list', ['limit' => 200]);
        $this->set(compact('productRecipe', 'recipes', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Recipe id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productRecipe = $this->ProductRecipes->get($id);
        if ($this->ProductRecipes->delete($productRecipe)) {
            $this->Flash->success(__('The product recipe has been deleted.'));
        } else {
            $this->Flash->error(__('The product recipe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
