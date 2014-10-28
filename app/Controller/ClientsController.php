<?php
class ClientsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Client';
    public $components = array('Session');
    public $uses = array('Client','User','Debt');
    
     

     function index() {
       $this->Client->recursive = 0;
       $this->set('clients', $this->paginate());
 
    }

  

    public function add() {
        if ($this->request->is('post')) {            
          
            if ($this->Client->save($this->request->data)) {
                $this->Session->setFlash('<div class="alert alert-info">
                               Cliente cadastrado com sucesso! 
                            </div>');
                if($this->Auth->user('group') == 0){
                 $this->redirect(array('controller'=>'users','action'=>'index')) ;   

                }else{
                 $this->redirect(array('controller'=>'users','action'=>'statistic'));
                 }
            }
      

        }
    }
    

      public function view($id) {
        $this->Client->id = $id;
        $this->set('cliente', $this->Client->read());


      $cobrancas = $this->Debt-> find("all", array(
            'conditions' => array(
             'Debt.client_id' => $id
            
              ),
            'order'=>array('Debt.fechado asc')
            )); 
        $this->set('cobrancas',$cobrancas);

     }

    function edit($id = null) {
       $this->Client->id = $id;
      
       if ($this->request->is('get')) {
           $this->request->data = $this->Client->read();
        } else {
                 if ($this->Client->save($this->request->data)) {
                    $this->Session->setFlash('<div class="alert alert-warning">
                               Cliente editado com sucesso! 
                            </div>');
                   if($this->Auth->user('group') == 0){
                      $this->redirect(array('controller'=>'users','action'=>'index')) ;   

                    }else{
                       $this->redirect(array('controller'=>'users','action'=>'statistic'));
                      }
                  }
             }
     }

      function delete($id) {      
        if ($this->Client->delete($id,true)) {
          $this->Session->setFlash('<div class="alert alert-danger">
                               Cliente deletado com sucesso! 
                            </div>');
          if($this->Auth->user('group') == 0){
             $this->redirect(array('controller'=>'users','action'=>'index')) ;   

          }else{
            $this->redirect(array('controller'=>'users','action'=>'statistic'));
          }
        }
      }

     function list_clients(){
      $clientes = $this->Client->find('all');
      $this->set('clientes',$clientes);
     }

     function list_inadimplentes(){
        $inadimplentes = $this->Client->find('all', array(
           'joins' => array(
            array(
                'table' => 'debts',
                'alias' => 'DebtJoin',
                'type' => 'INNER',
                'conditions' => array(
                    'DebtJoin.client_id = Client.id',
                    'DebtJoin.fechado >= 1',
                    'DebtJoin.fechado <= 2'
                    
                )
            )
         ),
          
          'fields' => array('DebtJoin.*', 'Client.*'),
          'group' => 'Client.id'
          
        ));

        $this->set('inadimplentes',$inadimplentes);
     }

     function search(){

     }

     function result_search(){
          
          $pegaCliente = $this->Client->find('first', 
                array(
                      'conditions' => array(
                      'Client.CPF' => $this->request->data['Client']['CPF'],
                      )));

          if(!$pegaCliente){
             $this->Session->setFlash('CPF não encontrado.');
             $this->redirect(array('action'=>'search'));
          }

          $this->redirect(array('action'=>'view/ '.$pegaCliente['Client']['id']));

          


     }

     

 
}

?>