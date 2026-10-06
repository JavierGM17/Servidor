<?php

$texto = $_POST['nums'];

$Array= explode("-",$texto,7);


foreach ($Array as $key => $value) {
    echo "En la posicion $key esta el valor $value <br>";
}


?>