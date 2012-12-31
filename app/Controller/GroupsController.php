<?php
App::uses('AppController', 'Controller');
/**
 * Groups Controller
 *
 * @property Group $Group
 */
class GroupsController extends AppController {

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
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		$this->set('group', $this->Group->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Group->create();
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'),'flash_red');
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
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Group->save($this->request->data)) {
				$this->Session->setFlash(__('The group has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.'),'flash_red');
			}
		} else {
			$this->request->data = $this->Group->read(null, $id);
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
		echo "done";
		exit;
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Group->id = $id;
		if (!$this->Group->exists()) {
			throw new NotFoundException(__('Invalid group'));
		}
		if ($this->Group->delete()) {
			$this->Session->setFlash(__('Group deleted'),'flash_green');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Group was not deleted'),'flash_red');
		$this->redirect(array('action' => 'index'));
	}
	
	public function getData(){
		$pie_chart_arr = array();
		$this->Group->recursive = -1;
		$data = $this->Group->find('all',array(
									      'fields'=>array('user_count','group_name'),
									      'group'=>array('slug')
								         )
								  );
								  
		//echo "<pre/>"; print_r($data);exit;
		
		$pie_chart_arr['cols'][] = array("id"=>"","label"=>"user groups","pattern"=>"","type"=>"string"); 
		$pie_chart_arr['cols'][] = array("id"=>"","label"=>"no of users","pattern"=>"","type"=>"number");
		
		foreach($data as $arr){
	
	      	 $pie_chart_arr['rows'][] = array("c" => array(
							array("v" => $arr['Group']['group_name'],"f" => null),
					 		array("v"=>$arr['Group']['user_count'],"f"=>null)
				));
	           
	      	 }

	    echo json_encode($pie_chart_arr);  	 	
		exit;
	}
}
