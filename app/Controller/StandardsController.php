<?php
App::uses('AppController', 'Controller');
/**
 * Standards Controller
 *
 * @property Standard $Standard
 */
class StandardsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Standard->recursive = 0;
		$this->set('standards', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Standard->id = $id;
		if (!$this->Standard->exists()) {
			throw new NotFoundException(__('Invalid standard'));
		}
		$this->set('standard', $this->Standard->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Standard->create();
			if ($this->Standard->save($this->request->data)) {
				$this->Session->setFlash(__('The standard has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The standard could not be saved. Please, try again.'));
			}
		}
		$schools = $this->Standard->School->find('list');
		$divisions = $this->Standard->Division->find('list');
		$this->set(compact('schools', 'divisions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Standard->id = $id;
		if (!$this->Standard->exists()) {
			throw new NotFoundException(__('Invalid standard'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Standard->save($this->request->data)) {
				$this->Session->setFlash(__('The standard has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The standard could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Standard->read(null, $id);
		}
		$schools = $this->Standard->School->find('list');
		$divisions = $this->Standard->Division->find('list');
		$this->set(compact('schools', 'divisions'));
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
		$this->Standard->id = $id;
		if (!$this->Standard->exists()) {
			throw new NotFoundException(__('Invalid standard'));
		}
		if ($this->Standard->delete()) {
			$this->Session->setFlash(__('Standard deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Standard was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
