<!-- sumadora.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no , initial scale= 1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sumadora en PHP</title>
</head>
<body bgcolor="gray">
    <h1>Sumadora en PHP</h1>
 <h3 align="center"><a href="/index.html">REGRESA AL INICIO AQUI</a></h3>
    <form method="POST" action="">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>

        <button type="submit">Sumar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoge los valores enviados desde el formulario
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Realiza la suma
        $suma = $num1 + $num2;

        // Muestra el resultado
        echo "<h2>Resultado: $num1 + $num2 = $suma</h2>";
    }
    ?>
</body>
</html>
