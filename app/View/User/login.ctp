<?php
    
    $entrar = array(
    'label' => 'Entrar',
    'class' => 'btn btn-lg btn-success btn-block'
    
    );

    $usuario = array(
        'placeholder' => 'Login',
        'type' => 'text',
        'class' => 'form-control',
        'div' => array(
        'class' => 'form-group',
    ));

    $senha = array(
        'placeholder' => 'Senha',
        'type' => 'password',
        'id' => '',
        'class' => 'form-control',
        'div' => array(
        'class' => 'form-group',
    ));

    
?>




    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bem-Vindo</h3>
                    </div>
                    <div class="panel-body">
                        
                            <fieldset>
                             
                                
                                <?php
                                    echo $this->Form->Create('User');
                                    echo $this->Form->input('username',$usuario);
                                    echo $this->Form->input('password',$senha);
                                    echo $this->Form->end($entrar);  
                                ?>
                             
                            
                            </fieldset>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


 