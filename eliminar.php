<?php

include("db.php");

if (isset($_GET['codigo'])){
    
    $codigo = $_GET['codigo'];
    $query = "DELETE FROM productos WHERE codigo=$codigo";
    $resultado = mysqli_query($conn, $query);
    if (!$resultado){
        die("Query Failed");
    }

    $_SESSION['mensaje']= 'Producto eliminado con éxito';
    header("Location: index.php");

    

}

?>
