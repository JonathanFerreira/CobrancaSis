<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
    public $name = 'User';

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
        ),
        'username' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
        ),
        'password' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
         ),
        'email' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
         ),
        'telefone' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
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