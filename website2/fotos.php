<?php
    // Read al files and save them in files variable
    $directory   = './uploads';
    $files = array_diff(scandir($directory), array('..', '.'));

    //Contador primario de 0 a 128
    $contador_prim = 0;

    //Contador secundario de 0 a x
    $contador_secu = 0;

    //Contador tercerario de 0  a 9
    $contador_terc = 0;

    //Arreglo de paginas y temporal
    $pages_file = [];
    $temp = [];

    //Tamano de variable files
    $size = sizeof($files);


    echo $size;
    
    while ($contador_prim < $size){
        while($contador_terc < 10){
            /*
            $temp[$contador_terc]= $files[$contador_prim];
            */
            echo "Folder: $contador_secu | Picture: $contador_prim"
            $contador_prim = $contador_prim +1;
            $contador_terc = $contador_terc +1;
        }
        /*
        $pages_file[$contador_secu]=$temp
        */
        $contador_secu = $contador_secu +1;
        $contador_terc = 0;
        /*
        $temp = array();
        */
    }
    //print_r($pages_file);
    
?>