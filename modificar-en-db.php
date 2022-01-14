<?php

include("db.php");
include("includes/header_footer.html");


if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
    $query = "SELECT * FROM productos WHERE codigo = $codigo";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $codigo = $row['codigo'];
        $nombre = $row['nombre'];
        $descripcion = $row['descripcion'];
        $cantidad = $row['cantidad'];
        $precio = $row['precio'];
    }
}


if (isset($_POST['modificar'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $query = "UPDATE productos set nombre = '$nombre', descripcion ='$descripcion', cantidad = $cantidad, precio = $precio WHERE codigo=$codigo";
    mysqli_query($conn, $query);
    if (!$result) {
        $_SESSION['mensaje'] = 'Producto no se puede modificar';
        $_SESSION['tipo_mensaje'] = "danger";
        die("Falló consulta.");
    } else {
        $_SESSION['mensaje'] = 'Producto modificado con éxito';
        $_SESSION['tipo_mensaje'] = "success";
    }
    header("Location: modificar.php");

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
    <!--- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body style="background-color: rgb(203, 231, 236);">
<div class="container p-4">
    <div class="row">
        <div class="col-md-10">
            <?php if (isset($_SESSION['mensaje'])) { ?>
                <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['mensaje']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();
            } ?>
            <h5>Modificar producto</h5>
            <div class="card card-body">
                <form action="modificar-en-db.php?codigo=<?php echo $_GET['codigo']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" class="form-control"><?php echo $descripcion; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="cantidad" class="form-control"><?php echo $cantidad; ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="precio" class="form-control"><?php echo $precio; ?></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="modificar" value="Modificar">
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>