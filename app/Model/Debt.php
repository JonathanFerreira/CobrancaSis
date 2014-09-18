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

    public $hasMany = array(
    'Events' => array(
    'className' => 'Events',
    'foreignKey' => 'debt_id',
    'dependent'=> true,
    ));


    
    public function beforeSave($options = array()) {
        parent::beforeSave();
        $this->data['Debt']['dt_compra'] = implode('-',array_reverse(explode('/',$this->data['Debt']['dt_compra'])));
        $this->data['Debt']['dt_vencimento'] = implode('-',array_reverse(explode('/',$this->data['Debt']['dt_vencimento'])));
        $this->data['Debt']['dt_cobranca'] = implode('-',array_reverse(explode('/',$this->data['Debt']['dt_cobranca'])));

        return true;
    }

}
?>