

 <h1>Alterar Dados do Cliente</h1>
 <?php
     echo $this->Form->Create('Client');
     echo $this->Form->input('name');
     echo $this->Form->input('email');
     echo $this->Form->input('adress');
     echo $this->Form->input('CPF');
     echo $this->Form->input('tell');
     echo $this->Form->end(__('Salvar'));
  ?>
