<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Admins Controller
 *
 * @property \App\Model\Table\AdminsTable $Admins
 * @method \App\Model\Entity\Admin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

 class AdminsController extends AppController
{

    public function initialize(): void {
        parent::initialize();

        // giving acess frp, page to page in controller instead of overall.
        $this->Authentication->allowUnauthenticated(['login', 'add', 'logout']);

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $admins = $this->paginate($this->Admins);

        $this->set(compact('admins'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admin = $this->Admins->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('admin'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admins->newEmptyEntity();
        if ($this->request->is('post')) {
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());
            
            if(!$admin->getErrors){
                $image = $this->request->getData('image');

                $name = $image->getClientFilename();

                $targetPath = WWW_ROOT.'img'.DS.$name;

                if($name)
                    $image->moveTo($targetPath);

                $admin->image = $name;
            }
            
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admin = $this->Admins->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());

            if(!$admin->getErrors){
                $image = $this->request->getData('image');

                $name = $image->getClientFilename();

                $targetPath = WWW_ROOT.'img'.DS.$name;

                if($name)
                    $image->moveTo($targetPath);

                $admin->image = $name;
            }

            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $this->set(compact('admin'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admins->get($id);
        if ($this->Admins->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login(){
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();

          if ($result && $result->isValid()) {
            // set a fallback location in case user logged in without triggering 'unauthenticatedRedirect'
            $fallbackLocation = ['controller' => 'Admins', 'action' => 'index'];

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
        return $this->redirect(['controller' => 'Admins', 'action' => 'login']);
    }

}
