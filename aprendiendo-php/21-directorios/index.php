<?php

    //Crear Carpeta.
    if (!is_dir('mi_carpeta')) {
        mkdir('mi_carpeta', 0777) or die('No se puede crear carpeta'); //Los números son los permisos.
    }else{
        echo "Ya existe la carpeta";
    }

    //BORRAR DIRECTORIO.
    rmdir('mi_carpeta');
?>