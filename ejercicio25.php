<!-- leer formato json -->
<!-- son informacion que envian algunas apis que podemos  -->
<!-- encontrar para consumir un video, ese video tiene cierta informacion como: titulo, url, nombre -->
<?php
$jsonContenido = '[
    {"nombre":"sebastian","apellido":"beltran"},
    {"nombre":"pedro","apellido":"escamoso"}
    ]';

    // convierte el string del jsoncontenido en un resultado
$resultado = json_decode($jsonContenido);
// print_r($resultado);

foreach($resultado as $persona) {

    // print_r($persona);
    // print_r($persona->nombre);
    echo (($persona->nombre)." ".($persona->apellido)."<br>");

}





