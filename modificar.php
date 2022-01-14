<?php

    include ("db.php");

    if(isset($_GET['codigo'])){
        $codigo= $_GET['codigo'];
        $query = "SELECT * FROM productos WHERE codigo=$codigo";
        $resultado = mysqli_query($conn, $query);
        if(mysqli_num_rows($resultado)==1){
            $row = mysqli_fetch_array($resultado);
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
        }

    }

    if(isset($_POST['modificar'])){
        $codigo = $_GET['codigo'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];

        $query = "UPDATE productos set nombre = '$nombre', descripcion='$descripcion' WHERE codigo=$codigo";
        mysqli_query($conn, $query);

        $_SESSION['mensaje'] = 'Producto modificado con éxito';
        header("Location: index.php");
    }

?>

<?php include("includes/header_footer.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="modificar.php?codigo=<?php echo $_GET['codigo']; ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Mofica el nombre">
                </div>
                <div class="form-group">
                    <textarea name="descripcion" rows="2" class="form-control" placeholder="Modifica la descripcion"><?php echo $descripcion; ?>
                    </textarea>
                </div>
                <button class="btn btn-success" name="modificar">
                Modificar
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
