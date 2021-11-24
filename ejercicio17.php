<?php


class persona{ 

    public $nombre; //propiedades
    private $edad;
    protected $altura;
    
    public function asignarNombre($nuevoNombre){ 

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

$objAlumno = new persona(); // instancia o creacion de un objeto
$objAlumno->asignarNombre("sebas");

$objAlumno2 = new persona(); // instancia o creacion de un objeto
$objAlumno2->asignarNombre("pedro");
$objAlumno2->imprimirNombre();


echo $objAlumno->nombre."<br>"; //imprimir una propiedad 
echo $objAlumno2->nombre; //imprimir una propiedad 
echo $objAlumno2->mostrarEdad();
