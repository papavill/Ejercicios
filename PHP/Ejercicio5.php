<?php
        //Metodo POST con varios datos
    if($_POST){
        $txtNombre=$_POST ['txtNombre'];        //Las variables se forman iniciando con el simbolo $
        $txtApellido=$_POST ['txtApellido'];    

        //tanto en php como en HTML, los saltos de linea se escriben <br/>

        echo "Hola ".$txtNombre." ".$txtApellido;   //para concatenar se usa el punto.
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>

<form action="Ejercicio5.php" method="post">
            Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>

            Apellido:
        <input type="text" name="txtApellido" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>