 <?php
 if($_POST) { 
    $nombre = $_POST ['txtNombre'];
    echo "Hola ".$nombre;
 }
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <form action="index.php" method="POST">

     Nombre:
     <input type="text" name="txtNombre">
     <br>
     <input type="submit" value="Enviar">
     </form>
 </body>
 </html>