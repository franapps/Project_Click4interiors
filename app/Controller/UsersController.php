<?php
// /app/controllers/users_controller.php

class UsersController extends AppController {
	var $name = 'Users';
	var $helpers = array('Html', 'Form');

	function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

	function login() {
		if ($this->request->is('post')) {
    	    if ($this->Auth->login()) {
    	        return $this->redirect($this->Auth->redirectUrl());
    	    } else {
    	        $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
    	    }
    	}
	}

	function logout() {
		$this->redirect($this->Auth->logout());
	}
}
?>