<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>


    <h1>Ejercicio 1</h1>

    <h2>CALCULADORA</h2>
    <!-- GET se ve la URL y POST no se ve la URL -->
    <form name="miFormulario" action="Ej01Form.php" method="POST">
        <label for="precio"> Introduce el primer numero: </label><br>
        <input name="precio" type="text" required>
        <br><br>
        <label for="precio1"> Introduce el segundo numero:  </label><br>
        <input name="precio1" type="text" required>
        <br><br>
        <label for="Opciones">Elige una Operacion </label><br>
        <select name="Opciones" id="Op">
            <option value="Suma">Suma</option>
            <option value="Resta">Resta</option>
            <option value="Multiplicacion">Multiplicacion</option>
            <option value="Division">Division</option>
        </select>

        <br><br>
        <input name="lagartito" type="submit" value="Pulsame">


    </form>
</body>
</html>