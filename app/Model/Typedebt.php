<?php

class Typedebt extends AppModel {
    public $name = 'Typedebt';

    public $belongsTo = array('Debt');

    public $validate = array(        
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'Insira um nome para a cobrança!'
         )
    );   


}
?>