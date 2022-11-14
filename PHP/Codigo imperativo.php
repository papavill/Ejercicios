<?php
    #Codigo Imperativo o de espaguetti
        #De seguridad muy vulnerable por estar todo el codigo escrito en un solo archivo.

        #primero creamos variables:

        $automovil1=(object)["marca"=>"Toyota","modelo"=>"Camry"];
        $automovil2=(object)["marca"=>"Chevrolet","modelo"=>"Astra"];

        #luego construimos una funcion:
        function mostrar($automovil){
            echo "<p>Hola soy un $automovil->marca, modelo $automovil->modelo</p>";     
            #usamos <p></p> para darle a cada linea formato parrafo
        }

        mostrar($automovil1);
        mostrar($automovil2);

?>