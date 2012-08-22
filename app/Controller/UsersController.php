<?php
App::uses('AppController', 'Controller');
/**
* Users Controller
*
* @property User $User
*/
class UsersController extends AppController { 

    public $uses = array("User");
    public $helpers = array('Js','Form','Html');
    public $components = array('RequestHandler','Session','Cookie','Paginator');
    public $paginate = array(
    'limit' => 25,
    'order' => array(
    'User.user_id'=>'asc'
    )
    );
    
    public $layout = 'userlayout';

    /**
    * index method
    *
    * @return void
    */
    public function index() {
        
        //echo "yo";
        
        //pr($this->paginate);
        
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    /**
    * view method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    /**
    * add method
    *
    * @return void
    */
    public function add() {
        //pr($_REQUEST);
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $users = $this->User->find('all');
        $this->set(compact('users'));
    }

    /**
    * edit method
    *
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function edit($id = null) {
        //pr($id);
        //pr($_REQUEST);
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null,$id);
        }
        $users = $this->User->find('all');
        $this->set(compact('users'));
    }

    /**
    * delete method
    *
    * @throws MethodNotAllowedException
    * @throws NotFoundException
    * @param string $id
    * @return void
    */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
