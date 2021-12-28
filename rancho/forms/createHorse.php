<div class="container justify-content-center">
    <h2>Agregar Caballos</h2>
    <form action="../connections/setHorse.php" class="row g-3">
        <div class="col-md-3">
            <label for="hname" class="form-label">Horse name:</label>
            <input type="text" id="hname" name="hname" class="form-control">
        </div>

        <div class="col-md-3">
            <label for="owner" class="form-label">Horse Owner:</label>
            <select id="owner" name="owner" class="form-select" aria-label="Default select example">
                <?php include "./connections/getOwner.php";?>
            </select>
        </div>

        <div class="col-md-3">
            <label for="sex" class="form-label">Horse sex:</label>
            <select id="sex" name="sex" class="form-select" aria-label="Default select example">
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>

        <div class="col-md-3">
            <label for="color" class="form-label">Horse color:</label>
            <select id="color" name="color" class="form-select" aria-label="Default select example">
                <?php include "./connections/getColors.php";?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>