<?php 
        //?  Dependiendo del metodo utilizado cambiamos get o post 
        $precioObtenido1 = $_POST['precio'];
        $precioObtenido2 = $_POST['precio1'];
        $operacion = $_POST['Opciones'];

        // Con IF

        if($operacion=='Suma')
            echo "La Suma de $precioObtenido1 y $precioObtenido2 es --> ".$precioObtenido1+$precioObtenido2;

        else if($operacion=='Resta')
            echo "La Resta de $precioObtenido1 y $precioObtenido2 es --> ".$precioObtenido1-$precioObtenido2;

        else if($operacion=='Multiplicacion')
            echo "La Multiplicacion de $precioObtenido1 y $precioObtenido2 es --> ".$precioObtenido1*$precioObtenido2;


        // Con Switch

        switch($operacion){
            case "Suma":   echo "La Suma de $precioObtenido1 y $precioObtenido2 es --> ".$precioObtenido1+$precioObtenido2;     break;
            case "Resta":  echo "La Resta de $precioObtenido1 y $precioObtenido2 es --> ".$precioObtenido1-$precioObtenido2;    break;
            case "Multiplicacion":  echo "La Multiplicacion de $precioObtenido1 y $precioObtenido2 es --> ".$precioObtenido1*$precioObtenido2;   break;
        }
    ?>