<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 08</h1>
    <h3>Introduce un numero para mostrar todos los pares o impares </h3>

    <form action="" method="post">
        <label for="numero">Numero</label>
        <input type="number" name="numero" id=""  required>
        <input type="submit" value="Click Me">
    </form>


    <?php 
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            $num = $_POST["numero"];
            
            for ($i=0; $i < $num ; $i++) { 
                for ($p=0; $p <= $i; $p++) { 
                    echo "*";
                }
            echo "<br>";
            }


        }
    
    ?>
    
</body>
</html>