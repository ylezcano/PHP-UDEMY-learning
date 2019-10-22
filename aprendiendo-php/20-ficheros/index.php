<?php
    //ABIR ARCHIVO .TXT
    $archivo = fopen("fichero_texto.txt", "a+"); // se abare archivo con permiso "a+" para poder leer y escribir.
    //LEER ARCHIVO
    while (!feof($archivo)) {   //  SE USA EL BUCLE WHILE PARA HACER QUE SE LEA CADA LÍNEA DEL ARCHIVO.
        $contenido =fgets($archivo);
        echo $contenido."<br/>";  // Se utilizar el espaciador "<br/>" para conservar el texto en cada línea.
    }

    //ESCRIBIR DENTRO DEL ARCHIVO.
    fwrite($archivo, "Texto de prueba insertado desde php.");
    //CERRAR ARCHIVO
    fclose($archivo);

    // copiar fichero
    copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");

    //Renombrar fichero
    rename('fichero_copiado.txt', 'archivo_connuevonombre.txt');

    //Eliminar un fichero
    unlink('archivo_connuevonombre.txt') or die('Error al eliminar');

    //Comprobar si un archivo existe
    if(file_exists(fichero_texto.txt)){
        echo "El archivo Existe";
    }else{
        echo "No existe";
    }
?>