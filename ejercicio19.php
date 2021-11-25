<?php


class UnaClase { 

    public static function unMetodo(){ 
        echo "Hola soy un objeto estatico";
    }

}

$obj = new UnaClase();
$obj ->unMetodo();

UnaClase::unMetodo();

