<?php
App::uses('AppController', 'Controller');
/**
 * Companies Controller
 *
 * @property School $School
 */
class SchoolsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function beforeFilter() {
        parent::beforeFilter();
       // $this->Auth->allow('add');
    }
    
	public function index() {
		$this->School->recursive = 0;
		$this->set('schools', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->School->id = $id;
		if (!$this->School->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->set('school', $this->School->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->School->create();
			if ($this->School->saveAll($this->request->data,array('deep'=>true))) {
			 	$this->Session->setFlash(__('The school details has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school details could not be saved. Please, try again.'),'flash_red');
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
		$this->School->id = $id;
		if (!$this->School->exists()) {
			throw new NotFoundException(__('Invalid school'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->School->saveAll($this->request->data,array('deep'=>true))) {
				$this->Session->setFlash(__('The school has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school could not be saved. Please, try again.'),'flash_red');
			}
		} else {
			$this->request->data = $this->School->read(null, $id);
			$this->set('school',$this->request->data);
			
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
		$this->School->id = $id;
		if (!$this->School->exists()) {
			throw new NotFoundException(__('Invalid school'));
		}
		if ($this->School->delete()) {
			$this->Session->setFlash(__('School deleted'),'flash_green');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('School was not deleted'),'flash_red');
		$this->redirect(array('action' => 'index'));
	}
}
