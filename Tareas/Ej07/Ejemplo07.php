<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 07</h1>
    <h3>Introduce un numero para mostrar todos los enteros hasta ese numero </h3>

    <form action="" method="post">
        <label for="numero">Numero</label>
        <input type="number" name="numero" id=""  required>
        <input type="submit" value="Click Me">
    </form>


    <?php 
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            $num = $_POST["numero"];
            for ($i=$num; $i < $num ; $i++) { 
                echo "$i ";
            }


        }
    
    ?>
    
</body>
</html>