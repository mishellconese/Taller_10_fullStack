<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 5</title>
</head>
<body>

<h2>
    Dado el tipo de afiliación y el número de personas digitados por 
    el usuario generar el valor de las entradas a la bolera teniendo 
    en cuenta que si el tipo de afiliación  es ‘A’ o ‘B’ tendrá un 
    descuento del  30% del total y el valor es de $25.000 por persona.
</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $tipoAfiliacion = $_POST["tipo_afiliacion"];
    $numPersonas = $_POST["num_personas"];

    
    $valorEntrada = 25000;

    
    $valorTotalSinDescuento = $valorEntrada * $numPersonas;

    
    if ($tipoAfiliacion == 'A' || $tipoAfiliacion == 'B') {
        $descuento = 0.30;
        $valorTotalConDescuento = $valorTotalSinDescuento * (1 - $descuento);
    } else {
        
        $valorTotalConDescuento = $valorTotalSinDescuento;
    }

    
    echo "Valor total a pagar: $" . $valorTotalConDescuento;
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="tipo_afiliacion">Tipo de afiliación (A, B u otro):</label>
    <input type="text" name="tipo_afiliacion" id="tipo_afiliacion" required>
    <br><br>
    <label for="num_personas">Número de personas:</label>
    <input type="number" name="num_personas" id="num_personas" required>
    <br><br>
    <input type="submit" value="Calcular Valor">
</form>

</body>
</html>