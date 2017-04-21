<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 */
class ItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
       
        //paginate items even if no search yet.
        $items = $this->paginate($this->Items);
        
        //the form in /Items/index.ctp is a post request
        if($this->request->is('post')){
            //print_r($this->request->data);
            //how we query database for anything like the input field in our form.
            // we called the form input field submit
                    $categories = $_POST['category'];
                    $exp_cat = explode("|", $categories);
                    $item = $this->Items->find()->where(['title LIKE'=>'%'.
                    $this->request->data["submit"] .'%'])->where(['category_id IN'=>$exp_cat]);
            
            //pagination is important for dynamic number of search results
            $items = $this->paginate($item);
            
        }
        
        $this->set(compact('items'));
        $this->set('_serialize', ['items']);
        
        
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('item', $item);
        $this->set('_serialize', ['item']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $users = $this->Items->Users->find('list', ['limit' => 200]);
        $categorys = $this->Items->Categorys->find('list', ['limit' => 200]);
        $this->set(compact('item', 'users'));
        $this->set(compact('item', 'categorys'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $users = $this->Items->Users->find('list', ['limit' => 200]);
        $this->set(compact('item', 'users'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    
   
   
    
    
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

	public function beforeFilter(Event $event){
		$this->Auth->allow(['index', 'view']);
	}
        
        public function isAuthorized($user)
        {
              $action = $this->request->getParam('action');

        // The add and index actions are always allowed.
                if (in_array($action, ['index', 'view', 'add', 'delete', 'edit'])) {
            return true;
        }
        // All other actions require an id.
         if (!$this->request->getParam('pass.0')) {
            return false;
         }

        // Check that the bookmark belongs to the current user.
        $id = $this->request->getParam('pass.0');
        $item = $this->Items->get($id);
         if ($item->user_id == $user['id']) {
            return true;
           }
            return parent::isAuthorized($user);
        }

}
