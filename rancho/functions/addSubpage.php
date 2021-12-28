<?php 
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = "0";
    }
    if($page != "0"){
        $direction = './pages/'.$page.'.php';
        include $direction;
    }
    else{
        echo "<h3 class='text-center'>Selecciona una opcion</h3>";
    }
?>