<?php



class Debt extends AppModel {
    public $name = 'Debt';

    public $validate = array(
        'dt_compra' => array(
            'rule' => array('date', 'dmy'),
            'message' => 'Selecione uma data valida.'
        ),
        'dt_vencimento' => array(
            'rule' => array('date', 'dmy'),
            'message' => 'Selecione uma data valida.'
        ),
        'dt_cobranca' => array(
            'rule' => array('date', 'dmy'),
            'message' => 'Selecione uma data valida.'
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