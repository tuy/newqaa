<?php
App::uses('AppController', 'Controller');
/**
 * Subelements Controller
 *
 * @property Subelement $Subelement
 */
class SubelementsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subelement->recursive = 0;
		$this->set('subelements', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Subelement->id = $id;
		if (!$this->Subelement->exists()) {
			throw new NotFoundException(__('Invalid subelement'));
		}
		$this->set('subelement', $this->Subelement->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subelement->create();
			if ($this->Subelement->save($this->request->data)) {
				$this->Session->setFlash(__('The subelement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subelement could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Subelement->id = $id;
		if (!$this->Subelement->exists()) {
			throw new NotFoundException(__('Invalid subelement'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Subelement->save($this->request->data)) {
				$this->Session->setFlash(__('The subelement has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subelement could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Subelement->read(null, $id);
		}
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
		$this->Subelement->id = $id;
		if (!$this->Subelement->exists()) {
			throw new NotFoundException(__('Invalid subelement'));
		}
		if ($this->Subelement->delete()) {
			$this->Session->setFlash(__('Subelement deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Subelement was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
