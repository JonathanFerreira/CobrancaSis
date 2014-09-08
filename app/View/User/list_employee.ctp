   <h1>Funcionarios</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Data de Criação</th>
        <th>Opcões</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($usuarios as $usuario): ?>
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
