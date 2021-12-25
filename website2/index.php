<?php include './fotos.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>MTL Gallery</title>
</head>
<body>
    <div class="container">
        <h1>Galeria</h1>
        <?php if($pages_file): ?>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($pages_file[0] as $value): ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./uploads/<?php echo $value; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">IMAGEN</h5>
                                <a href="./uploads/<?php echo $value; ?>" class="btn btn-primary">Ver imagen completa</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>