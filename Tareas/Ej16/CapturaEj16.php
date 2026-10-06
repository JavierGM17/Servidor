<?php

// 1. Guardamos el tamaño que viene del formulario de forma segura
$tamano =  (int)$_POST['num'] ;

// 2. Generamos la matriz pasando ese tamaño como argumento
$matriz = generarMatriz($tamano);

// 3. Recorremos la matriz usando el tamaño para limitar los bucles
for ($i = 0; $i < $tamano; $i++) {
    for ($p = 0; $p < $tamano; $p++) {
        echo $matriz[$i][$p] . " ";
    }
    echo "<br>"; // Salto de línea para que parezca una tabla
}

// Función con variables claras y separadas
function generarMatriz($limite) {
    $nuevaMatriz = array(); // Array vacío limpio
    
    for ($i = 0; $i < $limite; $i++) {
        for ($p = 0; $p < $limite; $p++) {
            $nuevaMatriz[$i][$p] = rand(0, 100);
        }
    }
    
    return $nuevaMatriz; // Devolvemos la matriz completa cargada
}

?>
