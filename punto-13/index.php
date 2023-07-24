<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 13</title>
</head>
<body>

<h2>
Dado un arreglo numérico de 5 posiciones generar la suma de los numeros (for)

</h2>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numeros = array(
        $_POST["numero1"],
        $_POST["numero2"],
        $_POST["numero3"],
        $_POST["numero4"],
        $_POST["numero5"]
    );

    $suma = 0;
    for ($i = 0; $i < count($numeros); $i++) {
        $suma += $numeros[$i];
    }

    echo "La suma de los números es: " . $suma;
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numero1">Número 1:</label>
    <input type="number" name="numero1" id="numero1" required>
    <br><br>
    <label for="numero2">Número 2:</label>
    <input type="number" name="numero2" id="numero2" required>
    <br><br>
    <label for="numero3">Número 3:</label>
    <input type="number" name="numero3" id="numero3" required>
    <br><br>
    <label for="numero4">Número 4:</label>
    <input type="number" name="numero4" id="numero4" required>
    <br><br>
    <label for="numero5">Número 5:</label>
    <input type="number" name="numero5" id="numero5" required>
    <br><br>
    <input type="submit" value="Calcular Suma">
</form>

</body>
</html>