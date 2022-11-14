<?php
    #funcion sin parametro
        #Primero declaramos la funcion:
    function saludo(){
        echo "Hola <br>";       #se puede colocar asi el salto de linea

    }

    #Luego de declarada se ejecuta:
    saludo();

    #funcion con parametro:
    function despedida ($adios){
        echo $adios."<br>";     #asi tambien se puede concatenar el salto de linea

    despedida("Chao!");
    }

    #funcion con retorno:
    function retorno($retornar){
        return $retornar;

    }

    echo retorno("Retornar");
    
?>