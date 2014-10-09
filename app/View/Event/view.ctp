


 <div class="col-lg-6">
	
	<div class="panel panel-green ">
	    <div class="panel-heading ">
	        Cobrança
	    </div>
	    <div class="panel-body">
	        <p> 
	           Cadastrado por:  <?php echo $evento['Event']['name'] ?> 
	        </p>

	        <p>
	           Data do Evento:  <?php echo 
               $data = implode('/',array_reverse(explode(
	           	'-',$evento['Event']['dt_evento'])));?>
	        </p>
	         
             <p>
	           Motivo:   <?php echo $evento['Event']['motivo'] ?>
	        </p>  
	        
            <p>
               Tipo da Cobrança:   <?php echo $evento['Event']['motivo'] ?>
            </p>

	    </div>
	 
	 </div>	

        <a class="btn btn-warning"  
           href="<?php echo '../edit/'.$evento['Event']['id']?>">
           Editar
        </a> 

        <button data-target="#confirmEvent" data-toggle="modal" 
          class="btn btn-danger"> Excluir
        </button> 
	

</div>


<div class="panel-body">    
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="confirmEvent" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Atenção</h4>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir esse evento?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">Cancelar</button>
                     <a class="btn btn-danger"  
                         href="<?php echo '../../events/delete/'.$evento['Event']['id']?>"> Excluir
                      </a> 
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
















