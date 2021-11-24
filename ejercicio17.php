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
class trabajador extends persona { 

    public $puesto; // propiead nueva
    public function presentarseComoTrabajador(){ 
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;

    }

}

$objTrabajador = new trabajador(); // instancia o creacion de un objeto
$objTrabajador->asignarNombre("pedro");
$objTrabajador->puesto="profesor";

$objTrabajador->presentarseComoTrabajador();