<?php include("db.php"); ?>
<?php include("includes/header_footer.html"); ?>
<?php
    if (isset($_POST['guardar'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $archivo = $_FILES['archivo']['name'];
        if (isset($archivo) && $archivo != "") {
            $tipo = $_FILES['archivo']['type'];
            $tamano = $_FILES['archivo']['size'];
            $temp = $_FILES['archivo']['tmp_name'];
            move_uploaded_file($temp, 'img/'.$archivo);
        }
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $query = "INSERT INTO productos(nombre, descripcion, imagen, cantidad, precio) VALUES('$nombre', '$descripcion', '$archivo', $cantidad, $precio)";
        $resultado = mysqli_query($conn, $query);
        if (!$resultado) {
            $_SESSION['mensaje'] = "No se pudo guardar";
            $_SESSION['tipo_mensaje'] = "danger";
        } else {
            $_SESSION['mensaje'] = "Producto guardado";
            $_SESSION['tipo_mensaje'] = "success";
        }
        
        header("Location: guardar.php");
    }
?>