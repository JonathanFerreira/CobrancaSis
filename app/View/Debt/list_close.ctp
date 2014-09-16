<h1>Listagem Close!</h1>
<?php debug($fechadas);?>

    <?php foreach ($fechadas as $key => $fechada): ?>
    <tr>
        <td><?php echo $fechada['Debt']['id']; ?></td>
        <td>
            <?php echo $fechada['Debt']['valor'];?>
        </td>
        <td><?php echo $fechada['Debt']['created']; ?></td>
    </tr>
    <?php endforeach; ?>