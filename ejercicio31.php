<?php

$nombreArchivo="archivo.txt";

$contenidoArchivo="Hola, saludos";

// modo escritura(w)
$archivoCrear=fopen($nombreArchivo,"w");

fwrite($archivoCrear,$contenidoArchivo);

fclose($archivoCrear);




