<?php
 if($_POST) { 
    $nombre = $_POST ['txtNombre'];
    $apellido = $_POST ['txtApellido'];
    $telefono = $_POST ['txtTelefono'];
    echo "Hola ".$nombre. " ".$apellido." ".$telefono;
 }
 ?>