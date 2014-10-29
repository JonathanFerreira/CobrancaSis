<?php
class EventsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Event';
    public $components = array('Session','Paginator');
    public $uses = array('Event','Debt');

   
    
    function index(){
       $this->Event->recursive = 0;
       $this->set('events', $this->paginate());      

    }


    public function add($id = null){

      if($this->request->is('post')){

        $this->request->data['Event']['name'] = $this->Auth->user('name');
        $this->request->data['Event']['debt_id'] = $id;
        
        $novaData = implode('-',array_reverse(explode('/',$this->request->data['Event']['dt_evento'])));
                


         if ($this->Event->save($this->request->data)) { 

              $this->Debt->id = $id;           
              $this->request->data = $this->Debt->read();         
           
              $this->Debt->updateAll(
                array('Debt.fechado' => '2'),
                array('Debt.id' => $id)
               );          

              $this->Session->setFlash(' <div class="alert alert-info">
                               Evento cadastrada com sucesso! 
                            </div>');

            
              if($this->Auth->user('group') == 0){
               $this->redirect(array('controller'=>'users','action'=>'index')) ;   

               }else{
                  $this->redirect(array('controller'=>'users','action'=>'statistic'));
                 }

          }else{

              $this->Session->setFlash('Houve um erro ao cadastrar o evento!');
              if($this->Auth->user('group') == 0){
                $this->redirect(array('controller'=>'users','action'=>'index')) ;   

               }else{
                  $this->redirect(array('controller'=>'users','action'=>'statistic'));
                 }

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
                    $this->Session->setFlash('<div class="alert alert-warning">
                               Evento editado com sucesso! 
                            </div>');
                    if($this->Auth->user('group') == 0){
                       $this->redirect(array('controller'=>'users','action'=>'index')) ;   

                     }else{
                        $this->redirect(array('controller'=>'users','action'=>'statistic'));
                      }
                  
                  }else{
                    $this->Session->setFlash('<div class="alert alert-danger">
                               Houve um erro! 
                            </div>');

                  }
             }
    }

    function delete($id) {  
      if ($this->Event->delete($id)) {
         $this->Session->setFlash('<div class="alert alert-danger">
                               Evento deletado com sucesso! 
                            </div>');
          if($this->Auth->user('group') == 0){
                       $this->redirect(array('controller'=>'users','action'=>'index')) ;   

           }else{
               $this->redirect(array('controller'=>'users','action'=>'statistic'));
             }
         
      }else{
         $this->Session->setFlash('<div class="alert alert-danger">
                              Houve um erro! 
                            </div>');

      }
    }

    public function vencidos() {  

       $teste = $this->Event->find('all', array(
           'joins' => array(
            array(
                'table' => 'debts',
                'alias' => 'DebtJoin',
                'type' => 'INNER',
                'conditions' => array(
                    'DebtJoin.id = Event.debt_id',
                    'DebtJoin.fechado >= 1',
                    'DebtJoin.fechado <= 2'
                    
                )
            )
         ),
          
          'fields' => array('DebtJoin.*', 'Event.*'),
          'limit' => 10         
          
        ));      
      
      $options = array(             
             'joins' => array(
            array(
                'table' => 'debts',
                'alias' => 'DebtJoin',
                'type' => 'INNER',
                'conditions' => array(
                    'DebtJoin.id = Event.debt_id',
                    'DebtJoin.fechado >= 1',
                    'DebtJoin.fechado <= 2'
                    
                )
            )
         ),
          
          'fields' => array('DebtJoin.*', 'Event.*'),
          'limit' => 10 
        );

      $this->paginate = $options;
   
          // Roda a consulta, já trazendo os resultados paginados
          $vencidos = $this->paginate('Event');
   
          // Envia os dados pra view
         $this->set('vencidos',$vencidos);  
          $this->set('teste',$teste);  
    }



}

?>