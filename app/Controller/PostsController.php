<?php
class PostsController extends AppController {
	public $helpers = array('Html', 'form', 'Js');
	public $components = array('session');

	function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$this->set('posts', $this->Post->find('all', array('limit'=>10, 'order' => array('ID' => 'desc'))));
	}

	public function view($id = null) {
		$this->Post->id = $id;
		$this->set('post', $this->Post->read());
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Your post has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your post.');
			}
		}
	}

	public function edit($id = null) {
		$this->Post->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Post->read();
		} else {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Your post has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your post.');
			}
		}
	}

	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Post->delete($id)) {
			$this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}

	public function latest() {
		$this->set('posts', $this->Post->find('all', array('limit'=>1, 'order' => array('Post.created' => 'desc'))));
	}
}