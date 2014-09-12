<?php
class UsersController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'User';
    public $components = array('Session');
    public $uses = array('User','Debt');
    
     

     function index() {
       $this->User->recursive = 0;
       $this->set('users', $this->paginate());

      $admins = $this->User-> find("all", array(
            'conditions' => array(
            'User.group' => 1
          )));  
   
        $this->set('admins',$admins);

        $usuarios = $this->User-> find("all", array(
            'conditions' => array(
            'User.group' => 0
          )));  
   
        $this->set('usuarios',$usuarios);
        
    }

    function teste1(){
      $nomeUser = $this->Auth->user('name');
          
       $this->set('nomeUser', $nomeUser);      
       echo "administrador";

    }

    function teste2(){
      $nomeUser = $this->Auth->user('name');
      $this->set('nomeUser', $nomeUser);
      echo "usuario";
    }

    public function beforeFilter() {
        parent::beforeFilter();
    }


    public function login(){
       $this->layout = 'login';
        
        if ($this->Auth->login()) {
           
            if ($this->Auth->user('group')) { 
                $this->redirect(array('controller' => 'users', 'action' => 'index'));   
                
            }
            else {
               $this->redirect(array('controller' => 'debts', 'action' => 'index')); 

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
                $this->Session->setFlash('Cadastro efetuado com sucesso!');
                //$this->redirect(array('action' => 'index'));
            }
      

        }
    }     
   

    public function add_employee() {
        if ($this->request->is('post')) {            
            $this->request->data ['User']['group'] = 0;           

            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Cadastro efetuado com sucesso!');
                //$this->redirect(array('action' => 'index'));
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
                    $this->Session->setFlash('Usuario Alterado com Sucesso!');
                    $this->redirect(array('action' => 'index'));
                  }
             }
     }

     function delete($id) {
        if (!$this->request->is('post')) {
          throw new MethodNotAllowedException();
        }
        if ($this->User->delete($id)) {
           $this->Session->setFlash('Cobrança Deletada!');
           //$this->redirect(array('action' => 'index'));
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