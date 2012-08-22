<?php
App::uses('AppController', 'Controller');
/**
 * Years Controller
 *
 * @property Year $Year
 */
class YearsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Year->recursive = 0;
		$this->set('years', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Year->id = $id;
		if (!$this->Year->exists()) {
			throw new NotFoundException(__('Invalid year'));
		}
		$this->set('year', $this->Year->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Year->create();
			if ($this->Year->save($this->request->data)) {
				$this->Session->setFlash(__('The year has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The year could not be saved. Please, try again.'));
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
		$this->Year->id = $id;
		if (!$this->Year->exists()) {
			throw new NotFoundException(__('Invalid year'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Year->save($this->request->data)) {
				$this->Session->setFlash(__('The year has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The year could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Year->read(null, $id);
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
		$this->Year->id = $id;
		if (!$this->Year->exists()) {
			throw new NotFoundException(__('Invalid year'));
		}
		if ($this->Year->delete()) {
			$this->Session->setFlash(__('Year deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Year was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
