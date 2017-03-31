<?php
include 'cn.php';
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$insertar = "INSERT INTO registrartable (nombre, apellidos, correo, usuario, clave, telefono) VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$clave')";

$resultado = mysqli-query($conexion, $insertar);
if (!$resultado) {
    echo 'Error al registrarse';
} else {
    echo 'Usuario registrado exitosamente';
}
mysqli_close($conexion);
