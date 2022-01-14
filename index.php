<?php include("db.php"); ?>
<?php include("includes/header_footer.php"); ?>

<div class="container p-4">

  <div class="row">

    <div class="col-md-4">

    <?php if(isset($_SESSION['mensaje'])){ ?>
      <div class="alert alert-success" role="alert">
      <?= $_SESSION['mensaje'] ?> 
    </div>
    <?php session_unset(); } ?>

      <h5>Registrar producto</h5>
      <div class="card card-body">
        <form action="guardar.php" method="POST">
          <div class="form-group">
            <p>Nombre del producto</p>
            <input type="text" name="nombre" class="form-control" placeholder="Ej: Guitarra" autofocus>
          </div>
          <div class="form-group">
          <p>Descripcion del producto</p>
            <textarea name="descripcion" rows="2" class="form-control" placeholder="Ingresa la descripcion del producto"></textarea>
          </div>
          <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
        </form>
      </div>

  </div>
  <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
              <th>Producto</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Fecha de creacion</th>
              <th>Otras acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM productos";
          $resultado = mysqli_query($conn, $query);

          while($row = mysqli_fetch_array($resultado)) { ?>
            <tr>
              <td><?php echo $row['imagen'] ?></td>
              <td><?php echo $row['nombre'] ?></td>
              <td><?php echo $row['descripcion'] ?></td>
              <td><?php echo $row['fechaCreacion'] ?></td>
              <td>
                <a href="modificar.php?codigo=<?php echo $row['codigo']?>" class="btn btn-secondary">
                 <i class="fas fa-marker"></i> 
                </a>

                <a href="eliminar.php?codigo=<?php echo $row['codigo']?>" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
                 </a>

              </td>


            </tr>


          <?php } ?>
        </tbody>
      </table>


  </div>

</div>
</div>
















