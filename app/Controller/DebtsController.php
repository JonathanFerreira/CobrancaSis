<?php
class DebtsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Debt';
    public $components = array('Session');
    public $uses = array('Debt','User');
   
    
    function index(){

       $this->Debt->recursive = 0;
       $this->set('debts', $this->paginate());      

    }


    public function add($id){
      if($this->request->is('post')){
        $this->request->data['Debt']['name'] = $this->Auth->user('name');
        $this->request->data['Debt']['client_id'] = $id;
        $this->request->data['Debt']['fechado'] = 0;
       
         if ($this->Debt->save($this->request->data)) {
                $this->Session->setFlash('Cobrança cadastrada com sucesso!');
                //$this->redirect(array('action' => 'index'));
          }else{
            $this->Session->setFlash('Houve um erro ao salvar a cobrança!');
          }
      }
    }


    public function view($id) {
        $this->Debt->id = $id;
        $this->set('cobranca', $this->Debt->read());   

    }

    function edit($id = null) {
       $this->Debt->id = $id;
       if ($this->request->is('get')) {
           $this->request->data = $this->Debt->read();
        } else {
                 if ($this->Debt->save($this->request->data)) {
                    $this->Session->setFlash('Cobrança Alterado com Sucesso!');
                    $this->redirect(array('action' => 'index'));
                  }
             }
    }

    function delete($id) {
      if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
      }
      if ($this->Debt->delete($id)) {
         $this->Session->setFlash('Cobrança Deletada!');
         $this->redirect(array('action' => 'index'));
      }
    }

      function list_open(){
      $abertas = $this->Debt-> find("all", array(
            'conditions' => array(
            'Debt.fechado' => 0
          ))); 
        $this->set('abertas',$abertas);
     }

      function list_close(){
      $fechadas = $this->Debt-> find("all", array(
            'conditions' => array(
            'Debt.fechado' => 1
          ))); 
      $this->set('fechadas',$fechadas);
     }

}

?>