<?php

include("db.php");
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;

$query = $query = "INSERT INTO usuarios(usuario, contraseña) VALUES('$usuario', '$contraseña')";
$resultado = mysqli_query($conn, $query);

$datos = mysqli_num_rows($resultado);

if ($datos) {
    header("Location: login.php");
} else {
    header("Location: registro.php");
}

?>