<?php

class Equipo{
    public = $id;
    public = $name; //nombre
    public = $age;  //antigüedad
    public = $dimension_length; //dimension largo
    public = $dimension_width;  // dimension ancho
    public = $weigth;   //peso
    public = $image;    //imagen
    public = $icon;     //icono
    public = $description;  //descripcion

    function __construct($id="", $name="",$age="",$dimension_length="",$dimension_width="",$weigth="",$image="",$icon="",$description=""){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->dimension_length = $dimension_length;
        $this->dimension_width = $dimension_width;
        $this->weight = $weigth;
        $this->image = $image;
        $this->icon = $icon;
        $this->description = $description;
    }
}

class espada extends Equipo{

    public = $corte ;
    public = $material;

    function __construct($id="", $name="",$age="",$dimension_length="",$dimension_width="",$weigth="",$image="",$icon="",$description="",$material="",$corte=""){
        parent::__construct($id,$name,$age,$dimension_length,$dimension_width,$weigth,$image,$icon,$description);

        $this->corte = $corte;
        $this->material = $material;
    }

}

class Arco extends Equipo{

    public = $Madera;
    public = $rango;

    function __construct($id="", $name="",$age="",$dimension_length="",$dimension_width="",$weigth="",$image="",$icon="",$description=""){
        parent::__construct($id,$name,$age,$dimension_length,$dimension_width,$weigth,$image,$icon,$description);

        $this->Madera = $Madera;
        $this->rango = $rango;
    }

}

class Hacha extends Equipo{

    public = $RompeArmaduras;
    public = $durabilidad;

    function __construct($id="", $name="",$age="",$dimension_length="",$dimension_width="",$weigth="",$image="",$icon="",$description=""){
        parent::__construct($id,$name,$age,$dimension_length,$dimension_width,$weigth,$image,$icon,$description);

        $this->RompeArmaduras = $RompeArmaduras;
        $this->durabilidad = $durabilidad;
    }

}

class Lanza extends Equipo{

    public = $alcance;
    public = $perforacion;

    function __construct($id="", $name="",$age="",$dimension_length="",$dimension_width="",$weigth="",$image="",$icon="",$description=""){
        parent::__construct($id,$name,$age,$dimension_length,$dimension_width,$weigth,$image,$icon,$description);

        $this->alcance = $alcance;
        $this->perforacion = $perforacion;
    }

}

?>