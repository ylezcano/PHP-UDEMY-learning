<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
    $categoria_actual = conseguirCategoria($db, $_GET['id']);
    // var_dump($categoria);
    // die();
    if(!isset($categoria_actual['id'])){
        header("Location: index.php");
    }
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

    <!-- CAJA PRINCIPAL -->
        <div id="principal">

            <h1>ENTRADAS DE <?=$categoria_actual['nombre']?></h1>
    
            <?php
                $entradas = conseguirEntradas($db, null, $_GET['id']);
                
                if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
                    while($entrada = mysqli_fetch_assoc($entradas)):
            ?>
                    <article class="entrada">
                        <a href="entrada.php?id=<?=$entrada['id']?>">
                            <h2><?=$entrada['titulo']?></h2>
                            <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha'];?></span> 
                            <p>
                                <?=substr($entrada['descripcion'], 0, 200).'...'?> <!--substr para limitar la cantidad de caracteres a mostrar en pantalla -->
                            </p>
                        </a>
                    </article>
            
            <?php        
                    endwhile;
                else:
            ?>
                <div class="alerta">No hay entradas en esta categoría</div>
            <?php endif; ?>
        </div>
    
  
<?php require_once 'includes/pie.php'; ?>