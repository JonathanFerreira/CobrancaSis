<h1>Listagem Open!</h1>


    <?php foreach ($abertas as $key => $aberta): ?>
    <tr>
        <td><?php echo $aberta['Debt']['id'];  ?></td>
        <td>
            <?php echo $aberta['Debt']['valor'];?>

        </td>
        <td><?php echo $aberta['Debt']['created']; ?></td>
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
                              foreach ($abertas as $key => $aberta): 
                            ?>
                           

                            <tr class= "success">
                       

                                <td>
                                    <?php
                                       echo $this->Html->link(
                                            $aberta['Debt']['id'], array(
                                              'action' => 'view', 
                                              $aberta['Debt']['id']));
                                     ?>
                               </td>
                                <td> 
                                    <?php
                                       echo $aberta['Debt']['dt_compra'];
                                     ?>
                                </td>
                                <td>
                                    <?php  
                                    echo $aberta['Debt']['dt_vencimento']; 
                                     ?>
                                </td>
                                <td> 
                                    <?php  
                                       echo $aberta['Debt']['dt_cobranca']; 
                                    ?>  

                                </td>
                                 <td> 
                                    <?php  
                                       echo $aberta['Debt']['valor']; 
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


