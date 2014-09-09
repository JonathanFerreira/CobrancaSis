   <h1>Funcionarios</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Data de Criação</th>
        <th>Opcões</th>
    </tr>


    <?php foreach ($usuarios as $key => $usuario): ?>
    <tr>
        <td><?php echo $usuario['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($usuario['User']['name'],
                  array('controller' => 'user', 'action' => 'view', 
                  $usuario['User']['id']));
            ?>
        </td>
        <td><?php echo $usuario['User']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>



