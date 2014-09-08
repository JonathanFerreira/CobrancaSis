<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package     app.Controller
 * @link        http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'users', 
                'action' => 'index'),

            'logoutRedirect' => array(
                'controller' => 'users', 
                'action' => 'login'),
            )
        );

    var $permissoesFuncionario = array(
        'users' => array('login' => true,'logout' => true, 'change_pass' => true, 'teste2' => true)
        );

    var $permissoesAdmin = array(
        'users' => array('login' => true,'logout' => true, 'index' => true,  'teste2' => true, 'add_manager' => true, 'add_employee' => true, 'list_manager' => true, 'list_employee' => true)
        );

    
    public function beforeFilter() {
        parent::beforeFilter();
        $estaNaLogin = ($this->request->params['controller'] == 'users' AND $this->request->params['action'] == 'login');
        if($estaNaLogin) return;

        $eAdmin = $this->Auth->user('group');
        $this->set('eAdmin', $eAdmin);
        $userName = $this->Auth->user('name');
        $this->set('userName', $userName);

        $funcionarioTemPermissao = !empty($this->permissoesFuncionario[$this->request->params['controller']][$this->request->params['action']]);
        if(!$eAdmin AND $funcionarioTemPermissao) return;
        
        $adminTemPermissao = !empty($this->permissoesAdmin[$this->request->params['controller']][$this->request->params['action']]);
        if($eAdmin AND $adminTemPermissao) return;

        $this->Session->setFlash(__('<script> alert("Permissão negada."); </script>', true));
        $this->redirect(array('controller' => 'users', 'action' => 'login'));    
    } 
}
