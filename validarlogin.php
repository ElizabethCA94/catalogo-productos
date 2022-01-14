<?php 

include ("db.php");
$usuario =$_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$query= "SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado= mysqli_query($conn, $query);

$datos=mysqli_num_rows($resultado);

if($datos){
    header("Location: index.php");
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">Error de autenticacion</h1>
    <?php
}

