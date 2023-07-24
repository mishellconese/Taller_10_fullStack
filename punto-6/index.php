<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 6</title>
</head>
<body>

<h2>
    Dado el nombre y la edad del usuario, generar un mensaje que incluya 
    el nombre del usuario e indique si es mayor de edad o no.
</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];

    
    $esMayorDeEdad = ($edad >= 18);

    
    $mensaje = "Hola, $nombre. Eres " . ($esMayorDeEdad ? "mayor" : "menor") . " de edad.";
    echo $mensaje;
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br><br>
    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad" required>
    <br><br>
    <input type="submit" value="Verificar">
</form>


</body>
</html>