<h1>Adicionar Cobranca</h1>
<?php
echo $this->Form->create('Debt');
echo $this->Form->input('dt_compra');
echo $this->Form->input('dt_vencimento');
echo $this->Form->input('dt_cobranca');
echo $this->Form->input('valor');
echo $this->Form->input('tipo_cobranca');
echo $this->Form->end('Salvar');

?>