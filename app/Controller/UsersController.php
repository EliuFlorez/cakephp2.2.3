<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

/**
 * index method
 *
 * @return void
 */

	public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('register', 'logout','forgotPassword','resetPassword');
        
        if($this->request->action =='register'){
        	if($this->Auth->loggedIn()){
        		 $this->Session->setFlash(__('Please logout first to register as another user'),'flash_red');
			     $this->redirect($this->Auth->redirect());
	    	}
        	//$this->redirect(array('controller'=>'dashboards','action'=>'index'));
        }
    }
    
    
    public function login() {
    	$this->layout = 'login';
    	if($this->Auth->loggedIn()){
		     $this->redirect($this->Auth->redirect());
    	}
    		            
	    if ($this->request->is('post')){
	        if ($this->Auth->login()) {
	        	$this->_setSlug();
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash(__('Invalid username or password, try again'),'flash_red');
	        }
	    }
	}
	
	
	public function _setSlug(){
		  $this->User->Group->id=AuthComponent::user('group_id');
		  $this->Session->write('slug',$this->User->Group->field('slug'));
		  $this->Session->write('group_name',$this->User->Group->field('group_name'));
	}
	
	public function _unsetSlug(){
		CakeSession::delete('slug');
		CakeSession::delete('group_name');

	}
	public function logout() {
		$this->_unsetSlug();
	    $this->redirect($this->Auth->logout());
	}
    

	public function forgotPassword(){
		$this->layout='ajax';
		if($this->request->isAjax()){
			
			$user_data=$this->User->find('first',array(
								'conditions'=>array(
											  'User.username'=>$_GET['username'],
											  'User.is_active' => 1,
											  'User.is_deleted' => 0,
											)
								));
			
				 if(empty($user_data)){
	        	 	   die("Sorry, Invalid username.");
	        	 }else{
	        	 	  $this->User->id=$user_data['User']['id'];
	        	 	  $temporary_password = substr(md5(microtime()), -15, 12);
	        	 	  $this->User->saveField('temporary_password', $temporary_password);
					  if($this->_sendemail($user_data,$temporary_password)){
					     die('Your password recovery email has been sent successfully.');			
					  }else{
					  	 die('try again.');			
					  }
	        	      
	        	 }
		}
			
    }
    
    public function _sendemail($user_data,$temporary_password){
                
                $email = new CakeEmail();
                $email->config('gmail');
				
				$email->template('password_recovery_email', 'default');
         		$email->emailFormat('html');
				$email->viewVars(array(
				   'temporary_password'=>$temporary_password,
				   'user_data'=>$user_data
				));						
                $email->from(array('isfemailagent@gmail.com' => 'IPS System'));
                $email->to($user_data['User']['email_address']);
               
                $email->subject('password recovery email');

               if( $result=$email->send()){
	 			return true;
		       }

    

     }
        
    public function resetPassword($recovery_password){
    	
		    $this->set("title_for_layout","ISF Services : Reset Password");
            $this->layout='login';
                       
            if($this->request->is('post')) {
			        // print_r($this->request->data);exit;
            	     // to validate  
                     $this->User->set($this->request->data);                    
                     if ($this->User->validates(array('fieldList'=>array('password','confirm_password')))){

                               $this->User->id=$this->data['User']['id'];
                               if ($this->User->saveField('password',$this->data['User']['password'])) {
                               			if($this->User->saveField('temporary_password',null)){
										      $this->Session->setFlash('congratulations, password updated successfully !!!');
											  $this->redirect(array('action' => 'login'));
										}	  
                                }
                           
                                                      
                     }
            }else{
            
             	$user_data=$this->User->find('first',array(
								'conditions'=>array(
										'User.temporary_password'=>$recovery_password
								)
							));
				 $this->request->data = $user_data;		
				 //echo "<pre>"; print_r($this->request->data);exit;		
	             if($user_data==false){
	             	
	             	$this->redirect(array('controller'=>'users','action'=>'notificationMessage','invalid_link'));
	             }
            } 
			
			

        }
        
	public function index() {
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
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'flash_red');
			}
		}
		$groups = $this->User->Group->find('list');
		$departments = $this->User->Department->find('list');
		$this->set(compact('groups', 'departments'));
	}
	
	public function register() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$id = $this->User->id;
		        $this->request->data['User'] = array_merge($this->request->data['User'], array('id' => $id));
		        $this->Auth->login($this->request->data['User']);
		        $this->_setSlug();
		        $this->redirect(array('controller'=>'users','action'=>'myProfile'));
        
				$this->Session->setFlash(__('The user has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'flash_red');
			}
		}
		$groups = $this->User->Group->find('list',array('conditions'=>array('allow_register'=>true)));
		$this->set(compact('groups'));
	}
	
	
	public function myProfile(){
		
		$id = $this->User->id = AuthComponent::user('id');
		
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
				
		if ($this->request->is('post') || $this->request->is('put')) {
			//echo "<pre>";	print_r($this->request->data);	exit;
			if ($this->User->saveAll($this->request->data,array('deep'=>'true'))) {
				$this->Session->setFlash(__('The user has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'flash_red');
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
			//echo "<pre/>"; print_r($this->request->data);exit();
		}
		
		
		if($this->Session->read('slug')=='parent'){
		   $this->render('parent_profile');	
		}
		
		if($this->Session->read('slug')=='student'){
			$this->loadModel('Standard');
			$this->loadModel('Division');
			$standards = $this->Standard->find('list');
			$divisions = $this->Division->find('list');
			$this->set(compact('standards','divisions'));
		    $this->render('student_profile');	
		}
		
		if($this->Session->read('slug')=='teacher'){
		  $this->render('teacherProfile');	
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->saveAll($this->request->data,array('deep'=>'true'))) {
				$this->Session->setFlash(__('The user has been saved'),'flash_green');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'),'flash_red');
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$departments = $this->User->Department->find('list');
		$this->set(compact('groups', 'departments'));
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
			$this->Session->setFlash(__('User deleted'),'flash_green');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'),'flash_red');
		$this->redirect(array('action' => 'index'));
	}
}
