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
    
    public function send($id = null)
    {
        $this->loadModel('Items');
        $item = $this->Items->get($id, [
            'contain' => ['Users']
        ]);

        $message = $this->Users->Messages->newEntity();
        if ($this->request->is('post')) {
            $message = $this->Users->Messages->patchEntity($message, $this->request->getData());
            if ($this->Users->Messages->save($message)) {
                $this->Flash->success(__('The message has been sent.'));

                return $this->redirect(['action' => 'dashboard']);
            }
            $this->Flash->error(__('The message did not send. Please, try again.'));
        }
        
        
        
        $this->set('item', $item);
        $this->set('_serialize', ['item']);
        //$senders = $this->Auth->user('id');
        $users = $this->Users->find('list', ['limit' => 200]);
        $this->set(compact('message', 'users', 'senders'));
        
        $this->set('_serialize', ['message']);
    }
    
    
    public function reply($item_id = null)
    {
        $this->loadModel('Items');
        $item = $this->Items->get($item_id, [
            'contain' => ['Users']
        ]);
        
        //$sender_id = $this->request->query('sender_id');
        //echo $sender_id;
        $message = $this->Users->Messages->newEntity();
        //$message = $
        if ($this->request->is('post')) {
            $message = $this->Users->Messages->patchEntity($message, $this->request->getData());
            if ($this->Users->Messages->save($message)) {
                $this->Flash->success(__('The message has been sent.'));

                return $this->redirect(['controller' => 'users', 'action' => 'dashboard', $item->user->id]);
            }
            $this->Flash->error(__('The message did not send. Please, try again.'));
        }
        
        
        
        $this->set('item', $item);
        $this->set('_serialize', ['item']);
        //$senders = $this->Auth->user('id');
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
		$this->Flash->error('Try again');
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
            //make sure that user opening a dashboard can only view their page
           if($id == $this->Auth->user('id')){
           $user = $this->Users->get($id, [
            'contain' => ['Items'] 
             ]);
           $username = $this->Auth->user('username');
           $message = $this->Users->get($id, ['contain' => ['Messages']]);
           $this->loadModel('Messages');
           $mess = $this->Messages->find()->where(['sender_id' => $id]);
           $messy = $this->Messages->find()->where(['user_id' => $id]);
           //foreach($mess as $messy):
           $userid = $this->Users->find();
                  // ->where(['id' => $messy->user_id]);
            //endforeach;
            $messages = $this->paginate($mess);
            $messages1 = $this->paginate($messy);
            $userids = $this->paginate($userid);
             //$sentmess = $this->Messages->find()->where(['user_id'=>$id]);
           // $sentmess = $this->Users->get($id, ['contain' => ['sentMessages']]);
            //$sentmessage = $this->User->find('all', 'contain' =>)
           // $messages = $this->Users->find()->where(['user_id' => $id]);
            $this->set('user', $user);
            $this->set('message', $message);
            $this->set('username', $username);
            $this->set('userids', $userids);
            $this->set('messages', $messages);
            $this->set('messages1', $messages1);

            $this->set(compact('messages'));
            $this->set('_serialize', ['messages']);
      
           // $this->set('sentmess', $sentmess);
                 
                $this->set('_serialize', ['user']);
                $this->set('_serialize', ['message']);
                
               // $this->set('_serialize', ['sentmess']);    
            }
             else{
                 return $this->redirect([$this->Auth->user('id')]);
             }
        }
        
        
        public function isAuthorized($user)
        {
              $action = $this->request->getParam('action');

        // The add and index actions are always allowed.
                if (in_array($action, ['add', 'dashboard', 'send', 'reply', 'logout'])) {
            return true;
        }
        // All other actions require an id.
         if (!$this->request->getParam('pass.0')) {
            return false;
         }

        // Check that the item belongs to the current user.
        $id = $this->request->getParam('pass.0');
        $item = $this->Items->get($id);
        //$messages = $this->Messages->get($id);
         if ($item->user_id == $user['id']) {
            return true;
           }
            return parent::isAuthorized($user);
        }
        
        
	public function beforeFilter(Event $event){
		$this->Auth->allow(['register', 'add', 'login', 'logout']);
                 $user_id = $this->Auth->user('id');
                 $this->set(compact('item', 'user_id'));
	}

}
