<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTSC <?php echo date("d-m-Y"); ?></title>
    <link href="configuraciones/css/purple.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"> <img src="../configuraciones/imagenes/corte.png" alt="" width="50" height="34">Estetica Lucy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            
        </div>
    </nav>











    <div class="container p-5 my-5 text-white opacity: .5;">
        <div class="card-group">
            <div class="card border" style="margin-right: 5px;">
                <center>
                    <img src="configuraciones/imagenes/usuario.png" style="width: 30%;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Login Usuario</h5>
                        <p><button data-bs-toggle="modal" data-bs-target="#modal_login_user"
                                class="btn btn-info">Ingresar</button></p>

                    </div>
                </center>
            </div>
            <div class="card border">
                <center>
                    <img src="configuraciones/imagenes/administrador.png" style="width: 30%;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Login Administrador</h5>
                        <p><button data-bs-toggle="modal" data-bs-target="#modal_login_admin"
                                class="btn btn-info">Ingresar</button></p>
                    </div>
                </center>
            </div>
        </div>
    </div>



    <!-- The Modal -->
    <div class="modal fade" id="modal_login_user">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login Usuario</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user">Usuario:</label>
                        <input type="text" class="form-control" placeholder="INGRESE USUARIO" id="user">
                    </div>
                    <div class="form-group">
                        <label for="user_password">Contraseña:</label>
                        <input type="password" class="form-control" placeholder="INGRESE CONTRASEÑA" id="user_password">
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" onclick="login_usuario()" class="btn btn-info">Ingresar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- The Modal administrador-->
    <div class="modal fade" id="modal_login_admin">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login Administrador</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="admin">Usuario:</label>
                        <input type="text" class="form-control" placeholder="INGRESE USUARIO" id="admin">
                    </div>
                    <div class="form-group">
                        <label for="admin_password">Contraseña:</label>
                        <input type="password" class="form-control" placeholder="INGRESE CONTRASEÑA" id="admin_password">
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="submit" onclick="login_admin()" class="btn btn-info">Ingresar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <div class="alert alert-dismissible alert-danger fade" id="error_alert" style="position: fixed; top: 8%; right: 0; z-index: 10000;">
    
   <p id="msg_error"></p>
</div>


<div class="alert alert-dismissible alert-success fade" id="success_alert" style="position: fixed; top: 8%; right: 0; z-index: 10000;">
<p id="msg_success"></p>
</div>




    <!-- COSAS QUE NO DEBEN HACER EN SU VIDA
<input type="text" name="" id="contrasena">
<input type="text" id="contrasena">
<button type="button" class="btn btn-primary" onclick="mostrar()">Mostrar</button>
-->
    <script src="configuraciones/js/login/login.js"></script>

    <script src="configuraciones/js/acciones/alerts.js"></script>
</body>

</html>