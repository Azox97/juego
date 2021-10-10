<?php
    class Personajes{
        public $id;
        public $nombre;
        public $dni;
        public $altura;
        public $peso;
        public $imagen;
        public $icono;
        public $descripcion;

        function __construct($id="", $nombre="", $dni="", $altura = "", $peso = "", $imagen = "", $icono = "", $descripcion = "") {
            $this-> id = $id;
            $this -> nombre = $nombre;
            $this -> dni = $dni;
            $this -> altura = $altura;
            $this -> peso = $peso;
            $this -> imagen = $imagen;
            $this -> icono = $icono;
            $this -> descripcion = $descripcion;
        }        
    }

    class Orco extends Personajes{   
        public $fuerza;
        public $inteligencia;

        function __construct($id="", $nombre="", $dni="", $altura = "", $peso = "", $imagen = "", $icono = "", $descripcion = "", $fuerza=" ", $inteligencia=""){
            parent::__construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion);

            $this ->fuerza = $fuerza;
            $this -> inteligencia = $inteligencia;
        }
    }

    class Elfo extends Personajes{
        public $habitat;
        public $poderes;

        function __construct($id="", $nombre="", $dni="", $altura = "", $peso = "", $imagen = "", $icono = "", $descripcion = "", $habitat="", $poderes=""){
            parent::__construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion);

            $this ->habitat = $habitat;
            $this ->poderes = $poderes;
        }
    }

    class Hombre extends Personajes{
        public $color_pelo;
        public $color_ojos;

        function __construct($id="", $nombre="", $dni="", $altura = "", $peso = "", $imagen = "", $icono = "", $descripcion = "", $color_pelo="", $color_ojos=""){
            parent::__construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion);

            $this -> color_pelo = $color_pelo;
            $this -> color_ojos = $color_ojos;
        }
    }
    
    class Enanos extends Personajes{
        public $dinastia;
        public $clan;

        function __construct($id="", $nombre="", $dni="", $altura = "", $peso = "", $imagen = "", $icono ="", $descripcion = "", $dinastia="", $clan=""){
            parent::__construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion);
            
            $this->dinastia = $dinastia;
            $this->clan = $clan;
        }
    }
?>