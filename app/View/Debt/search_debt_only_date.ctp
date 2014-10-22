
<?php  
	$buscar = array(
	    'label' => 'Buscar',
	    'class' => 'btn btn-primary'
	);
?>

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




<div class="col-lg-6">

<h1 text align="center">Buscar Cobranças</h1>


	<?php
	echo $this->Form->create('Debt',array('action'=>'result_only_date'));


	echo $this->Form->input('dt_cobranca',array(
        'class' => 'form-control form-group',
        'placeholder'=>'Data da busca',
        'type'=>'text',
        'id'=>'calendario',
        'readonly'=>'true'
         ));
	?>
	 
	<?php echo $this->Form->end($buscar);?>

</div>