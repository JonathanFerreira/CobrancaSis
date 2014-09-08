
   
   <h1>Administradores</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Data de Criação</th>
        <th>Opcões</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($admins as $admin): ?>
    <tr>
        <td><?php echo $admin['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($admin['User']['name'],
                  array('controller' => 'user', 'action' => 'view', 
                  $admin['User']['id']));
            ?>
        </td>
        <td><?php echo $admin['User']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
