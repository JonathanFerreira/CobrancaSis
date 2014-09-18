


<div class="row">
               <!-- /.col-lg-6 -->
  <div class="col-lg-12">
     <div class="panel panel-default">
          <div class="panel-heading" text- align="center">
            Clientes
          </div>
                        <!-- /.panel-heading -->
        <div class="panel-body">
              <div class="table-responsive">
                  <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>email</th>
                                <th>Opcoes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cont = 0;
                             foreach ($clientes as $cliente): 
                            ?>
                           

                            <tr class= <?php echo ($cont%2 == 0)? "success" : "info"; ?> >
                       

                                <td>
                                    <?php 
                                       echo $cliente['Client']['id']; 
                                     ?>
                               </td>
                                <td> 
                                    <?php
                                       echo $this->Html->link(
                                            $cliente['Client']['name'], array(
                                              'action' => 'view', 
                                              $cliente['Client']['id']));
                                     ?>
                                </td>
                                <td>
                                    <?php  
                                    echo $cliente['Client']['email']; 
                                     ?>
                                </td>
                                <td> <?php echo $this->Html->link('cc',array(   'controller'=>'debts','action'=>'add',
                                       $cliente['Client']['id']));
                                      ?> 

                                      <?php echo $this->Html->link('dl',array( 'controller'=>'clients','action'=>'delete',$cliente['Client']['id']));
                                      ?>   


                                 

                                </td>
                            </tr>
                            <?php $cont++;  endforeach; ?>
                        </tbody>
                    </table>
                </div>
                            <!-- /.table-responsive -->
            </div>
                        <!-- /.panel-body -->
         </div>
        <!-- /.panel -->
     </div>
    <!-- /.col-lg-6 -->
 </div>



