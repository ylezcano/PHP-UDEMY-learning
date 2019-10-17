<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario en PHP</title>
</head>
<body>
    <H1>Formulario en PHP</H1>
    <form method="POST" action="recibir.php">
        <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"/>
        </p>
        <p>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido"/>
        </p>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>