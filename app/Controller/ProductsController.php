<?php
class ProductsController extends AppController {
	public $helpers = array('Html', 'form', 'Js');
	public $components = array('Session');

	public function index() {
		//List all products in Database
		$title = "Product Listing";
		$products = $this->Product->find('all');
		$this->set('products', $products);
	}

	public function view($id = null) {
		//View individual products
		$this->Product->id = $id;
		$this->set('product', $this->Product->read());
	}

	public function search() {
		if (!empty($this->data)) {
        	$searchstr = $this->data['Products']['search'];
        	$this->set('searchstring', $this->data['Products']['search']);
        	$conditions = array(
        	    'conditions' => array(
        	    'or' => array(
        	        "Product Name LIKE" => "%$searchstr%",
        	        "Product Description LIKE" => "%$searchstr%",
        	        "Product ID LIKE" => "%searchstr%",
        	        "Category LIKE" => "%searchstr%",
        	        "Sub-Category" => "%searchstr%",
        	        "Tags LIKE" => "%$searchstr%"
        	    	)
        	    )
        	);
        $this->set('products', $this->Product->find('all', $conditions));
    	} 
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash('The product has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add the product.');
			}
		}
	}

}
?>