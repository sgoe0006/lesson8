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
    public function initialize(): void {
        parent::initialize();

        // giving acess frp, page to page in controller instead of overall.
        $this->Authentication->allowUnauthenticated(['login', 'add', 'logout']);
    }

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
           
            if(!$user->getErrors){
                $image = $this->request->getData('image');

                $name = $image->getClientFilename();


                $targetPath = WWW_ROOT.'img'.DS.$name;

                if($name)
                    $image->moveTo($targetPath);

                $user->image = $name;
            }
           
           
            if ($this->Users->save($user)) {
                $this->Flash->success(__('You have successfully registered with Glass of Arts.'));

                return $this->redirect(['action' => 'login']);
            }
                        $this->Flash->error(__('The user could not be registered. Please try again.'));
        }
        $this->set(compact('user'));
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
            if(!$user->getErrors){
                $image = $this->request->getData('image');

                $name = $image->getClientFilename();

                $targetPath = WWW_ROOT.'img'.DS.$name;

                if($name)
                    $image->moveTo($targetPath);

                $user->image = $name;
            }
 
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

    //method for user login to the system
    public function login(){
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();

          if ($result && $result->isValid()) {
            // set a fallback location in case user logged in without triggering 'unauthenticatedRedirect'
            $fallbackLocation = ['controller' => 'Users', 'action' => 'index'];

            // and redirect user to the location they're trying to access
            return $this->redirect($this->Authentication->getLoginRedirect() ?? $fallbackLocation);
        }

        // display error if user submitted their credentials but authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Email address and/or Password are incorrect. Please try again. '));
        }
    }

    //method for the user to logout
    public function logout() {
        $result = $this->Authentication->getResult();
        //checking if the user is logged in if so then log them out.
        if ($result && $result->isValid()) {
            $this->Authentication->logout();

            $this->Flash->success(__('You have been logged out successfully. '));
        }

        // redirecting them to the login page
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }



    }

