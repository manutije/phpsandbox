<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Rancho</title>
</head>
<body>
    <br>
    <br>
    <div class="container">
        <h1 class="text-center">Administracion Rancho</h1>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-warning" href="./index.php?page=caballos">Caballos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=vacasb">Vacas Bravas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=torosb">Toros Bravos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=manso">Ganado Manso</a>
            </li>
        </ul>
        <br>
        <hr>
        <?php 
            include './fotos.php'; 
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }
            else{
                $page = 0;
            }
            if($page != 0){
                include "./$page.php"
            }
            else{
                <h3>Selecciona una opcion</h3>
            }
        ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>