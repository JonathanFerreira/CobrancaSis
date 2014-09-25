<? $botao = array(
        'label' => 'Editar',
        'type' => 'button',
        'class' => 'btn btn-primary'
        
    );
?>

 <div class="col-lg-6">
	
	<div class="panel panel-primary ">
	    <div class="panel-heading ">
	        Primary Panel
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



</div>
     

 
     <a class="btn btn-primary" href="<?php echo '../debts/add/'.$cliente['Client']['id']?>"> Cadastrar Cobrança
     </a> 

      <a class="btn btn-primary btn-circle" href="<?php echo '../debts/add/'.
         $cliente['Client']['id']?>">
          <i class="fa fa-pencil-square-o"></i>
      </a> 

     <a class="btn btn-warning " href="<?php echo '../clients/edit/'.$cliente['Client']['id']?>"> Editar        
     </a>               

      <a class="btn btn-danger " href="<?php echo '../clients/delete/'.$cliente['Client']['id']?>">Excluir
        
      </a>        


 