<?php
echo "<h1>RESULTADOS </h1>";

$numero1 = $_POST['num1'];
$numero2 = $_POST['num2'];

// Ejecutamos las funciones
echo Sumar($numero1,$numero2)."<br>";
echo Restar($numero1,$numero2)."<br>";
echo Multiplicar($numero1,$numero2)."<br>";
echo Division($numero1,$numero2)."<br>";



function Sumar($num1,$num2){
    return $num1+$num2;
}

function Restar($num1,$num2){
    return $num1-$num2;
}

function Multiplicar($num1,$num2){
    return $num1*$num2;
}

function Division($num1,$num2){
    if($num2 == 0){
        return "No se puede dividir entre 0";
    } else
        return $num1/$num2;
}
?>