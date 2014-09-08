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
                <a class="navbar-brand" href="index.html">CobrancaSis</a>
            </div>
            <!-- /.navbar-header -->

           <ul class="nav navbar-nav navbar-right navbar-user">

          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ($userName);?>   <b class="caret"></b></a>
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
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                             <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Cadastrar<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Administrador'), array(
                                       'controller' => 'users', 'action' => 'add_manager'));
                                       ?>
                                </li>
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Funcionário'), array(
                                       'controller' => 'users', 'action' => 'add_employee'));
                                      ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                             <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Listar<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Administradores'), array(
                                       'controller' => 'users', 'action' => 'list_manager'));
                                       ?>
                                </li>
                                <li>
                                     <?php
                                        echo $this->Html->link(__('Funcionários'), array(
                                       'controller' => 'users', 'action' => 'list_employee'));
                                      ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="active" href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
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

echo $this->Html->script('jquery-1.11.0.js');
echo $this->Html->script('bootstrap.min.js');
echo $this->Html->script('plugins/metisMenu/metisMenu.min.js');
echo $this->Html->script('sb-admin-2.js');
?>