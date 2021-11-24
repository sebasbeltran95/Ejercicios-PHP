<?php


$frutas =array("f"=>"fresa", "m"=>"manzana", "b"=>"banano");
print_r($frutas);


echo $frutas['f']."<br>";

foreach($frutas as $indice=>&$valor){ 

    echo $valor."<br>";
}

foreach($frutas as $indice=>&$valor){ 

    echo $indice."<br>";
}

foreach($frutas as $indice){ 

    echo $indice."<br>";
}

foreach($frutas as $indice=>&$valor){ 

    echo $frutas[$indice]."<br>";
}
foreach($frutas as $indice=>&$valor){ 

    echo "El valor ".$valor." tiene el indice ".$indice."<br>";
}

