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



<div class="col-lg-6">

<h1 text align="center">Editar Evento</h1>


    <?php


    echo $this->Form->create('Event');

    echo $this->Form->input('dt_evento',array(
        'class' => 'form-control form-group',
        'placeholder'=>'Data Evento',
        'type'=>'text',
        'id'=>'calendario'
         ));
   
    echo $this->Form->input('motivo',array(
        'class' => 'form-control form-group',       
        'placeholder'=>'Motivo',
        'type' => 'text'
         ));

    echo $this->Form->input('contato',array(
        'class' => 'form-control form-group',
        'placeholder'=>'Com quem falou?',
        'type'=>'text'
         ));
    
    echo $this->Form->input('observacao',array(
        'class' => 'form-control form-group',
        'placeholder'=>'Observação',
        'type'=>'text'

         ));    
    ?>
     
    <?php echo $this->Form->end($salvar);?>

</div>
