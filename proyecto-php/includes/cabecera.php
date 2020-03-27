<?php require_once 'conexion.php'; ?>  <!--CONEXIÓN CON BASE DE DATOS -->
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <!-- CABECERA -->

    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Blog de videojuegos
            </a>
        </div>
          <!-- MENU  -->

        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>

                    <?php 
                        $categorias = conseguirCategorias($db); 
                        while($categoria = mysqli_fetch_assoc($categorias)): 
                    ?>
                        <li>
                            <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                        </li>
                    <?php endwhile; ?>

                <li>
                    <a href="index.php">Sobre mí</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div> <!-- Para limpiar flotados y que lo de abajo no se monte con lo de arriba -->
    </header>

    <div id="contenedor">