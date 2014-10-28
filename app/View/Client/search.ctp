
<?php  
	$buscar = array(
	    'label' => 'Buscar',
	    'class' => 'btn btn-primary'
	);

?>


<div class="col-lg-6">

<h1 text align="center">Buscar Cliente</h1>


	<?php
	echo $this->Form->create('Client',array('action'=>'result_search'));


	echo $this->Form->input('CPF',array(
		'class' => 'form-control form-group',
		'placeholder'=>'CPF'

		 ));

	

	
	?>
	 
	<?php echo $this->Form->end($buscar);?>

</div>