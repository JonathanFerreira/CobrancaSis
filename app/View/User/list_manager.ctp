
   
   

   

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

<div class="row">
               <!-- /.col-lg-6 -->
  <div class="col-lg-12">
     <div class="panel panel-default">
          <div class="panel-heading"text- align="center">
            Administradores
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
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cont=0; foreach ($admins as $admin): ?>


                            <tr class= <?php echo ($cont%2 == 0)? "success" : 
                                                                   "info"; 
                                        ?> >
                       
                           
                                <td>
                                    <?php 
                                       echo $admin['User']['id']; 
                                     ?>
                               </td>
                                <td> 
                                    <?php
                                       echo $this->Html->link(
                                            $admin['User']['name'], array(
                                              'action' => 'view',
                                              $admin['User']['id']));
                                     ?>
                                </td>
                                <td>
                                    <?php  
                                    echo $admin['User']['email']; 
                                     ?>
                                </td>
                                <td>  Opcoes  </td>
                            </tr>
                            <?php $cont++; endforeach; ?>
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


 



