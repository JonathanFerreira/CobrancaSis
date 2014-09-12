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


    public function add(){
      if($this->request->is('post')){
         $this->request->data ['Debt']['name'] = $userName;
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

}

?>