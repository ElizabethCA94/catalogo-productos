<?php include("db.php"); ?>
<?php include("includes/header_footer.html"); ?>

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
<body>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['mensaje'])) {?>
                <div class="alert alert-<?= $_SESSION['tipo_mensaje'];?> alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['mensaje'];?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();}?>
            <h5>Registrar producto</h5>
            <div class="card card-body">
                <form action="guardar-en-db.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label>Nombre del producto
                            <input type="text" name="nombre" class="form-control" placeholder="Ej: Guitarra" require>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label>Descripcion del producto
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Ingresa la descripcion del producto" require></textarea>
                        <label>
                    </div>
                    <div class="mb-3">
                        <label>Cantidad del producto
                        <input type="number" min="0" max="10000" step="1" name="cantidad" class="form-control" placeholder="Ingresa la cantidad del producto" require>
                        <label>
                    </div>
                    <div class="mb-3">
                        <label for="currency-field">Precio del producto
                        <input type="number" min="1" max="500000000" step="1" name="precio" class="form-control" placeholder="Ingresa el precio del producto" require>
                        <label>
                    </div>
                    <div class="mb-3">
                        <label for="archivo" class="form-label">Foto:
                        <input type="file" id="archivo" name="archivo" step="any" class="form-control" require>
                        <label>                 
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Imagen del producto</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Fecha de creacion</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM productos";
                    $resultado = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($resultado)) { ?>
                        <tr>
                            <td><img src="img/<?= $row['imagen'] ?>" alt=""/></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['descripcion'] ?></td>
                            <td><?php echo $row['fechaCreacion'] ?></td>
                            <td><?php echo $row['cantidad'] ?></td>
                            <td><?php echo '$', $row['precio'] ?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="validar.js"></script>
</body>
</html>
