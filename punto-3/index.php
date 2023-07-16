<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 3</title>
</head>
<body>

<h1>Generar la suma de dos números ingresados por el usuario</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenemos los valores ingresados por el usuario
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    // Realizamos la suma
    $suma = $numero1 + $numero2;

    // Mostramos el resultado
    echo "El resultado de la suma es: " . $suma;
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numero1">Número 1:</label>
    <input type="number" name="numero1" id="numero1" required>
    <br><br>
    <label for="numero2">Número 2:</label>
    <input type="number" name="numero2" id="numero2" required>
    <br><br>
    <input type="submit" value="Sumar">
</form>

</body>
</html>