<?php

function autocargar_clases($class){  //se puede poner cualquier nombre, por ejemplo app_autoloader etc....
    include 'clases/'.$class. '.php';

}

spl_autoload_register('autocargar_clases');