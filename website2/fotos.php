<?php
    $directory   = './uploads';
    $files = array_diff(scandir($directory), array('..', '.'));
    $contador = 0;
    $size = sizeof($files);
    echo $size;
?>