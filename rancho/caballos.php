<?php include 'database.php';?>
<h2>Tabla de Caballos</h2>
<?php if($Caballos): ?>
    <table class="table">
    <tr>
        <th>Nombre</th>
        <th>Dueno</th>
        <th>Apellidos</th>
        <th>Color</th>
    </tr>
    <?php foreach($Caballos as $value): ?>
        <?php foreach($value as $caballo): ?>
            <tr>
                <td><?php echo $caballo;?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </table>    
<?php endif; ?>