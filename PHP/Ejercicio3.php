<?php
    //Recibir informacion desde un archivo HTML mediante el metodo GET
    if($_GET){

        $nombre=$_GET['nombre'];
        echo "Hola ".$nombre;

    }

?>