<?php
class EventsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Event';
    public $components = array('Session');
    public $uses = array('Event','Debt');
   
    
    function index(){
       $this->Event->recursive = 0;
       $this->set('events', $this->paginate());      

    }


    public function add($id){
      if($this->request->is('post')){
        $this->request->data['Event']['name'] = $this->Auth->user('name');
        $this->request->data['Event']['debt_id'] = $id;        
       
         if ($this->Event->save($this->request->data)) {
                $this->Session->setFlash('Evento cadastrada com sucesso!');
                //$this->redirect(array('action' => 'index'));
          }else{
            $this->Session->setFlash('Houve um erro ao cadastrar o evento!');
          }
      }
    }


    public function view($id) {
        $this->Event->id = $id;
        $this->set('evento', $this->Event->read());   

    }

    function edit($id = null) {
       $this->Event->id = $id;
       if ($this->request->is('get')) {
           $this->request->data = $this->Event->read();
        } else {
                 if ($this->Event->save($this->request->data)) {
                    $this->Session->setFlash('Evento Alterado com Sucesso!');
                   //$this->redirect(array('action' => 'index'));
                  }
             }
    }

    function delete($id) {
  
      if ($this->Event->delete($id)) {
         $this->Session->setFlash('Evento Deletado!');
         $this->redirect(array('action' => 'index'));
      }
    }


}

?>