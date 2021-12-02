<!-- consumir una api en php -->
<!-- ejemplo consumo api https://developer.dailymotion.com/ -->
<?php
// identificamos la url
$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

// le pusimos opciones para que nos deje leer
$opciones = array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));

// una funcion que me permite leer todo el contenido y convertirlo a un string para que nosotros podamos
// decodificarlo en un formato de objetos y arreglos que nos permitan leer  esa informacion qe viene
// de esa api
$respuesta = file_get_contents($url,false,stream_context_create($opciones));

$objRespuesta = json_decode($respuesta);

// print_r($objRespuesta);


foreach($objRespuesta->list as $video){

    // print_r($video);
    // print_r($video->title);
    // print_r($video->channel);
}

?>
    <ul>
        <?php foreach($objRespuesta->list as $video){ ?>
            <li><?php echo ($video->title); ?> | <?php echo ($video->channel); ?> </li>
        <?php } ?>
    </ul>