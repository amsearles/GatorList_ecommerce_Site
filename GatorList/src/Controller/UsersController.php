<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    
   
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Items']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    
    public function send()
    {
        $message = $this->Users->Messages->newEntity();
        if ($this->request->is('post')) {
            $message = $this->Users->Messages->patchEntity($message, $this->request->getData());
            if ($this->Users->Messages->save($message)) {
                $this->Flash->success(__('The message has been sent.'));

                return $this->redirect(['action' => 'dashboard']);
            }
            $this->Flash->error(__('The message did not send. Please, try again.'));
        }
        $senders = $this->Auth->user('id');
        $users = $this->Users->find('list', ['limit' => 200]);
        $this->set(compact('message', 'users', 'senders'));
        
        $this->set('_serialize', ['message']);
    }
    
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
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
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
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
	public function login(){
		if($this->request->is('post')){
			$user = $this->Auth->identify();
		
		if($user){
			$this->Auth->setUser($user);
			return $this->redirect(['controller' => 'items']);
		}
		$this->Flash->error('Nope');
		}
	}

	public function logout(){
		$this->Flash->success('Logged out');
		return $this->redirect($this->Auth->logout());
	}
	
	public function register(){
		$user = $this->Users->newEntity();
		if($this->request->is('post')){
			$user = $this->Users->patchEntity($user, $this->request->getData());
			if($this->Users->save($user)){
				$this->Flash->success(__('You registered, time to start selling'));
				return $this->redirect(['action' => 'login']);
			}
			
				$this->Flash->error(__('Something went wrong'));
			

		}
		$this->set(compact('user'));
		$this->set('_serialize', ['user']);

	}
        
       public function dashboard($id = null){
           if($id == $this->Auth->user('id')){
           $user = $this->Users->get($id, [
            'contain' => ['Items'] 
             ]);
           
            $message = $this->Users->get($id, ['contain' => ['Messages']]);
            $this->set('user', $user);
            $this->set('message', $message);
                 
                $this->set('_serialize', ['user']);
                $this->set('_serialize', ['message']);
                 
            }
             else{
                 return $this->redirect([$this->Auth->user('id')]);
             }
        }
        
        
        public function isAuthorized($user)
        {
              $action = $this->request->getParam('action');

        // The add and index actions are always allowed.
                if (in_array($action, ['add', 'dashboard', 'send'])) {
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
        
        
	public function beforeFilter(Event $event){
		$this->Auth->allow(['register', 'add', 'login', 'logout']);
                
	}

}
