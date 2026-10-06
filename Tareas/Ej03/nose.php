<?php

$nomDia =$_POST['dia'];

$nomDia = strtoupper($nomDia);

switch ($nomDia) {
    case 'L':
    case 'M': 
    case 'X':
    case 'J':
    case 'V': echo "Es un dia laboral"; break;
    case 'S':
    case 'D':
        echo "Es un dia no laboral"; break;
    default:
        echo "No es un dia valido";
        break;
}

?>