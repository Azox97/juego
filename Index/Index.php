<?php
    require_once '../menu/menu.php';
    
?>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Dni</th>
            <th>altura</th>
            <th>peso</th>
            <th>imagen</th>
            <th>icono</th>
            <th>descripcion</th>
            <th>Raza</th>
            <th>Característica 1</th>
            <th>Característica 2</th>
        </tr>
    </thead>
<?php
    include "../datos/Personajes.php";
    
    $per_json = file_get_contents("../datos/json_personajes.json");

    $perArray = json_decode($per_json);

    $lista = array();

    foreach($perArray as $f) {
            if ("Orco" == $f->tipo){
                $obj = new Orco($f->id,$f->nombre,$f->dni,$f->altura,$f->peso,$f->imagen,$f->icono,$f->descripcion,$f->fuerza,$f->inteligencia);
                echo "<tr>";
                echo "<td>" . $obj->id . "</td>";
                echo "<td>" . $obj->nombre . "</td>";
                echo "<td>" . $obj->dni . "</td>";
                echo "<td>" . $obj->altura . "</td>";
                echo "<td>" . $obj->peso . "</td>";
                echo "<td>" . $obj->imagen . "</td>";
                echo "<td>" . $obj->icono . "</td>";
                echo "<td>" . $obj->descripcion . "</td>";
                echo "<td> Orco </td>";
                echo "<td>Fuerza: " . $obj->fuerza . "</td>";
                echo "<td>Inteligencia: " . $obj->inteligencia . "</td>"; 
                echo "</tr>";
            }
            if ("Elfo" == $f->tipo){
                $obj = new Elfo($f->id,$f->nombre,$f->dni,$f->altura,$f->peso,$f->imagen,$f->icono,$f->descripcion,$f->habitat,$f->poderes);
                echo "<tr>";
                echo "<td>" . $obj->id . "</td>";
                echo "<td>" . $obj->nombre . "</td>";
                echo "<td>" . $obj->dni . "</td>";
                echo "<td>" . $obj->altura . "</td>";
                echo "<td>" . $obj->peso . "</td>";
                echo "<td>" . $obj->imagen . "</td>";
                echo "<td>" . $obj->icono . "</td>";
                echo "<td>" . $obj->descripcion . "</td>";
                echo "<td> Elfo </td>";
                echo "<td>Habitat: " . $obj->habitat . "</td>";
                echo "<td>Poderes: " . $obj->poderes . "</td>"; 
                echo "</tr>";
            }
            if ("Hombre" == $f->tipo){
                $obj = new Hombre($f->id,$f->nombre,$f->dni,$f->altura,$f->peso,$f->imagen,$f->icono,$f->descripcion,$f->color_pelo,$f->color_ojos);
                echo "<tr>";
                echo "<td>" . $obj->id . "</td>";
                echo "<td>" . $obj->nombre . "</td>";
                echo "<td>" . $obj->dni . "</td>";
                echo "<td>" . $obj->altura . "</td>";
                echo "<td>" . $obj->peso . "</td>";
                echo "<td>" . $obj->imagen . "</td>";
                echo "<td>" . $obj->icono . "</td>";
                echo "<td>" . $obj->descripcion . "</td>";
                echo "<td> Hombre </td>";
                echo "<td>Color de pelo: " . $obj->color_pelo . "</td>";
                echo "<td>Color de ojos: " . $obj->color_ojos . "</td>"; 
                echo "</tr>";
            }
            if ("Enano" == $f->tipo){
                $obj = new Enano($f->id,$f->nombre,$f->dni,$f->altura,$f->peso,$f->imagen,$f->icono,$f->descripcion,$f->dinastia,$f->clan);
                echo "<tr>";
                echo "<td>" . $obj->id . "</td>";
                echo "<td>" . $obj->nombre . "</td>";
                echo "<td>" . $obj->dni . "</td>";
                echo "<td>" . $obj->altura . "</td>";
                echo "<td>" . $obj->peso . "</td>";
                echo "<td>" . $obj->imagen . "</td>";
                echo "<td>" . $obj->icono . "</td>";
                echo "<td>" . $obj->descripcion . "</td>";
                echo "<td> Enano </td>";
                echo "<td>Dinastia: " . $obj->dinastia . "</td>";
                echo "<td>Clan: " . $obj->clan . "</td>"; 
                echo "</tr>";
            }
            
    }
    
?>
<tbody>
</tbody>
</table>
<br><br><br><br>

