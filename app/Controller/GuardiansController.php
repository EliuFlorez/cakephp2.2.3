<?php

App::uses('AppController','Controller');


class GuardiansController extends AppController{
	
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Guardian->create();
			if ($this->Guardian->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'flash_red');
			}
		}
		
	}		
	
	public function edit($id = null) {
		$this->Guardian->id = $id;
		if (!$this->Guardian->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Guardian->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'flash_red');
			}
		} else {
			$this->request->data = $this->Guardian->read(null, $id);
		}
		
	}

	
}

?>