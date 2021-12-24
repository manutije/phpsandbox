<?php

// Loops in php

//=====================================================================
//CASE

$variable = 'opcion1';

echo "<h3> Resultado del ejemplo de case</h3>";
switch ($variable) {
    case 'opcion1':
        # code...
        echo "La variable tiene el valor de Opcion 1";
        break;
    
    case 'opcion2':
        # code...
        echo "La variable tiene el valor de Opcion 2";
        break;
    
    case 'opcion3':
        # code...
        echo "La variable tiene el valor de Opcion 3";
        break;

    default:
        # code...
        echo "La variable no tiene seleccionado ninguna opcion";
        break;
}

//=====================================================================

?>