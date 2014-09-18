<?php  
	$salvar = array(
	    'label' => 'Salvar',
	    'class' => 'btn btn-primary'
	);
?>


<div class="col-lg-6">

<h1 text align="center">Adicionar Administrador</h1>


	<?php
	echo $this->Form->create('User');

	echo $this->Form->input('name',array(
		'class' => 'form-control form-group',
		'placeholder'=>'Nome',
		 ));

	echo $this->Form->input('username',array(
		'class' => 'form-control form-group',
		'placeholder'=>'User Name',
		 ));

	echo $this->Form->input('password',array(
		'class' => 'form-control form-group',
		'placeholder'=>'Senha'

		 ));

	echo $this->Form->input('telefone',array(
		'class' => 'form-control form-group',
		'placeholder'=>'Telefone'

		 ));

	echo $this->Form->input('email',array(
		'class' => 'form-control form-group',
		'placeholder'=>'Email'

		 ));
	?>
	 
	<?php echo $this->Form->end($salvar);?>

</div>