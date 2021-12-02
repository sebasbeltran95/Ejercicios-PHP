<?php
$txtNombre="";
$rdg_lenguaje="";

$chkphp="";
$chkhtml="";
$chkcss="";

$lsAnime="";

if($_POST){
    $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdg_lenguaje=(isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

    $chkphp=(isset($_POST['chkphp']) == "si")?"checked":"";
    $chkhtml=(isset($_POST['chkhtml']) == "si")?"checked":"";
    $chkcss=(isset($_POST['chkcss']) == "si")?"checked":"";

    $lsAnime=(isset($_POST['lsAnime'])?$_POST['lsAnime']:"");

    // print_r($_POST);
    // print_r($rdg_lenguaje);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <?php if($_POST){ ?>
   <strong>Hola</strong>:  <?php echo $txtNombre;?> <br>
   <strong>El lenguaje que te gusta es:</strong>:  <?php echo $rdg_lenguaje;?> <br>
   <strong>lo que estas aprendiendo es:</strong>:  <?php echo $chkphp;?> <br>
   <strong>lo que estas aprendiendo es:</strong>:  <?php echo $chkhtml;?> <br>
   <strong>lo que estas aprendiendo es:</strong>:  <?php echo $chkcss;?> <br>
   <?php }?>
    <form action="ejercicio23.php" method="POST">
        Nombre:<br>
        <input value="<?php echo  $txtNombre;?>" type="text" name="txtNombre" id=""> <!-- con el value le estamos diciedno que conserve el valor que esta imprimiendo -->
        <br>
        <br>
        ¿te gusta? <br>
        <br> php :  <input type="radio" <?php echo ($rdg_lenguaje == "php")?"checked":"";?> name="lenguaje" value="php" id=""> <br>
        <br> html : <input type="radio" <?php echo ($rdg_lenguaje == "html")?"checked":"";;?> name="lenguaje" value="html" id=""> <br>
        <br>css :   <input type="radio" <?php echo ($rdg_lenguaje == "css")?"checked":"";;?> name="lenguaje" value="css" id=""> <br>
        <br>
        Estas aprendiendo.. <br>
        <br> php : <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br> html : <input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
        <br> css :  <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">
        <br>
        ¿Que anime te gusta?.. <br>
        <!-- solo se peude seleccionar una opcion no varias -->
        <select name="lsAnime" id="" disabled="disabled"> 
            <option value="ninguna">[Ninguna serie]</option>
            <option value="pico">[Boku no pico]</option>
            <option value="naruto">[Naruto]</option>
            <option value="bleach">[Bleach]</option>
            <option value="dragon">[Dragon Ball Z]</option>
        </select>
        <br>
        <input type="submit" value="Enviar Informacion">
    </form>
</body>
</html>






