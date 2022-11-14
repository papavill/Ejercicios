<?php
    
    #En el codigo orientado a objetos POO se empaquetan los objetos en clases
        #codigo de mayor seguridad ante ataques o intentos de modificar sin autorizacion por su estructura.
        /*Principios de la PPO que se cumplen en estos ejemplos:
            ABSTRACCION: nuevos tipos de datos (el que tu quieras, tu los creas)
            ENCAPSULAMIENTO: organizar el codigo en grupos logicos.
            OCULTAMIENTO: oculta detalles de implementacion y expone solo los detalles que sean necesarios
            para el resto del sistema.
        */
    
    #CLASE: es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad.

    class Automovil{

        #PROPIEDADES DE LAS CLASES:
        #son las caracteristicas que puede tener un objeto.

        public $marca;
        public $modelo;
            //variables de tipo publicas para ser accedidas de cualquier parte de la aplicacion.

        #METODO: 
            /*Es el algoritmo asociado a un objeto que indica la capacidad de lo que esta puede hacer. 
            La unica diferencia entre metodo y funcion, es que llamamos método a las funciones de una clase
            (en la PPO), mientras que llamamos funciones a los algoritmos de la programacion estructurada */

        public function mostrar (){
            echo "<p>Hola! soy un $this->marca, modelo $this->modelo </p>";
        }
    }

    #OBJETO:
        #Entidad provista de metodos o mensajes a los cuales responde propiedades con valores concretos.
        
    $a= new Automovil();
    $a-> marca = "Ford";
    $a-> modelo = "Fusion";
    $a -> mostrar();

    $b= new Automovil();
    $b-> marca = "Toyota";
    $b-> modelo = "Corolla";
    $b -> mostrar();

    $c= new Automovil();
    $c-> marca = "Chevrolet";
    $c-> modelo = "Corsa";
    $c -> mostrar();
    
    
?>