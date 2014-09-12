<?php

App::uses( 'Controller/Component');

class Debt extends AppModel {
    public $name = 'Debt';

    public $validate = array(
        'dt_compra' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
        ),
        'dt_vencimento' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
        ),
        'dt_cobranca' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
         ),
        'valor' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
         ),
        'tipo_cobranca' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha este campo!'
         )
    );

    

}

?>