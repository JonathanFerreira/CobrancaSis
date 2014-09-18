
 <div class="col-lg-6">
	
	<div class="panel panel-green ">
	    <div class="panel-heading ">
	        Cobrança
	    </div>
	    <div class="panel-body">
	        <p> 
	           Cadastrada:  <?php echo $cobranca['Debt']['name'] ?> 
	        </p>

	        <p>
	           id:  <?php echo $cobranca['Debt']['id'] ?> 
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
	

</div>




