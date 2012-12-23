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

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }
    
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
			if ($this->Standard->saveAll($this->request->data,array('deep'=>true))) {
				$this->Session->setFlash(__('The standard has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The standard could not be saved. Please, try again.'),'flash_red');
			}
		}
		$schools = $this->Standard->School->find('list');
		$this->set(compact('schools'));
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
			if ($this->Standard->saveAll($this->request->data,array('deep'=>true))) {
				$this->Session->setFlash(__('The standard has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The standard could not be saved. Please, try again.'),'flash_red');
			}
		} else {
			$this->request->data = $this->Standard->read(null, $id);
			$this->set('standard',$this->request->data);
		}
		$schools = $this->Standard->School->find('list');
		$this->set(compact('schools'));
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
			$this->Session->setFlash(__('Standard deleted'),'flash_green');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Standard was not deleted'),'flash_red');
		$this->redirect(array('action' => 'index'));
	}
}
