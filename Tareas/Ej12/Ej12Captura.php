<?php
$numero = $_POST['num'];

    if($numero<=1 || $numero>9){
        echo "Has introducido un numero fuera del rango";


    }else{
        $archivo = fopen("archivo.txt","a");
        echo "<h3>TABLA DE MULTIPLICAR DEL $numero <br><br></h3>";
        for ($i=1; $i < 11; $i++) { 
            echo "$numero x $i = ".($numero*$i)."<br>";
            fputs($archivo,"$numero x $i = ".($numero*$i).PHP_EOL);
        }

        fputs($archivo, PHP_EOL);
        fclose($archivo);
    }





?>