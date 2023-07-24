<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 4</title>
</head>
<body>

<h1>Mostrar en consola el nombre y apellido ingresado por el usuario</h1>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        
        echo "<h4>Nombre: $nombre</h4>";
        echo "<h4>Apellido: $apellido</h4>";
    }
    ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido" required>
    <br><br>
    <input type="submit" value="Mostrar">
</form>

</body>
</html>