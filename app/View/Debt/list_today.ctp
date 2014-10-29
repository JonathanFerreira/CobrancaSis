
<h1 class="center">	Cobranças </h1>

<div class="row">
               <!-- /.col-lg-6 -->
  <div class="col-lg-12">
     <div class="panel panel-default">
       
        <div class="panel-body">
              <div class="table-responsive">
                  <table class="table">
                        <thead>
                            <tr>
                                <th>Informações</th>
                                <th>Compra</th>
                                <th>Vencimento</th>
                                <th>Cobrança</th>
                                <th>Valor</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              foreach ($cobrancasToday as $key => $cobranca): 
                            ?>
                           

                            <tr class= "success">
                       

                                <td>
                                    <?php
                                       echo $this->Html->link(
                                            'Detalhes', array(
                                              'action' => 'view', 
                                              $cobranca['Debt']['id']));
                                     ?>
                               </td>
                                <td> 
                                    <?php
                                       echo $data = implode('/',array_reverse(
                                        explode('-',$cobranca['Debt']
                                          ['dt_compra'])));
                                     ?>
                                </td>
                                <td>
                                    <?php  
                                        echo $data = implode('/',array_reverse(explode('-',$cobranca['Debt']
                                        ['dt_vencimento'])));                                     ?>
                                </td>
                                <td> 
                                    <?php  
                                       echo $data = implode('/',array_reverse(
                                        explode('-',$cobranca['Debt']
                                          ['dt_cobranca'])));
                                    ?>  

                                </td>
                                 <td> 
                                  R$ <?php echo number_format(($cobranca
                                       ['Debt']['valor']), 2, ',', '.'); ?>
                                </td>
                                <td> 
                                      <a class="btn btn-primary btn-circle"  
                                          href="<?php echo '../events/add/'.$cobranca['Debt']['id']?>">
                                          <i class="fa fa-tags"></i>
                                      </a>                                   
                                      <button data-target="#confirmPay" data-toggle="modal" class="btn btn-success btn-circle">
                                       <i class="fa fa-check"></i>
                                      </button>

                                       <a class="btn btn-warning btn-circle"  
                                          href="<?php echo '../debts/edit/'.$cobranca['Debt']['id']?>">
                                          <i class="fa fa-cogs"></i>
                                      </a> 

                                       <button data-target="#confirmDebt" data-toggle="modal" class="btn btn-danger btn-circle">
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
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="confirmDebt" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Atenção</h4>
                </div>
                <div class="modal-body">
                    Excluir essa cobrança resultará na exclusão de todos os
                    eventos também. Tem certeza disso?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">Cancelar</button>
                     <a class="btn btn-danger"  
                         href="<?php echo '../debts/delete/'.
                         $cobranca['Debt']['id']?>"> Excluir
                      </a> 
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

<div class="panel-body">    
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="confirmPay" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Atenção</h4>
                </div>
                <div class="modal-body">
                   Tem certeza que deseja encerrar essa cobranca?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">Cancelar</button>
                     <a class="btn btn-success"  
                         href="<?php echo '../debts/pay/'.
                          $cobranca['Debt']['id']?>"> Encerrar
                      </a> 
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>


