<?php
class DebtsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Debt';
    public $components = array('Session');
    public $uses = array('Debt');
   
    
    function index(){

       $this->Debt->recursive = 0;
       $this->set('debts', $this->paginate());

       

    }
    /*

    public function add_debt() {
        if ($this->request->is('post')) {            
            
            if ($this->Debt->save($this->request->data)) {
                $this->Session->setFlash('Cobrança Cadastrada com Sucesso!');
                $this->redirect(array('action' => 'index'));
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
                    $this->Session->setFlash('Usuario Alterado com Sucesso!');
                    $this->redirect(array('action' => 'index'));
                  }
             }
     }

     function delete($id) {
      if (!$this->request->is('post')) {
        throw new MethodNotAllowedException();
      }
      if ($this->Debt->delete($id)) {
         $this->Session->setFlash('Usuario Deletado!');
         $this->redirect(array('action' => 'index'));
      }
}


     public function list_debt_open() {        

         $abertas = $this->User-> find("all", array(
            'conditions' => array(
            'Debt.fechado' => 0
          )));  
   
        $this->set('abertas',$admins);

    }

     public function list_debt_close() {        

         $fechadas = $this->User-> find("all", array(
            'conditions' => array(
            'Debt.fechado' => 1
          )));  
   
        $this->set('fechadas',$admins);

    }

*/
 

 
}

?>