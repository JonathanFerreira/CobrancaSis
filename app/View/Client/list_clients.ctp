  <h1>Clientes</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Data de Criação</th>
        <th>Opcões</th>
    </tr>



    <?php foreach ($clientes as $cliente): ?>
    <tr>
        <td><?php echo $cliente['Client']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($cliente['Client']['name'],
                  array('action' => 'view',$cliente['Client']['id']));
            ?>
        </td>
        <td><?php echo $cliente['Client']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
