<?php include("db.php"); ?>
<?php include("includes/header_footer.html"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Catálogo de productos</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/c12e9cff2f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body style="background-color: rgb(203, 231, 236);">
  <div class="container p-4" >
      <h4 style="text-align: center">¡BIENVENID@S! Conozcan nuestro catálogo de productos musicales a continuación:</h4>
      <?php
      $query = "SELECT * FROM productos";
      $resultado = mysqli_query($conn, $query);

      while ($row = mysqli_fetch_array($resultado)) { ?>
        <div class="productos">
          <div class="row">
            <div class="col-xs-10 col-sm-6 col-md-4 product">
              <div class="card">
                <img src="img/<?= $row['imagen'] ?>" alt=""/>
                <h3><?php echo $row['nombre'] ?></h3>
                <h7><?php echo $row['cantidad'] ?></h7>
                <h7><?php echo '$', $row['precio'] ?></h7>
                <h7><p><?php echo $row['descripcion'] ?></p></h7>
                <div class="product-actions">
                  <a href="modificar-en-db.php?codigo=<?php echo $row['codigo'] ?>" class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                  </a>
                  <a href="eliminar-en-db.php?codigo=<?php echo $row['codigo'] ?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
  </div>
</body>
<html>