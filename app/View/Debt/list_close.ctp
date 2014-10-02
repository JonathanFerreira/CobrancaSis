<h1>Listagem de cobranças encerradas</h1>



    <div class="row">
               <!-- /.col-lg-6 -->
  <div class="col-lg-12">
     <div class="panel panel-default">
     
        <div class="panel-body">
              <div class="table-responsive">
                  <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Compra</th>
                                <th>Vencimento</th>
                                <th>Cobrança</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              foreach ($fechadas as $key => $fechada): 
                            ?>
                           

                            <tr class= "success">
                       

                                <td>
                                    <?php
                                       echo $this->Html->link(
                                            $fechada['Debt']['id'], array(
                                              'action' => 'view', 
                                              $fechada['Debt']['id']));
                                     ?>
                               </td>
                                <td> 
                                    <?php
                                       echo $fechada['Debt']['dt_compra'];
                                     ?>
                                </td>
                                <td>
                                    <?php  
                                    echo $fechada['Debt']['dt_vencimento']; 
                                     ?>
                                </td>
                                <td> 
                                    <?php  
                                       echo $fechada['Debt']['tipo_cobranca']; 
                                    ?>  

                                </td>
                                 <td> 
                                    <?php  
                                       echo $fechada['Debt']['valor']; 
                                    ?>  

                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                            <!-- /.table-responsive -->
            </div>
                        <!-- /.panel-body -->
         </div>
        <!-- /.panel -->
     </div>
    <!-- /.col-lg-6 -->
 </div>


