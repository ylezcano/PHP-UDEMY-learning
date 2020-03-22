

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
    
    <div id="register" class="bloque">

        <?php if (isset($_SESSION['errores'])): ?>
            <?php var_dump($_SESSION ['errores']); ?>
        <?php endif; ?>

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

            <input type="submit" name="submit" value="registrar" />
        </form>
    </div>
</aside>