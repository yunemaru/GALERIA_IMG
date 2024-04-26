<?php
$servidor = "localhost";
$usuariosdb = "root";
$passdb = "123456";
$db = "galeria";

$usuario = $_POST["user"];
$contrasena = $_POST ["pass"];
$email = $_POST ["email"];

$conexion = mysqli_connect($servidor, $usuario, $passbd, $db );

$consulta = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$usuario', '$email', '$contrasena') ";
if(mysqli_qiery($conexion, $consulta)){
    echo "Usuario registrado";
}
mysqli_close ($conexion);

?>