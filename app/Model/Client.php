<?php



class Client extends AppModel {
    public $name = 'Client';

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
        ),
        'email' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
        ),
        'adress' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
         ),
        'CPF' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
         ),
        'tell' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
         )
    );

    

}

?>