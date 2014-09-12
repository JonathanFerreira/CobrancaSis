

<h1>Cadastrar Cliente</h1>
<?php
echo $this->Form->create('Client');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('adress');
echo $this->Form->input('CPF');
echo $this->Form->input('tell');
echo $this->Form->end('Salvar');

?>