<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <form action="" method="GET">
        <h3>Introduce 2 decimales</h3><br>
        <input type="number" name="decimal1" id="decimal1" required><input type="number" name="decimal2" id="decimal2" required>

        <input type="submit">


        <?php  
            if($_SERVER['REQUEST_METHOD']==='GET'){
                if(isset($_GET['decimal1']) && isset($_GET['decimal2'])){
                    $decimal1 = $_GET['decimal1'];
                    $decimal2 = $_GET['decimal2'];
                    echo "<br>".$decimal1." ".$decimal2;
                    $aux = $decimal1;
                    $decimal1=$decimal2;
                    $decimal2 = $aux;
                    echo "<br>".$decimal1." ".$decimal2;
                }
            }
        
        
        
        ?>
    </form>
    
</body>
</html>