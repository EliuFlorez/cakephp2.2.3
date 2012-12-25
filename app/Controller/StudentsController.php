<?php

App::uses('AppController','Controller');


class StudentsController extends AppController{
	
	public function index() {
		$this->Student->recursive = 0;
		$this->set('students', $this->paginate());
	}    
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Student->create();
			if ($this->Student->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'flash_red');
			}
		}
		
	}		
	
	public function edit($id = null) {
		$this->Student->id = $id;
		if (!$this->Student->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Student->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'flash_red');
			}
		} else {
			$this->request->data = $this->Student->read(null, $id);
		}
		
	}

	
}

?>