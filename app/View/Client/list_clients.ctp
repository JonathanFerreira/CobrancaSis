


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
                                <th>Nome</th>
                                <th>CPF</th>
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
                                       echo $this->Html->link(
                                            $cliente['Client']['name'], array(
                                              'action' => 'view', 
                                              $cliente['Client']['id']));
                                     ?>
                                </td>
                                <td> 
                                    <?php
                                       echo $cliente['Client']['CPF'];
                                     ?>
                                </td>
                                <td>
                                    <?php  
                                    echo $cliente['Client']['email']; 
                                     ?>
                                </td>
                                <td>  <a class="btn btn-primary btn-circle"  
                                          href="<?php echo '../debts/add/'.$cliente['Client']['id']?>">
                                          <i class="fa fa-pencil-square-o"></i>
                                      </a> 

                                       <a class="btn btn-warning btn-circle"  
                                          href="<?php echo '../clients/edit/'.$cliente['Client']['id']?>">
                                          <i class="fa fa-cogs"></i>
                                      </a> 
                                      

                                      <button data-target="#myModal" data-toggle="modal" class="btn btn-danger btn-circle">
                                       <i class="fa fa-times"></i>
                                      </button>




                                 

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



<div class="panel-body">
   <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    Excluir esse cliente resultará na exclusão de todas as cobranças pertencente ao mesmo. Tem certeza disso?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">Cancelar</button>
                     <a class="btn btn-danger"  
                        href="<?php echo '../clients/delete/'.$cliente
                         ['Client']['id']?>"> Excluir
                    </a> 
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

