<?php
class UsersController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'User';
    public $components = array('Session');
    public $uses = array('User','Debt');
    
     

     function index() {
       $this->User->recursive = 0;
       $this->set('users', $this->paginate()); 
     

        $totalDebtsToday = $this->Debt->find('count', array(
            'conditions' => array(
            'Debt.fechado' => 0,
            'Debt.dt_cobranca <=' =>  date('Y-m-d')
         )));
        
        $this->set('totalToday',$totalDebtsToday);
    }

     function statistic() {
       $this->User->recursive = 0;
       $this->set('users', $this->paginate());

        $totalDebtsToday = $this->Debt->find('count', array(
            'conditions' => array(
            'Debt.fechado' => '1',
            'Debt.dt_cobranca <= ' =>  date('Y-m-d')
            
         )));       
        

       $totalDebtsOpen = $this->Debt->find('count', array(
            'conditions' => array(
            'Debt.fechado' => '1',
            'Debt.dt_cobranca >' =>  date('Y-m-d')
            
         )));

        $totalDebtsCollect = $this->Debt->find('count', array(
            'conditions' => array(
            'Debt.fechado' => '2'
            
         )));

         $totalDebtsClose = $this->Debt->find('count', array(
            'conditions' => array(
            'Debt.fechado' => '0'
            
         )));
         
         $this->set('totalToday',$totalDebtsToday);
         $this->set('totalOpen',$totalDebtsOpen);
         $this->set('totalCollect',$totalDebtsCollect);
         $this->set('totalClose',$totalDebtsClose);
    }

    public function beforeFilter() {
        parent::beforeFilter();
    }


    public function login(){
       $this->layout = 'login';
        
        if ($this->Auth->login()) {
           
            if ($this->Auth->user('group')) { 
                $this->redirect(array('controller' => 'users', 'action' => 'statistic'));   
                
            }
            else {
               $this->redirect(array('controller' => 'users', 'action' => 'index')); 

            }
        
       } elseif (empty($this->data)) {
            return;
        } else {   
            $this->Session->setFlash(__('<script> alert("Usuário ou senha inválidos."); </script>', true));
            $this->request->data = null;
        }
     
    }


    public function logout() {
        $this->redirect($this->Auth->logout());
    }  
    

    public function add_manager() {
        if ($this->request->is('post')) {            
            $this->request->data ['User']['group'] = 1;           

            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('<div class="alert alert-info">
                               Administrador cadastrado com sucesso! 
                            </div>');
                $this->redirect(array('action' => 'statistic'));
            }
      

        }
    }     
   

    public function add_employee() {
        if ($this->request->is('post')) {            
            $this->request->data ['User']['group'] = 0;           

            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('<div class="alert alert-info">
                               Usuario cadastrado com sucesso! 
                            </div>');
                $this->redirect(array('action' => 'statistic'));
            }
      

        }
    } 



      public function view($id) {
        $this->User->id = $id;
        $this->set('usuario', $this->User->read());
   

      }

    function edit($id = null) {
       $this->User->id = $id;
       if ($this->request->is('get')) {
           $this->request->data = $this->User->read();
        } else {
                 if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash('<div class="alert alert-warning">
                               Cadastro editado com sucesso! 
                            </div>');
                    $this->redirect(array('action' => 'statistic'));
                  }
             }
     }

     function delete($id) {     
        if ($this->User->delete($id)) {
           $this->Session->setFlash('<div class="alert alert-danger">
                               Cadastro deletado com sucesso! 
                            </div>');
           $this->redirect(array('action' => 'statistic'));
        }
     }

     function list_employee(){
      $usuarios = $this->User-> find("all", array(
            'conditions' => array(
            'User.group' => 0
          ))); 

      $this->set('usuarios',$usuarios);
     }

      function list_manager(){
          $admins = $this->User-> find("all", array(
            'conditions' => array(
            'User.group' => 1
          )));  
      $this->set('admins',$admins);

     
     }



 
  

 
}

?>