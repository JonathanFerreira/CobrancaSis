<?php
class DebtsController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Debt';
    public $components = array('Session');
    public $uses = array('Debt','User','Event','Client');
   
    
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
                $this->Session->setFlash('<div class="alert alert-info">
                               Cobrança cadastrada com sucesso! 
                            </div>');
                
          }else{
            $this->Session->setFlash('<div class="alert alert-danger">
                               Houve um erro ao salvar a cobrança! 
                            </div>');
          }

          if($this->Auth->user('group') == 0){
             $this->redirect(array('controller'=>'users','action'=>'index')) ;   

          }else{
            $this->redirect(array('controller'=>'users','action'=>'statistic'));
          }
      }
    }


    public function view($id) {
        $this->Debt->id = $id;
        $cobranca = $this->Debt->find('first',array(
          'conditions' => array(
            'Debt.id' => $id)));

        $cliente = $this->Client->find('first',array(
          'conditions' => array(
            'Client.id' => $cobranca['Debt']['client_id']))) ;

        $eventos = $this->Event-> find("all", array(
        'conditions' => array(
         'Event.debt_id' => $id
        
          ),
        'order'=>array('Event.dt_evento asc')
        )); 
    $this->set('cobranca',$cobranca);  
    $this->set('eventos',$eventos);
    $this->set('cliente',$cliente);

    }

    function edit($id = null) {
       $this->Debt->id = $id;
       if ($this->request->is('get')) {
           $this->request->data = $this->Debt->read();
        } else {
                 if ($this->Debt->save($this->request->data)) {
                    $this->Session->setFlash('<div class="alert alert-warning">
                               Cobrança editada com Sucesso! 
                            </div>');
                    $this->redirect(array('action' => 'index'));
                  }
             }

        if($this->Auth->user('group') == 0){
             $this->redirect(array('controller'=>'users','action'=>'index')) ;   

        }else{
            $this->redirect(array('controller'=>'users','action'=>'statistic'));
          }
    }

    function delete($id) {   
      if ($this->Debt->delete($id)) {
         $this->Session->setFlash('<div class="alert alert-danger">
                               Cobrança deletada com sucesso! 
                            </div>');
         
      }

      if($this->Auth->user('group') == 0){
             $this->redirect(array('controller'=>'users','action'=>'index')) ;   

      }else{
            $this->redirect(array('controller'=>'users','action'=>'statistic'));
         }
    }

    function pay($id = null) {

           $this->Debt->id = $id;
           
           $this->request->data = $this->Debt->read();
          
           
           $this->Debt->updateAll(
              array('Debt.fechado' => 1),
              array('Debt.id' => $id)
          ); 

          $this->Session->setFlash('<div class="alert alert-success">
                               Cobrança encerrada com sucesso! 
                            </div>');
          
          if($this->Auth->user('group') == 0){
             $this->redirect(array('controller'=>'users','action'=>'index')) ;   

          }else{
            $this->redirect(array('controller'=>'users','action'=>'statistic'));
          }

              

    }

      function list_open(){
      $abertas = $this->Debt-> find('all', array(
            'conditions' => array(
            'Debt.fechado' => 0
          ))); 
        $this->set('abertas',$abertas);
     }

      function list_close(){
      $fechadas = $this->Debt-> find('all', array(
            'conditions' => array(
            'Debt.fechado' => 1
          ))); 
      $this->set('fechadas',$fechadas);
     }
      
      function list_today(){
       
       $cobrancasToday = $this->Debt-> find('all', array(
            'conditions' => array(
            'Debt.fechado' => 0,
            'Debt.dt_cobranca <= ' =>  date('Y-m-d') 

         )));    
        /* $cobrancasTeste = $this->Debt->find('all', array(
            'conditions' => array(
            'Debt.dt_cobranca >=' =>  $dInicial,
            'Debt.dt_cobranca <= ' => $dFinal,
            'Debt.fechado' => 0
        )));*/
      
        $this->set('cobrancasToday',$cobrancasToday);
        
     }
     

     function search_debt_only_date(){

     }

    function search_debt_between_date(){

     }

    function result_between_date(){
          $dInicial = implode('-',array_reverse(explode(
              '/',$this->request->data['Debt']['dt_cobranca'])));

          $dFinal = implode('-',array_reverse(explode(
              '/',$this->request->data['Debt']['dt_vencimento'])));
        
        
          $resultados = $this->Debt->find('all', 
                array(
                      'conditions' => array(
                      'Debt.dt_cobranca >= ' => $dInicial,
                      'Debt.dt_cobranca <= ' => $dFinal                     
                      ),
                      'order' =>array( 'Debt.fechado asc' )
                    ));    
          $totalReceber = 0;
          $totalArrecadado = 0;    
 
          foreach ($resultados as $key => $resultado) {
             if($resultado['Debt']['fechado'] == 0){
              $totalReceber += $resultado['Debt']['valor'];
             }else{
                    $totalArrecadado += $resultado['Debt']['valor'];

                }
          }
        

          if(!$resultados){
             $this->Session->setFlash('<div class="alert alert-warning">
                               Não existem cobranças entre essas datas.
                            </div>');
             $this->redirect(array('action'=>'search_debt_between_date'));
          }

          $this->set('resultados',$resultados);
          $this->set('totalReceber',$totalReceber);
          $this->set('totalArrecadado',$totalArrecadado);

          


     } 

     




     function result_only_date(){
          $dataBusca = implode('-',array_reverse(explode(
              '/',$this->request->data['Debt']['dt_cobranca'])));
        
          $resultados = $this->Debt->find('all', 
                array(
                      'conditions' => array(
                      'Debt.dt_cobranca' => $dataBusca                     
                      ),
                      'order' =>array( 'Debt.fechado asc' )
                    ));    
          $totalReceber = 0;
          $totalArrecadado = 0;    
 
          foreach ($resultados as $key => $resultado) {
             if($resultado['Debt']['fechado'] == 0){
              $totalReceber += $resultado['Debt']['valor'];
             }else{
                    $totalArrecadado += $resultado['Debt']['valor'];

                }
          }
        

          if(!$resultados){
             $this->Session->setFlash('<div class="alert alert-warning">
                               Não existem cobranças entre essas datas.
                            </div>');
             $this->redirect(array('action'=>'search_debt'));
          }

          $this->set('resultados',$resultados);
          $this->set('totalReceber',$totalReceber);
          $this->set('totalArrecadado',$totalArrecadado);

          


     } 

    

}

?>