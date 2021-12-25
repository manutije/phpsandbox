<?php
    $directory   = './uploads';
    $files = array_diff(scandir($directory), array('..', '.'));
?>