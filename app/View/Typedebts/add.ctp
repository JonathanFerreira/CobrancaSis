<?php  
    $criar = array(
        'label' => 'Criar',
        'class' => 'btn btn-primary'
    );

?>

<div class="col-lg-6">

<h1 text align="center">Criar cobrança</h1>


    <?php


    echo $this->Form->create('Typedebt');

    echo $this->Form->input('name',array(
        'class' => 'form-control form-group',
        'placeholder'=>'Nome da cobranças',
        'type'=>'text'        
         ));   
   
    ?>
     
    <?php echo $this->Form->end($criar);?>

</div>

