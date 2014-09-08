<div class="container" align="right">
<?php echo $this->Html->link('Voltar ao menu', array('controller' => 'users', 
                              'action'=>'index')); ?>

 <h1>Alterar Dados do Usuario</h1>
 <?php
     echo $this->Form->Create('User');
     echo $this->Form->input('name');
     echo $this->Form->input('username');
     echo $this->Form->input('password');
     echo $this->Form->input('telefone');
     echo $this->Form->input('email');
     echo $this->Form->end(__('Salvar'));
  ?>
</div>