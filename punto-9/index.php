<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 9</title>
</head>
<body>

<h2>
Dado un número digitado por el usuario generar la tabla de multiplicar 
de del 0 hasta el 30;(While)
</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];

    if (is_numeric($numero) && $numero > 0 && $numero == round($numero)) {
        $i = 0;
        echo "<h2>Tabla de multiplicar del $numero:</h2>";
        echo "<ul>";
        while ($i <= 30) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
            $i++;
        }
        echo "</ul>";
    } else {
        echo "Por favor, ingresa un número entero positivo mayor que 0.";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numero">Ingresa un número entero positivo mayor que 0:</label>
    <input type="number" name="numero" id="numero" required>
    <br><br>
    <input type="submit" value="Generar Tabla">
</form>


</body>
</html>