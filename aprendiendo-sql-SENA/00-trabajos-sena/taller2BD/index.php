<?php require_once 'conectionbd.php'; ?>

<?php
require_once 'helpers.php';
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
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="forms">
        <div>
            <form action="insert-author.php" method="POST">
                <h1>Insertar Autor</h1>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre"><br>
                <label for="apellidos">Apellidos</label><br>
                <input type="text" name="apellidos"><br>
                <label for="direccion">Dirección</label><br>
                <input type="text" name="direccion"><br><br>
                <input type="submit" value="Guardar">
            </form>
            <br>
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th>DIRECCIÓN</th>
                </tr>
                <?php
                $autores = conseguirAutores($db);
                if (!empty($autores)) :
                    while ($autor = mysqli_fetch_assoc($autores)) :
                ?>
                        <tr>
                            <td><?= $autor['nombre'] ?></td>
                            <td><?= $autor['apellidos']  ?></td>
                            <td><?= $autor['direccion']  ?></td>
                        </tr>
                <?php
                    endwhile;
                endif;
                ?>
            </table>
        </div>
        <div>
            <form action="insert-theme.php" method="POST">
                <h1>Insertar Tema</h1>
                <label for="tema">Tema</label><br>
                <input type="text" name="tema"><br>
                <label for="homenaje">Homenaje</label><br>
                <textarea name="homenaje" id="" cols="21" rows="5"></textarea><br><br>
                <input type="submit" value="Guardar">
            </form>
            <br>
            <table class="tema">
                <tr>
                    <th>TEMA</th>
                    <th>HOMENAJE</th>
                </tr>
                <?php
                $temas = conseguirTemas($db);
                if (!empty($temas)) :
                    while ($tema = mysqli_fetch_assoc($temas)) :
                ?>
                        <tr>
                            <td><?= $tema['temas'] ?></td>
                            <td><?= substr($tema['homenaje'], 0, 50) . '...' ?></td>
                        </tr>
                <?php
                    endwhile;
                endif;
                ?>
            </table>
        </div>
        <div>
            <form action="insert-book.php" method="POST">
                <h1>Insertar Libro</h1>
                <label for="tipo">Tipo</label><br>
                <input type="text" name="tipo"><br>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre"><br>
                <label for="editor">Editor</label><br>
                <input type="text" name="editor"><br>

                <label for="autor">Autor</label><br>
                <select name="autor">
                    <?php
                    $autores = conseguirAutores($db);
                    if (!empty($autores)) :
                        while ($autor = mysqli_fetch_assoc($autores)) :
                    ?>
                            <option value="<?= $autor['id_autor'] ?>">
                                <?= $autor['nombre'] ?> <?= $autor['apellidos'] ?>
                            </option>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </select> <br>
                <label for="tema">Tema</label><br>
                <select name="tema">
                    <?php
                    $temas = conseguirTemas($db);
                    if (!empty($temas)) :
                        while ($tema = mysqli_fetch_assoc($temas)) :
                    ?>
                            <option value="<?= $tema['id_publicacion'] ?>">
                                <?= $tema['temas'] ?>
                            </option>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </select> <br>
                <label for="fecha">Fecha</label><br>
                <input type="date" name="fecha" value="<?php echo date("Y-m-d"); ?>"><br>
                <label for="paginas">Paginas</label><br>
                <input type="number" name="paginas"><br><br>
                <input type="submit" value="Guardar">
            </form>
            <br>
            <table class="tema">
                <tr>
                    <th>NOMBRE</th>
                    <th>TIPO</th>
                    <th>EDITOR</th>
                    <th>AUTOR</th>
                    <th>TEMA</th>
                    <th>FECHA</th>
                    <th>PAGINAS</th>
                    <th>ACCIÓN</th>
                </tr>
                <?php
                $libros = conseguirLibros($db);
                $libro = mysqli_fetch_assoc($libros);
                // var_dump($libro);
                if (!empty($libros)) :
                    while ($libro = mysqli_fetch_assoc($libros)) :
                ?>
                        <tr>
                            <td><?= $libro['nombre'] ?></td>
                            <td><?= $libro['tipo']?></td>
                            <td><?= $libro['editor']?></td>
                            <td><?= $libro['Nombre del autor']?></td>
                            <td><?= $libro['temas']?></td>
                            <td><?= $libro['fecha']?></td>  
                            <td><?= $libro['paginas']?></td>
                            <td><a href="delete.php?&id=<?=$libro['id_libro']?>"><img src="imagenes/61391.png" alt=""></a></td>
                        </tr>
                <?php
                    endwhile;
                endif;
                ?>
            </table>
        </div>
    </div>


</body>

</html>