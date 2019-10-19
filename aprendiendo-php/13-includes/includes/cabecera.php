<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
   
    <title>Includes en PHP</title>
</head>
<body>

     <?php $nombre ="Esneyder Benitez" ?>  <!--puedo declarar variables y usarlas en cualquier parte del código
                                            o de los otros ficheros como por ejemplo el include del footer.
                                            ya que se van heredando de arriba hacia abajo lo que quiere decir que 
                                            si lo declaro la variable en el include del footer no podría usarla 
                                            en el include de la cabecera. -->

    <!-- Cabecera -->
    <div class="cabecera">
        <h1>Includes en PHP 7</h1>
        <UL>
            <LI><a href="index.php">Inicio</a></LI>
            <LI><a href="sobremi.php">Sobre mi</a></LI>
            <LI><a href="contacto.php">Contacto</a></LI>
            <LI><a href="https://www.google.es/">Google</a></LI>
        </UL>
        <hr/>
    </div>
</html>