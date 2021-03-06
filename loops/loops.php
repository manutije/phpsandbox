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
//WHILE

$contador = 0;

echo "<h3> Ejemplo de while</h3>";
while($contador < 5){
    echo "El valor del contador es: $contador <hr>";
    $contador++;
}

//=====================================================================
//DO WHILE

$contador = 0;

echo "<h3> Ejemplo de Do While </h3>";
do {
    # code...
    echo "El valor del contador es: $contador <hr>";
    $contador++;
} while ($contador < 5);

//=====================================================================
//FOR

echo "<h3> Ejemplo de For</h3>";
for ($i=0; $i < 5; $i++) { 
    # code...
    echo "El valor de i es: $i <hr>";
}

//=====================================================================
//FOR EACH

echo "<h3> Ejemplo de For Each</h3>";
$familia = array('Manuel','Tomas','Maria','Gonzalo','Isabel');
foreach ($familia as $miembro) {
    # code...
    echo "$miembro <hr>";
}
?>