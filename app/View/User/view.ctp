<div class="col-lg-6">
	
	<div class="panel panel-primary ">
	    <div class="panel-heading ">
	        Administrador
	    </div>
	    <div class="panel-body">
	        <p>
	           Nome:   <?php echo $usuario['User']['name'] ?> 
	        </p>

	        <p>
	           Email:  <?php echo $usuario['User']['email'] ?> 
	        </p>

	        <p>
	           Telefone:   <?php echo $usuario['User']['telefone'] ?>
	        </p>

	    </div>
	 
	 </div>


		<div class="btns-clients">   
		   

		     <a class="btn btn-warning"  
		        href="<?php echo '../edit/'.$usuario['User']['id']?>">
		          Editar
		    </a> 
  <?php if($usuario['User']['id'] != $idLogado): ?>
		    <button data-target="#confirmUser" data-toggle="modal" 
		      class="btn btn-danger"> Excluir
		    </button> 
		<?php endif;?>
		</div> 

	

</div>

<div class="panel-body">    
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="confirmUser" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">Atenção</h4>
                </div>
                <div class="modal-body">
                  Tem certeza que deseja excluir esse administrador?
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">Cancelar</button>
                     <a class="btn btn-danger"  
                         href="<?php echo '../delete/'.
                         $usuario['User']['id']?>"> Excluir
                      </a> 
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>

