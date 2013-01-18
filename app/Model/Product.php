<?php
class Product extends AppModel {
	public $validate = array(
		'Product Name' => array(
			'rule' => 'notEmpty'
		),
		'Product ID' => array(
			'rule' => 'notEmpty'
		),
		'Manufacturer' => array(
			'rule' => 'notEmpty'
		),
		'Product Description' => array(
			'rule' => 'notEmpty'
		),
		'Category' => array(
			'rule' => 'notEmpty'
		),
		'Price' => array(
			'rule' => 'notEmpty'
		),
		'Image' => array(
			'rule' => 'notEmpty'
		)
	);
}
