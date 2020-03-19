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
                <li>
                    <a href="index.php">Categoría 1</a>
                </li>
                <li>
                    <a href="index.php">Categoría 2</a>
                </li>
                <li>
                    <a href="index.php">Categoría 3</a>
                </li>
                <li>
                    <a href="index.php">Categoría 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mí</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="contenedor">
    <!-- BARRA LATERAL -->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="loguin.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" />

                    <label for="password">Contraseña</label>
                    <input type="password" name="Password" />

                    <input type="submit" value="entrar" />
                </form>
            </div>
            
            <div id="register" class="block-aside">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" />

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" />

                    <label for="email">Email</label>
                    <input type="email" name="email" />

                    <label for="password">Contraseña</label>
                    <input type="password" name="Password" />

                    <input type="submit" value="registrar" />
                </form>
            </div>
        </aside>
    <!-- CAJA PRINCIPAL -->
    <div id="principal">
        <h1>Ultimas entradas</h1>
        <article class="entrada">
            <h2>Título de mi entrada</h2>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus doloribus fugiat delectus dolorum culpa consequatur sed obcaecati nobis tempora. Quam sapiente consequuntur mollitia deserunt asperiores animi laborum necessitatibus repudiandae suscipit?
            </p>
        </article>

        <article class="entrada">
            <h2>Título de mi entrada</h2>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus doloribus fugiat delectus dolorum culpa consequatur sed obcaecati nobis tempora. Quam sapiente consequuntur mollitia deserunt asperiores animi laborum necessitatibus repudiandae suscipit?
            </p>
        </article>

        <article class="entrada">
            <h2>Título de mi entrada</h2>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus doloribus fugiat delectus dolorum culpa consequatur sed obcaecati nobis tempora. Quam sapiente consequuntur mollitia deserunt asperiores animi laborum necessitatibus repudiandae suscipit?
            </p>
        </article>

        <article class="entrada">
            <h2>Título de mi entrada</h2>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus doloribus fugiat delectus dolorum culpa consequatur sed obcaecati nobis tempora. Quam sapiente consequuntur mollitia deserunt asperiores animi laborum necessitatibus repudiandae suscipit?
            </p>
        </article>
    </div>
    </div>
    <!-- PIE DE PÁGINA -->
    <footer id="pie">
        <p>Desarrollado por Yonny Lezcano &copy; 2020</p>
    </footer>
</body>
</html>