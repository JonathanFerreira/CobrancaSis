
 <div class="col-lg-6">
	
	<div class="panel panel-green ">
	    <div class="panel-heading ">
	        Cobrança do cliente: <?php echo $cliente['Client']['name'];?>
	    </div>
	    <div class="panel-body">
          
           <p>
             Telfone: <?php echo $cliente['Client']['tell'];?>
          </p>
	      
          <p>
             Email: <?php echo $cliente['Client']['email'];?>
          </p>

	        <p>
	           Compra:  <?php echo $data = implode('/',array_reverse(explode(
	           	'-',$cobranca['Debt']['dt_compra'])));?>
	        </p>

	        <p>
	           Vencimento: <?php echo $data = implode('/',array_reverse(
	                       explode('-',$cobranca['Debt']['dt_vencimento'])));?> 
	        </p>

	         <p>
	           Cobranca:   <?php echo $data = implode('/',array_reverse(
	                       explode('-',$cobranca['Debt']['dt_cobranca'])));?>
	        </p>

	         <p>
	           Valor:   <?php echo $cobranca['Debt']['valor'] ?>
	        </p>  

          <p> 
             Cadastrada por:  <?php echo $cobranca['Debt']['name'] ?> 
          </p>

	       

	    </div>
	 
	 </div>

   <div class="btns-clients">   
     
    <?php 
      if($cobranca['Debt']['fechado']==1 ||$cobranca['Debt']['fechado']==2 ):
     ?>
         <a class="btn btn-primary"  
            href="<?php echo '../../events/add/'.$cobranca['Debt']['id']?>">
            Gerar Evento
        </a> 

        <button data-target="#confirmPay" data-toggle="modal" 
          class="btn btn-success"> Encerrar
        </button> 

        
        <a class="btn btn-warning"  
           href="<?php echo '../edit/'.$cobranca['Debt']['id']?>">
           Editar
        </a> 

    <?php endif;?>

        <button data-target="#confirmDebt" data-toggle="modal" 
          class="btn btn-danger"> Excluir
        </button> 
   </div> 
	

</div>


<div class="row">
               <!-- /.col-lg-6 -->
  <div class="col-lg-12">
     <div class="panel panel-default">
     <div class="panel-heading">
        Eventos da Cobrança
     </div>
       
        <div class="panel-body">
              <div class="table-responsive">
                  <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Data Evento</th>
                                <th>Contato</th>
                                <th>Motivo</th>                               
                                <th>Observação</th>
                                <th>Opcões</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              foreach ($eventos as $key => $evento): 
                            ?>
                           

                            <tr class= "success">
                       

                                <td>
                                    <?php
                                       echo $this->Html->link(
                                            $evento['Event']['id'], array(
                                              'controller'=>'events','action' => 'view', 
                                              $evento['Event']['id']));
                                     ?>
                               </td>
                                <td> 
                                    <?php
                                       echo $evento['Event']['dt_evento'];
                                     ?>
                                </td>
                                <td>
                                    <?php  
                                    echo $evento['Event']['motivo']; 
                                     ?>
                                </td>
                                <td> 
                                    <?php  
                                       echo $evento['Event']['contato']; 
                                    ?>  

                                </td>
                                 <td> 
                                    <?php  
                                       echo $evento['Event']['observacao']; 
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
                         href="<?php echo '../../events/delete/'.$evento['Event']['id']?>"> Excluir
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







<?php debug($cliente);?>


