<h1>Listagem Close!</h1>


    <?php foreach ($fechadas as $key => $fechada): ?>
    <tr>
        <td><?php echo $fechada['Debt']['id']; ?></td>
        <td>
            <?php echo $fechada['Debt']['valor'];?>
        </td>
        <td><?php echo $fechada['Debt']['created']; ?></td>
    </tr>
    <?php endforeach; ?>


    <div class="row">
               <!-- /.col-lg-6 -->
  <div class="col-lg-12">
     <div class="panel panel-default">
          <div class="panel-heading">
            Usuários
          </div>
                        <!-- /.panel-heading -->
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
                                       echo $fechada['Debt']['cobranca']; 
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


