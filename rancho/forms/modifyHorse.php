<?php 
include '../connections/getHorse.php';
$hsex =$caballo['Sex'];
?>
<div class="container justify-content-center">
    <h2>Modificar Caballo</h2>
    <form action="./connections/updateHorse.php?id="<?php echo $_GET["id"];?>" class="row g-3">
        <div class="col-md-3">
            <label for="hname" class="form-label">Horse name:</label>
            <input type="text" id="hname" name="hname" value='<?php echo $caballo["Name"];?>' class="form-control">
        </div>

        <div class="col-md-3">
            <label for="owner" class="form-label">Horse Owner:</label>
            <select id="owner" name="owner" class="form-select" aria-label="Default select example">
                <?php include "../connections/modifiers/getSpecOwner.php";?>
            </select>
        </div>

        <div class="col-md-3">
            <label for="sex" class="form-label">Horse sex:</label>
            <select id="sex" name="sex" class="form-select" aria-label="Default select example">
                <?php
                if($hsex == 'M'){
                    echo '<option value="M" selected>Male</option>';
                    echo '<option value="F">Female</option>';
                }
                else{
                    echo '<option value="M">Male</option>';
                    echo '<option value="F" selected>Female</option>';
                }
                ?>
            </select>
        </div>

        <div class="col-md-3">
            <label for="color" class="form-label">Horse color:</label>
            <select id="color" name="color" class="form-select" aria-label="Default select example">
                <?php include "../connections/modifiers/getSpecColors.php";?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
</div>