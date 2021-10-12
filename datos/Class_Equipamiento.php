<?php

class Equipo{
    public $id;
    public $nombre; 
    public $antiguedad;  
    public $dimension_largo; 
    public $dimension_ancho;  
    public $peso;   
    public $imagen;    
    public $icono;     
    public $descripcion;  

    function __construct($id="", $nombre="",$antiguedad="",$dimension_largo="",$dimension_ancho="",$peso="",$imagen="",$icono="",$descripcion=""){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->antiguedad = $antiguedad;
        $this->dimension_largo = $dimension_largo;
        $this->dimension_ancho = $dimension_ancho;
        $this->peso = $peso;
        $this->imagen = $imagen;
        $this->icono = $icono;
        $this->descripcion = $descripcion;
    }
}

class Espada extends Equipo{

    public $corte ;
    public $material;

    function __construct($id="", $nombre="",$antiguedad="",$dimension_largo="",$dimension_ancho="",$peso="",$imagen="",$icono="",$descripcion="",$material="",$corte=""){
        parent::__construct($id,$nombre,$antiguedad,$dimension_largo,$dimension_ancho,$peso,$imagen,$icono,$descripcion);

        $this->corte = $corte;
        $this->material = $material;
    }

}

class Arco extends Equipo{

    public $Madera;
    public $rango;

    function __construct($id="", $nombre="",$antiguedad="",$dimension_largo="",$dimension_ancho="",$peso="",$imagen="",$icono="",$descripcion=""){
        parent::__construct($id,$nombre,$antiguedad,$dimension_largo,$dimension_ancho,$peso,$imagen,$icono,$descripcion);

        $this->Madera = $Madera;
        $this->rango = $rango;
    }

}

class Hacha extends Equipo{

    public $RompeArmaduras;
    public $durabilidad;

    function __construct($id="", $nombre="",$antiguedad="",$dimension_largo="",$dimension_ancho="",$peso="",$imagen="",$icono="",$descripcion=""){
        parent::__construct($id,$nombre,$antiguedad,$dimension_largo,$dimension_ancho,$peso,$imagen,$icono,$descripcion);

        $this->RompeArmaduras = $RompeArmaduras;
        $this->durabilidad = $durabilidad;
    }

}

class Lanza extends Equipo{

    public $alcance;
    public $perforacion;

    function __construct($id="", $nombre="",$antiguedad="",$dimension_largo="",$dimension_ancho="",$peso="",$imagen="",$icono="",$descripcion=""){
        parent::__construct($id,$nombre,$antiguedad,$dimension_largo,$dimension_ancho,$peso,$imagen,$icono,$descripcion);

        $this->alcance = $alcance;
        $this->perforacion = $perforacion;
    }

}

?>