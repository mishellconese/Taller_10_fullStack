<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 7</title>
</head>
<body>

<h2>
    Generar la operación de dos números digitados por el usuario pudiendo 
    el usuario sumar, restar, multiplicar o dividir
</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacion = $_POST["operacion"];

    switch ($operacion) {
        case 'sumar':
            $resultado = $numero1 + $numero2;
            break;
        case 'restar':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicar':
            $resultado = $numero1 * $numero2;
            break;
        case 'dividir':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Error: No se puede dividir por cero.";
            }
            break;
        default:
            $resultado = "Operación inválida.";
            break;
    }

    echo "El resultado de la operación es: " . $resultado;
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numero1">Número 1:</label>
    <input type="number" name="numero1" id="numero1" required>
    <br><br>
    <label for="numero2">Número 2:</label>
    <input type="number" name="numero2" id="numero2" required>
    <br><br>
    <label for="operacion">Operación:</label>
    <select name="operacion" id="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <br><br>
    <input type="submit" value="Calcular">
</form>


</body>
</html>