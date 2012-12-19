<?php
App::uses('AppController', 'Controller');
/**
 * Divisions Controller
 *
 * @property Division $Division
 */
class DivisionsController extends AppController {

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
		$this->Division->recursive = 0;
		$this->set('divisions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Division->id = $id;
		if (!$this->Division->exists()) {
			throw new NotFoundException(__('Invalid division'));
		}
		$this->set('division', $this->Division->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Division->create();
			if ($this->Division->saveAll($this->request->data,array('deep'=>true))) {
				$this->Session->setFlash(__('The division has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The division could not be saved. Please, try again.'),'flash_red');
			}
		}
		$companies = $this->Division->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Division->id = $id;
		if (!$this->Division->exists()) {
			throw new NotFoundException(__('Invalid division'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Division->saveAll($this->request->data,array('deep'=>true))) {
				$this->Session->setFlash(__('The division has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The division could not be saved. Please, try again.'),'flash_red');
			}
		} else {
			$this->request->data = $this->Division->read(null, $id);
		}
		$schools = $this->Division->School->find('list');
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
		$this->Division->id = $id;
		if (!$this->Division->exists()) {
			throw new NotFoundException(__('Invalid division'));
		}
		if ($this->Division->delete()) {
			$this->Session->setFlash(__('Division deleted'),'flash_green');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Division was not deleted'),'flash_red');
		$this->redirect(array('action' => 'index'));
	}
}
