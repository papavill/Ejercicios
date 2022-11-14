<?php
    //Uso del metodo Switch con condicionantes

    if($_POST){

        $boton=$_POST['btnvalor'];

        switch($boton){
            case 1:
                echo "Presionó en botón 1";
            break;

            case 2:
                echo "Presionó en botón 2";
            break;

            case 3:
                echo "Presionó en botón 3";
            break;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruccion Switch</title>
</head>
<body>

<form action="Ejercicio6.php" method="post">

    <input type="submit" name="btnvalor" value="1">
    <br/>
    <input type="submit" name="btnvalor" value="2">
    <br/>
    <input type="submit" name="btnvalor" value="3">
    <br/>

</form>

</body>
</html>