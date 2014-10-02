
 <div class="col-lg-6">
	
	<div class="panel panel-green ">
	    <div class="panel-heading ">
	        Cobrança
	    </div>
	    <div class="panel-body">
	        <p> 
	           Cadastrada por:  <?php echo $cobranca['Debt']['name'] ?> 
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
	       

	    </div>
	 
	 </div>

	   <?php 
         echo $this->Html->link('Pagar',array(
         	  'action'=>'pay',$cobranca['Debt']['id']));
       ?>
	

</div>




