<?php
// abrir archivos en php

// abriendo un archivo para leer el contenido
$archivo = "contenido.txt";

// que me va a abrir el archivo con la opcion de lectua(r)
$archivoAbierto = fopen($archivo,"r");

// va a abrrir el contenido
$contenido = fread($archivoAbierto,filesize($archivo));

echo  $contenido;

// lee el archivo y muestra el contenido










