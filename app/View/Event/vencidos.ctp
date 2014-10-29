<div class="row">
               <!-- /.col-lg-6 -->
  <div class="col-lg-12">
     <div class="panel panel-default">
     <div class="panel-heading center">
        Eventos Vencidos
     </div>
       
        <div class="panel-body">
              <div class="table-responsive">
                  <table class="table">
                        <thead>
                            <tr> 
                                <th>Informações</th>                          
                                <th>Data Evento</th>                          
                                <th>Motivo</th> 
                                <th>Opcões</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              foreach ($vencidos as $key => $evento): 
                            ?>
                           

                            <tr class= "success">
                       

                                <td>
                                    <?php
                                       echo $this->Html->link(
                                            'Detalhes', array(
                                              'controller'=>'debts','action' => 'view', 
                                              $evento['Event']['debt_id']));
                                     ?>
                               </td>
                                <td> 
                                    <?php
                                       echo $data = implode('/',array_reverse(
                                            explode('-',$evento['Event']
                                                               ['dt_evento']
                                            )));
                                     ?>
                                </td>                                
                                <td>                                     
                                     <?php  
                                        echo $evento['Event']['motivo']; 
                                     ?>

                                </td>                                     
                                <td> 
                                	   <a class="btn btn-warning btn-circle"  
                                          href="<?php echo '../../events/edit/'.$evento['Event']['id']?>">
                                          <i class="fa fa-cogs"></i>
                                      </a> 

                                       <button data-target="#confirmEvent" data-toggle="modal" class="btn btn-danger btn-circle">
                                       <i class="fa fa-times"></i>
                                      </button>
                                      

                                </td>
                            </tr>
                            <?php endforeach; ?>
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
    <?php 
         
         echo $this->Paginator->next(' «  Mais antigos  ', null, null, array('class' => 'desabilitado'));

         echo $this->Paginator->numbers();

         echo $this->Paginator->prev('  Mais novos  »', null, null,
         array('class' => 'desabilitado'));
        

    ?>

 </div>

 <div class="panel-body">    
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="confirmEvent" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Atenção</h4>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir esse evento?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">Cancelar</button>
                     <a class="btn btn-danger"  
                         href="<?php echo '../events/delete/'.$evento['Event']['id']?>"> Excluir
                      </a> 
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

