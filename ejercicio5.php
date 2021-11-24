<?php
 if($_POST) { 
    $boton = $_POST['btnvalor'];

    switch($boton) { 
        case 1:
            echo "el usuario preciono el boton 1";
            break;
        case 2:
            echo "el usuario preciono el boton 2";
            break;
        case 3:
            echo "el usuario preciono el boton 3";
            break;

         }
 }
 ?>