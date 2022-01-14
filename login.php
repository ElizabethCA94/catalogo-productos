<?php include("db.php"); ?>
<?php include("includes/header_footer.php"); ?>
<body>
    <style>
        #formularioLog{
            width: 40%;
            background-color: rgb(223, 171, 75);
            margin-top: 5%;
        }
    </style>
   
    <div class="container">
        <div class= "card mx-auto" id="formularioLog">
            <div class="card-header">
                <h3> Inicio de sesión </h3>
            </div>
                <div class="card-body">
                    <form action="validarlogin.php" method="POST">
                        <div class="mb-3">
                            <p>Usuario <input type="email" class= "form-control" placeholder="Ingrese su usuario" name="usuario" aria-describedby="emailHelp"></p>
                            <div id="emailHelp" class="form-text">No compartiremos tu informacion con nadie más</div>
                        </div>
                        <div class="mb-3">
                            <p>Contraseña<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña" name="contraseña"></p>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Mantener sesión iniciada</label>
                        </div>
                        <a href = "index.php"><button  type="submit" class="btn btn-success" >Enviar</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>