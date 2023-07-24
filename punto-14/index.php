<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/general-styles.css">
    <title>Punto 14</title>
</head>
<body>

<h2>
Dada una contraseña a registrar por el usuario generar validaciones de si esta contraseña es segura o no teniendo en cuenta que una contraseña es segura si:
<br>
Tiene más de 8 Caracteres <br>
Tiene al menos una letra mayúscula<br>
Tiene al menos un número<br>

</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $contrasena = $_POST["contrasena"];

    $tieneMasDe8Caracteres = preg_match('/^.{8,}$/', $contrasena);
    $tieneMayuscula = preg_match('/[A-Z]/', $contrasena);
    $tieneNumero = preg_match('/[0-9]/', $contrasena);

    if ($tieneMasDe8Caracteres && $tieneMayuscula && $tieneNumero) {
        echo "La contraseña es segura.";
    } else {
        echo "La contraseña no cumple con los requisitos de seguridad.";
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="contrasena">Ingresa una contraseña:</label>
    <input type="password" name="contrasena" id="contrasena" required>
    <br><br>
    <input type="submit" value="Validar Contraseña">
</form>

</body>
</html>