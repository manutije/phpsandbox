<?php include 'database.php';?>
<h2>Tabla de Caballos</h2>
<?php if($Caballos): ?>
    <table class="table">
    <tr>
        <th>Nombre</th>
        <th>Dueño</th>
        <th>Sexo</th>
        <th>Color</th>
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
<h2>Agregar Caballos</h2>
<form action="">
    <label for="hname">Horse name:</label>
    <input type="text" id="hname" name="hname">

    <label for="owners">Horse Owner:</label>
    <select id="owners" name="owners" class="form-select" aria-label="Default select example">
        <?php include "./connections/getOwner.php";?>
    </select>

    <label for="sex">Horse sex:</label>
    <select id="sex" name="sex" class="form-select" aria-label="Default select example">
        <option value="M">Male</option>
        <option value="F">Female</option>
    </select>

    <label for="colors">Horse color:</label>
    <select id="colors" name="colors" class="form-select" aria-label="Default select example">
        <?php include "./connections/getColors.php";?>
    </select>
</form>