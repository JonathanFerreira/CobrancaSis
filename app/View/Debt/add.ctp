<?php  
    $salvar = array(
        'label' => 'Salvar',
        'class' => 'btn btn-primary'
    );

?>


<script>

$(function() {

    $("#calendario").datepicker({
        minDate: '0',
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
        minDate: '0',
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
        minDate: '0',
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

<h1 text align="center">Cadastrar Cobrança</h1>


    <?php


    echo $this->Form->create('Debt');

    echo $this->Form->input('dt_compra',array(
        'class' => 'form-control form-group',
        'placeholder'=>'Compra',
        'type'=>'text',
        'id'=>'calendario',
        'readonly'=>'true'
         ));

    echo $this->Form->input('dt_vencimento',array(
        'class' => 'form-control form-group',
        'placeholder'=>'Vencimento',
        'type'=>'text',
        'id'=>'calendario1',
        'readonly'=>'true'

         ));

    echo $this->Form->input('dt_cobranca',array(
        'class' => 'form-control form-group',       
        'placeholder'=>'Cobrança',
        'type' => 'text',
        'id'=> 'calendario2',
        'readonly'=>'true'

         ));

    echo $this->Form->input('valor',array(
        'class' => 'form-control form-group',
        'placeholder'=>'Valor'

         ));

    echo $this->Form->input('tipo_cobranca',array(
        'class' => 'form-control form-group',
        'placeholder'=>'Tipo cobrança'
         ));

    echo $this->Form->input('observacao',array(
        'class' => 'form-control form-group',
        'type' => 'textarea',
        'placeholder'=>'Observação'
         ));

    
    ?>
     
    <?php echo $this->Form->end($salvar);?>

</div>

