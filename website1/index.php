<?php include './server_info.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>System Info</title>
</head>
<body>
    <div class="container">
        <h1>Server Info</h1>
        <?php if($server): ?>
            <ul class="list-group">
               <?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>:</strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <br>
        <hr>
        <br>
        <h1>Client Info</h1>
        <?php if($client): ?>
            <ul class="list-group">
               <?php foreach($client as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>:</strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <hr>
        <br>
        <br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>