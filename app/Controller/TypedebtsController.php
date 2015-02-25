<?php
class TypedebtsController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $uses = array('Typedebt');

    public function index() {
        $this->User->recursive = 0;        
    }   

    public function add() {
        if ($this->request->is('post')) {
            $this->Typedebt->create();
            if ($this->Typedebt->save($this->request->data)) {
                 $this->Session->setFlash('<div class="alert alert-info">
                               Tipo de cobrança criada com sucesso! 
                            </div>');
             
            } else {
               $this->Session->setFlash('<div class="alert alert-danger">
                               Houve um erro ao criar o tipo de cobrança! 
                            </div>');
            }

            if($this->Auth->user('group') == 0){
                 $this->redirect(array('controller'=>'users','action'=>'index')) ;   

            }else{
               $this->redirect(array('controller'=>'users','action'=>'statistic'));
              }
        }
    }
}