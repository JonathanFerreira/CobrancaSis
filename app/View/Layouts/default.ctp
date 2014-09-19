<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  <?php

    echo $this->Html->script('jquery-1.11.0.js');  //datepicker
    echo $this->Html->script('jquery-ui-1.10.3.custom.min.js'); //datepicker
    echo $this->Html->script('bootstrap.min.js');
    echo $this->Html->script('plugins/metisMenu/metisMenu.min.js');
    echo $this->Html->script('sb-admin-2.js'); 
    
    echo $this->Html->css('jquery-ui.css');//datepicker 
    echo $this->Html->css('style.css');
    echo $this->Html->css('font-awesome/css/font-awesome.min.css');
    echo $this->Html->css('plugins/morris.css');
    echo $this->Html->css('sb-admin-2.css');
    echo $this->Html->css('plugins/timeline.css');
    echo $this->Html->css('plugins/metisMenu/metisMenu.min.css');  
    echo $this->Html->css('bootstrap.min.css');
    
         

     
    
    
  ?>


</head>

<body>

    <div id="wrapper">
     <?php echo $this->Session->flash(); ?>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand color" href="index.html">CobrancaSis</a>
            </div>
            <!-- /.navbar-header -->

           
           <ul class="nav navbar-nav navbar-right navbar-user">

          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw color"></i> <?php echo ($userName);?>   <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <?php echo $this->Html->link(__('Sair'), array(
                  'controller' => 'users', 
                  'action' => 'logout'
                  ));?>
                <i class="fa fa-power-off" style='float: right !important;margin-top: -20px;'></i>
                </li>
              </ul>
            </li>
          </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse ">
                    <ul class="nav" id="side-menu">
                        <?php if($eAdmin): ?>
                        <li>
                             <a href="#"><i class="fa fa-bar-chart-o fa-fw "></i> Usuário<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Cadastrar'), array(
                                       'controller' => 'users', 'action' => 'add_employee'));
                                       ?>
                                </li>
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Listar'), array(
                                       'controller' => 'users', 'action' => 'list_employee'));
                                      ?>
                                </li>
                            </ul>
                        </li>                        
                        <li>
                             <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Administradores<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Cadastrar'), array(
                                       'controller' => 'users', 'action' => 'add_manager'));
                                       ?>
                                </li>
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Listar'), array(
                                       'controller' => 'users', 'action' => 'list_manager'));
                                      ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                             <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Cobranças<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Cadastrar'), array(
                                       'controller' => 'debts', 'action' => 'add'));
                                      ?>
                                </li>
                                 <li>
                                     <li>
                                    <a>Listar <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                             <?php
                                                echo $this->Html->link(__('Abertas'), array(
                                                      'controller' => 'debts', 'action' =>
                                                       'list_open'));
                                               ?>
                                        </li>
                                        <li>
                                             <?php
                                                echo $this->Html->link(__('Fechadas'), 
                                                array( 'controller' => 'debts', 'action' =>
                                                       'list_close'));
                                               ?>
                                        </li>
                                        
                                     </ul>
                                     <!-- /.nav-third-level -->
                                 </li>
                                 </li>
                              
                            </ul>
                        </li>

                        
                        <?php else: ?>
                            <li>
                               <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Cobranca<span class="fa arrow"></span></a>
                               <ul class="nav nav-second-level">
                                  <li>
                                      <?php
                                         echo $this->Html->link(__('Cadastrar'), array(
                                        'controller' => 'debts', 'action' => 'add'));
                                        ?>
                                  </li>
                                  <li>
                                     <?php
                                        echo $this->Html->link(__('Listar'), array(
                                       'controller' => 'debts', 'action' => 'list_debt_open'));
                                      ?>
                                  </li>
                               </ul>
                           </li>

                         <?php endif; ?>
                         <li>
                             <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Clientes<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Cadastrar'), array(
                                       'controller' => 'clients', 'action' => 'add'));
                                       ?>
                                </li>
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Buscar'), 
                                        array('controller' => 'clients', 
                                          'action' => 'search'));
                                       ?>
                                </li>
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Listar'), array(
                                       'controller' => 'clients', 'action' => 'list_clients'));
                                      ?>
                                </li>
                            </ul>
                        </li>       
                        
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Configurações<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Perfil</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
           <?php echo $this->fetch('content'); ?>  
        </div>
    <!-- /#wrapper -->
</body>

</html>
<?php
          
     
?>