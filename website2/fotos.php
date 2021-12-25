<?php
    // Read al files and save them in files variable
    $directory   = './uploads';
    $files = array_diff(scandir($directory), array('..', '.'));

    //Contador primario de 0 a 128
    $contador_prim = 0;

    //Contador secundario de 0 a 9
    $contador_secu = 0;

    //Arreglo de paginas y temporal
    $pages_file = [];
    $temp = [];

    //Tamano de variable files
    $size = sizeof($files);


    echo $size;
    /*
    while ($contador_prim < $size){
        while($contador_prim < 10){
            $temp[]= $files[$contador_prim];
            $contador_prim ++;
        }
        $pages_file[$contador_secu]=$temp
        $contador_secu ++;
        $temp = array();
    }
    print_r($pages_file);
    */
?>