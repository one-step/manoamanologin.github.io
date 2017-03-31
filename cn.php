<?php
$conexion = mysgl_connect("http://manoamanologin.ml","root", "","registrar");
if (!$connexion){
    echo 'error al conectar a la base de datos';
}
else {
    echo 'Conectado a la base de datos'
}
    ?>
