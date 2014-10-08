<?php



class Event extends AppModel {
    public $name = 'Event';

    public $validate = array(
        'dt_evento' => array(
            'rule' => array('date', 'dmy'),
            'message' => 'Selecione uma data valida.'
        ),
        'motivo' => array(
            'rule' => 'notEmpty',
            'message' => 'Forneça um motivo.'
        ),
        'contato' => array(
            'rule' => 'notEmpty',
            'message' => 'Forneça um motivo.'
         )
    );




    
    public function beforeSave($options = array()) {
        parent::beforeSave();
        $this->data['Event']['dt_evento'] = implode('-',array_reverse(explode('/',$this->data['Event']['dt_evento'])));       
        return true;
    }

}
?>