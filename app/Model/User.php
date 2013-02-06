<?php
App::uses('AuthComponent', 'Controller/Component');
// file: /app/models/user.php
class User extends AppModel {
	var $validate = array(
		'username'=>array(
			'rule'=>'notEmpty',
			'message'=>'Please enter your Username'
		),
		'password'=>array(
			'rule'=>'notEmpty',
			'message'=>'Please enter your Password'
		)
	);

	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	    }
	    return true;
	}
}
?>