<?php

include("db.php");

if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO productos(nombre, descripcion) VALUES('$nombre', '$descripcion')";
    $resultado =mysqli_query($conn, $query);
    if(!$resultado){
        die("Falló");
    }

    $_SESSION['mensaje'] = 'Producto guardado con exito';

    header("Location: index.php");
    
}
?>
