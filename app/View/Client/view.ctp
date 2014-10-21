<? $botao = array(
        'label' => 'Editar',
        'type' => 'button',
        'class' => 'btn btn-primary'
        
    );
?>

 <div class="col-lg-12">
	
	<div class="panel panel-primary ">
	    <div class="panel-heading ">
	       Cliente
	    </div>
	    <div class="panel-body">
	        <p>
	           Nome:   <?php echo $cliente['Client']['name'] ?> 
	        </p>

	        <p>
	           CPF:  <?php echo $cliente['Client']['CPF'] ?> 
	        </p>

	        <p>
	           Email:   <?php echo $cliente['Client']['email'] ?>
	        </p>

	        <p>
	           Endereço:   <?php echo $cliente['Client']['adress'] ?>
	        </p>

	        <p>
	           Telefone:   <?php echo $cliente['Client']['tell'] ?>
	        </p>
   
	    </div>
	 
	 </div>


<div class="btns-clients">   
 <a class="btn btn-primary"  
        href="<?php echo '../../debts/add/'.$cliente['Client']['id']?>">
          Cadastrar Cobrança
    </a> 

     <a class="btn btn-warning"  
        href="<?php echo '../edit/'.$cliente['Client']['id']?>">
          Editar
    </a> 

    <button data-target="#confirmClient" data-toggle="modal" 
      class="btn btn-danger"> Excluir
    </button> 
</div> 


	
</div>

  


<div class="row">
               <!-- /.col-lg-6 -->
  <div class="col-lg-12">
     <div class="panel panel-default">
     <div class="panel-heading">
        Cobranças do Cliente
     </div>
       
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
                                <th>Status</th>
                                <th>Opcões</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              foreach ($cobrancas as $key => $cobranca): 
                            ?>
                           

                            <tr class= "success">
                       

                                <td>
                                    <?php
                                       echo $this->Html->link(
                                            'Detalhes', array(
                                              'controller'=>'debts','action' => 'view', 
                                              $cobranca['Debt']['id']));
                                     ?>
                               </td>
                                <td> 
                                    <?php
                                       echo $cobranca['Debt']['dt_compra'];
                                     ?>
                                </td>
                                <td>
                                    <?php  
                                    echo $cobranca['Debt']['dt_vencimento']; 
                                     ?>
                                </td>
                                <td> 
                                    <?php  
                                       echo $cobranca['Debt']['dt_cobranca']; 
                                    ?>  

                                </td>
                                 <td> 
                                    <?php  
                                       echo $cobranca['Debt']['valor']; 
                                    ?>  

                                </td>
                                <td>
                                	<?php echo($cobranca['Debt']['fechado']==0)? "Aberta" : "Encerrada" ?>
                                </td>
                                <td> 
                                 <?php if($cobranca['Debt']['fechado']==0):?>
                                     <button data-target="#confirmPay" data-toggle="modal" class="btn btn-success btn-circle">
                                     <i class="fa fa-check"></i>
                                    </button>
                                <?php endif;?>
                                  
                                      

                                	  <a class="btn btn-warning btn-circle"  
                                          href="<?php echo '../../debts/edit/'.$cobranca['Debt']['id']?>">
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
                         href="<?php echo '../../debts/delete/'.
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
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="confirmClient" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Atenção</h4>
                </div>
                <div class="modal-body">
                    Excluir esse cliente resultará na exclusão de todas as cobranças pertencente ao mesmo. Tem certeza disso?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">Cancelar</button>
                     <a class="btn btn-danger"  
                         href="<?php echo '../delete/'.$cliente['Client']['id']?>"> Excluir
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
                 Tem certeza que deseja encerrar essa cobrança?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">Cancelar</button>
                     <a class="btn btn-success"  
                         href="<?php echo '../../debts/pay/'.$cobranca['Debt']['id']?>"> Encerrar
                      </a> 
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>






 