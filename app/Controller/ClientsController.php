<?php
class ClientsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Client';
    public $components = array('Session');
   // public $uses = array('User','Debt');
    
     

     function index() {
       $this->Client->recursive = 0;
       $this->set('clients', $this->paginate());
 
    }

  

    public function add() {
        if ($this->request->is('post')) {            
          
            if ($this->Client->save($this->request->data)) {
                $this->Session->setFlash('Cadastro efetuado com sucesso!');
                //$this->redirect(array('action' => 'index'));
            }
      

        }
    }


      public function view($id) {
        $this->Client->id = $id;
        $this->set('cliente', $this->Client->read());
   

      }

    function edit($id = null) {
       $this->Client->id = $id;
      
       if ($this->request->is('get')) {
           $this->request->data = $this->Client->read();
        } else {
                 if ($this->Client->save($this->request->data)) {
                    $this->Session->setFlash('Cliente Alterado com Sucesso!');
                    $this->redirect(array('action' => 'index'));
                  }
             }
     }

     function delete($id) {
        if (!$this->request->is('post')) {
          throw new MethodNotAllowedException();
        }
        if ($this->Client->delete($id)) {
           $this->Session->setFlash('Cliente Deletado!');
           
        }
     }

     

 
}

?>