<?php
    include 'juego/menu/menu.php';
    include 'json_personajes.php';

    var_dump(json_decode($data));

    $data = $datos_json;


    $count=0;
    for($i=0; $i>$count; $i++){
        echo $data;
    }
?>