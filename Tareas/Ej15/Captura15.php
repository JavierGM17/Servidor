<?php
$dia =strtoupper($_POST['Dia']);

if(esDiaValido($dia)){
    echo "Es un dia valido <br>";
    if(esDiaLaboral($dia)){
        echo "Es un dia laboral";

    } else 
        echo "Es un dia laboral";

}else
echo "No es un dia valido";




function esDiaValido($letra){
    if($letra == 'L' || $letra == 'M' || $letra == 'X' || $letra == 'J' || $letra == 'V' || $letra == 'S' ||$letra == 'D' ){
        return true;

    } else
        return false;

    }




function esDiaLaboral($letra){
    if($letra == 'L' || $letra == 'M' || $letra == 'X' || $letra == 'J' || $letra == 'V' )
        return true;
    else
        return false;
}
?>