<?php

include "../datos/Class_Equipamiento.php";
    
$per_json = file_get_contents("../datos/json_equipamiento.json");

$perArray = json_decode($per_json);

$lista = array();

foreach($perArray as $f) {
        if ("espada" == $f->tipo){
            $obj = new Espada($f->id,$f->nombre,$f->antiguedad,$f->dimension_largo,$f->dimension_ancho,$f->peso,$f->imagen,$f->icono,.$f->descripcion,$f->corte,$f->material);
            echo "<tr>";
            echo "<td>" . $obj->id . "</td>";
            echo "<td>" . $obj->nombre . "</td>";
            echo "<td>" . $obj->antiguedad . "</td>";
            echo "<td>" . $obj->dimension_largo . "</td>";
            echo "<td>" . $obj->dimension_ancho . "</td>";
            echo "<td>" . $obj->peso . "</td>";
            echo "<td>" . $obj->imagen . "</td>";
            echo "<td>" . $obj->icono . "</td>";
            echo "<td>" . $obj->descripcion . "</td>";
            echo "<td> Espada </td>";
            echo "<td>Corte: " . $obj->corte . "</td>";
            echo "<td>Material: " . $obj->material . "</td>"; 
            echo "</tr>";
        }
        if ("arco" == $f->tipo){
            $obj = new Arco($f->id,$f->nombre,$f->antiguedad,$f->dimension_largo,$f->dimension_ancho,$f->peso,$f->imagen,$f->icono,$f->descripcion,$f->Madera,$f->rango);
            echo "<tr>";
            echo "<td>" . $obj->id . "</td>";
            echo "<td>" . $obj->nombre . "</td>";
            echo "<td>" . $obj->antiguedad . "</td>";
            echo "<td>" . $obj->dimension_largo . "</td>";
            echo "<td>" . $obj->dimension_ancho . "</td>";
            echo "<td>" . $obj->peso . "</td>";
            echo "<td>" . $obj->imagen . "</td>";
            echo "<td>" . $obj->icono . "</td>";
            echo "<td>" . $obj->descripcion . "</td>";
            echo "<td> Arco </td>";
            echo "<td>Madera: " . $obj->Madera . "</td>";
            echo "<td>Rango: " . $obj->rango . "</td>"; 
            echo "</tr>";
        }
        if ("hacha" == $f->tipo){
            $obj = new Hacha($f->id,$f->nombre,$f->antiguedad,$f->dimension_largo,$f->dimension_ancho,$f->peso,$f->imagen,$f->icono,$f->descripcion,$f->RompeArmaduras,$f->durabilidad);
            echo "<tr>";
            echo "<td>" . $obj->id . "</td>";
            echo "<td>" . $obj->nombre . "</td>";
            echo "<td>" . $obj->antiguedad . "</td>";
            echo "<td>" . $obj->dimension_largo . "</td>";
            echo "<td>" . $obj->dimension_ancho . "</td>";
            echo "<td>" . $obj->peso . "</td>";
            echo "<td>" . $obj->imagen . "</td>";
            echo "<td>" . $obj->icono . "</td>";
            echo "<td>" . $obj->descripcion . "</td>";
            echo "<td> Hacha </td>";
            echo "<td>RompeArmaduras: " . $obj->RompeArmaduras . "</td>";
            echo "<td>Durabilidad: " . $obj->durabilidad . "</td>"; 
            echo "</tr>";
        }
        if ("lanza" == $f->tipo){
            $obj = new Lanza($f->id,$f->nombre,$f->antiguedad,$f->dimension_largo,$f->dimension_ancho,$f->peso,$f->imagen,$f->icono,$f->dinastia,$f->clan);
            echo "<tr>";
            echo "<td>" . $obj->id . "</td>";
            echo "<td>" . $obj->nombre . "</td>";
            echo "<td>" . $obj->antiguedad . "</td>";
            echo "<td>" . $obj->dimension_largo . "</td>";
            echo "<td>" . $obj->dimension_ancho . "</td>";
            echo "<td>" . $obj->peso . "</td>";
            echo "<td>" . $obj->imagen . "</td>";
            echo "<td>" . $obj->icono . "</td>";
            echo "<td> Enano </td>";
            echo "<td>Dinastia: " . $obj->dinastia . "</td>";
            echo "<td>Clan: " . $obj->clan . "</td>"; 
            echo "</tr>";
        }
        
}

?>