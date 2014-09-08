
<h1>Adicionar Administrador</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('name');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('telefone');
echo $this->Form->input('email');
echo $this->Form->end('Salvar');

?>