<?php require_once 'conectionbd.php';?>
<?php 

// if($db){
//     echo "conexión exitosa";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insertar Autor</h1>
    <form action="insert-author.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre"><br>
        <label for="apellidos">Apellidos</label><br>
        <input type="text" name="apellidos"><br>
        <label for="direccion">Dirección</label><br>
        <input type="text" name="direccion"><br><br>
        <input type="submit" value="Guardar">
    </form>
    <h1>Insertar Tema</h1>
    <form action="insert-theme.php" method="POST">
        <label for="tema">Tema</label><br>
        <input type="text" name="tema"><br>
        <label for="homenaje">Homenaje</label><br>
        <textarea name="homenaje" id="" cols="21" rows="5"></textarea><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>