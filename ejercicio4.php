<?php
 if($_POST) { 
    $valorA = $_POST ['valorA'];
    $valorB = $_POST ['valorB'];
    $valorC = $_POST ['valorC'];
    if($valorC == 1) { 
        $resultado = $valorA + $valorB;
        echo $resultado;
    } else  if($valorC == 2) { 
        $resultado = $valorA - $valorB;
        echo $resultado;
    } else  if($valorC == 3) { 
        $resultado = $valorA * $valorB;
        echo $resultado;
    } else  if($valorC == 4) { 
        $resultado = $valorA / $valorB;
        echo $resultado;
    } else { 
        echo "Error al digitar la operacion";
    }
 }
 ?>