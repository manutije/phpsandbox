<?php
    $directory   = './uploads';
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
?>