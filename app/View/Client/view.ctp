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

     <a class="btn btn-danger"  
        href="<?php echo '../delete/'.$cliente['Client']['id']?>">
         Excluir
    </a> 
</div> 


	
</div>

  


<div class="row">
               <!-- /.col-lg-6 -->
  <div class="col-lg-12">
     <div class="panel panel-default">
       
        <div class="panel-body">
              <div class="table-responsive">
                  <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
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
                                            $cobranca['Debt']['id'], array(
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
                                     <a class="btn btn-success btn-circle"  
                                          href="<?php echo '../../debts/pay/'.$cobranca['Debt']['id']?>">
                                          <i class="fa fa-check"></i>
                                      </a> 
                                	   <a class="btn btn-warning btn-circle"  
                                          href="<?php echo '../../debts/edit/'.$cobranca['Debt']['id']?>">
                                          <i class="fa fa-cogs"></i>
                                      </a> 
                                      

                                      <a class="btn btn-danger btn-circle"
                                         href="<?php echo '../../debts/delete/'.$cobranca['Debt']['id']?>">
                                          <i class="fa fa-times"></i>
                                      </a> 
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





 