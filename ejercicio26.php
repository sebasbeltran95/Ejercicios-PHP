<!-- inverso a lo que es el json (json_decode) esto lo hace al reves -->
<!-- mostrar informacion en formato json para otras aplicaciones intercambiar informacion entre aplicaciones de diferentes texnologias-->
<?php

$personas = array("Oscar"=>40, "jose"=>20, "marisa"=>38);
// pasar esta informacion a json
// codificar la informacion y sacarla en json
echo json_encode($personas);



