
<!--
   <meta charset="utf-8" />
    <link rel="stylesheet"  type="text/css" href="jquery-ui-1.9.2/css/ui-lightness/jquery-ui-1.9.2.custom.css" />
   
  
  <script src="jquery-ui-1.9.2/js/jquery-1.8.3.js"></script> 
   <script src="jquery-ui-1.9.2/js/jquery-1.9.2.custom.js"></script>
  <script src="jquery-ui-1.9.2/js/jquery-ui-1.9.2.custom.min.js"></script>
  -->

  <h1>Adicionar Cobranca</h1>



<script>

$(function() {

    $("#calendario").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
});
</script>

<script>

$(function() {

    $("#calendario1").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
});
</script>

<script>

$(function() {

    $("#calendario2").datepicker({
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
    });
});
</script>



 

<?php
   echo $this->Form->create('Debt');

    echo $this->Form->input('dt_compra', array(
        'label' => 'Data Compra:',        
        'type'=>'text',
        'id'=>'calendario'));

     echo $this->Form->input('dt_vencimento', array(
        'label' => 'Data Vencimento:',
        'type'=>'text',
        'id'=>'calendario1'));


     echo $this->Form->input('dt_cobranca', array(
        'label' => 'Data Cobrança:',
        'type'=>'text',
        'id'=>'calendario2'));



echo $this->Form->input('valor');
echo $this->Form->input('tipo_cobranca');
echo $this->Form->end('Salvar');

?>


