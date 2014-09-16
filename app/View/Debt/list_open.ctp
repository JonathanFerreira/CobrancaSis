<h1>Listagem Open!</h1>

<?php debug($abertas);?>
    <?php foreach ($abertas as $key => $aberta): ?>
    <tr>
        <td><?php echo $aberta['Debt']['id'];  ?></td>
        <td>
            <?php echo $aberta['Debt']['valor'];?>

        </td>
        <td><?php echo $aberta['Debt']['created']; ?></td>
    </tr>
    <?php endforeach; ?>