<?php include './connections/getHorsesTable.php';?>
<h2>Tabla de Caballos</h2>
<?php if($Caballos): ?>
    <table class="table">
    <tr>
        <th>Nombre</th>
        <th>Dueño</th>
        <th>Sexo</th>
        <th>Color</th>
        <th>View</th>
    </tr>
    <?php foreach($Caballos as $value): ?>
        <tr>
            <?php foreach($value as $caballo): ?>
                <td><?php echo $caballo;?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </table>    
<?php endif; ?>