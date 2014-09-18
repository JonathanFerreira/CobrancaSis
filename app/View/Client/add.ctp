
<?php  
	$salvar = array(
	    'label' => 'Salvar',
	    'class' => 'btn btn-primary'
	);
?>


<div class="col-lg-6">

<h1 text align="center">Cadastrar Cliente</h1>


	<?php
	echo $this->Form->create('Client');

	echo $this->Form->input('name',array(
		'class' => 'form-control form-group',
		'placeholder'=>'Nome',
		 ));

	echo $this->Form->input('CPF',array(
		'class' => 'form-control form-group',
		'placeholder'=>'CPF'

		 ));

	echo $this->Form->input('email',array(
		'class' => 'form-control form-group',
		'type' => 'email',
		'placeholder'=>'Email'

		 ));

	echo $this->Form->input('adress',array(
		'class' => 'form-control form-group',
		'placeholder'=>'Endereço'

		 ));

	echo $this->Form->input('tell',array(
		'class' => 'form-control form-group',
		'placeholder'=>'Telefone'

		 ));

	
	?>
	 
	<?php echo $this->Form->end($salvar);?>

</div>