<?php


class persona{ 

    public $nombre; //propiedades
    private $edad;
    protected $altura;
    
    function __construct($nuevoNombre){ 

        $this->nombre = $nuevoNombre;

    }

    public function asignarNombre($nuevoNombre){ //acciones o metodos

        $this->nombre =  $nuevoNombre;

    }
    public function imprimirNombre(){ 

        echo "Hola Soy ".$this->nombre."<br>";

    }
    public function mostrarEdad(){ 
        $this->edad = 20;
        return $this->edad;

    }
}

$objAlumno = new persona("oscar"); // instancia o creacion de un objeto
//$objAlumno->asignarNombre("oscar"); //llamando un metodo
$objAlumno->imprimirNombre(); //







