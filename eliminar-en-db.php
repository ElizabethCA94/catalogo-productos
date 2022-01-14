<?php

include("db.php");

if (isset($_GET['codigo'])){
    $codigo = $_GET['codigo'];
    $query = "DELETE FROM productos WHERE codigo=$codigo";
    $result = mysqli_query($conn,$query);
    if (!$result) {
        $_SESSION['mensaje'] = "No se pudo eliminar";
        $_SESSION['tipo_mensaje'] = "danger";
        //die("Falló consulta.");
    }
    else{
        $_SESSION['mensaje'] = "Producto eliminado";
        $_SESSION['tipo_mensaje'] = "info";
    }
    
    header("Location: eliminar.php");

}


?>