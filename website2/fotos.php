<?php
    $directory   = '/var/www';
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
?>