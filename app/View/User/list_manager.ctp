
   
   

   

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
                                <td> 
                                       <a class="btn btn-warning btn-circle"  
                                          href="<?php echo 'edit/'.$admin['User']['id']?>">
                                          <i class="fa fa-cogs"></i>
                                      </a> 
                                      
                                   <?php if($idLogado!= $admin['User']['id']):?>

                                      <button data-target="#confirmUser" data-toggle="modal" class="btn btn-danger btn-circle">
                                       <i class="fa fa-times"></i>
                                      </button>
                                    
                                    <?php endif; ?>
                                </td>
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


 





<div class="panel-body">
   <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="confirmUser" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Atenção</h4>
                </div>
                <div class="modal-body">
                   Tem certeza disso que deseja excluir esse usuario?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">Cancelar</button>
                     <a class="btn btn-danger"  
                        href="<?php echo 'delete/'.$admin
                         ['User']['id']?>"> Excluir
                    </a> 
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
