<?php
    //METODO POST
    // condicionamos con metodo  if
    if($_POST){
    //Recibir informacion de formulario de HTML (metodo POST)
    $nombre=$_POST['txtNombre'];    //creamos una variable que almacenara informacion del input de HTML

    echo "¿Que tal? ".$nombre;  //muestra mensaje mas informacion de la variable 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    
    <form action="Ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>