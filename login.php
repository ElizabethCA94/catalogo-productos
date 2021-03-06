<?php include("db.php"); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Catálogo de productos</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c12e9cff2f.js" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        #formularioLog {
        width: 70%;
        background-color: rgb(179, 206, 211);
        margin-top: 5%;}
    </style>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4"></h5>
                <span class="text-muted"></span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="index.php">Catálogo de productos</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="card mx-auto" id="formularioLog">
            <div class="card-header">
                <h3> Inicio de sesión </h3>
            </div>
            <div class="card-body">
                <form action="validarlogin.php" method="POST">
                    <div class="mb-3">
                        <label>Usuario</label>
                            <input class="form-control" placeholder="Ingrese su usuario" name="usuario">
                            <div id="emailHelp" class="form-text">No compartiremos tu informacion con nadie más</div>
                    </div>
                    <div class="mb-3">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" name="contraseña">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Mantener sesión iniciada</label>
                    </div>
                    <div class="form-group text-center">
                            <a href="index.php"><button type="submit" class="btn btn-primary btn-md">Iniciar sesión</button></a>
                            <a href="registro.html" class="text-info">¿No tiene cuenta? Registrate, aquí.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>