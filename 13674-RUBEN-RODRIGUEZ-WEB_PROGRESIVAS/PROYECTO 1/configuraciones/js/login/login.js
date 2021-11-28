function login_usuario(tip) {
    var tip = tip;
    if ($('#user').val() == "" && $('#admin').val() == "") {
        var msg = "CAMPO USUARIO VACIO";
        msg_error(msg);
    } else if ($('#user_password').val() == "" && $('#admin_password').val() == "") {
        var msg = "CAMPO CONTRASEÑA VACIO";
        msg_error(msg);
    } else {

        if (tip == 2) {
            var datos = new FormData();
            datos.append("usuario", $('#user').val());
            datos.append("contrasena", $('#user_password').val());
        } else {
            var datos = new FormData();
            datos.append("usuario", $('#admin').val());
            datos.append("contrasena", $('#admin_password').val());
        }

        $.ajax({
            url: "ctrl_login",
            type: 'POST',
            processData: false,
            contentType: false,
            data: datos,
            success: function(resp) {
                var resultado = JSON.parse(resp);
                console.log("rol " + resultado.rol);
                console.log(tip);
                console.log(resultado.nombre);

                if (resultado.status == 1) {
                    if (resultado.rol != tip) {
                        msg_no_privilegio("NO CUENTAS CON PRIVILEGIOS PARA INGRESAR A ESTA SECCION");
                        borrar_datos()
                    } else {
                        var msg = resultado.mensaje;
                        var url = resultado.url;
                        msg_success( /*msg,*/ url);
                        borrar_datos()
                    }

                } else {
                    var msg = resultado.mensaje;
                    msg_error(msg);
                    borrar_datos()
                }
            }
        });
    }
}

function cerrar() {
    /*document.getElementById('user').value = "";
    document.getElementById('contrasena').value = "";*/
    document.getElementById('user').value = "";
    document.getElementById('user_password').value = "";
    document.getElementById('admin').value = "";
    document.getElementById('admin_password').value = "";
    $('#modal_form_usuario').modal('hide');
}

function msg_success(msg, url) {
    /*document.getElementById("msg_success").innerHTML = msg;
    $('#success_alert').addClass('show');*/
    setTimeout(function() {
        $('#success_alert').attr("class", "alert alert-dismissible alert-success fade");
        location.replace("home");
    }, 1500)
}

function msg_error(msg) {
    document.getElementById("msg_error").innerHTML = msg;
    $('#error_alert').addClass('show');
    setTimeout(function() {
        $('#error_alert').attr("class", "alert alert-dismissible alert-danger fade");
    }, 1500)
}

function msg_no_privilegio(msg) {
    document.getElementById("msg_no_privilegio").innerHTML = msg;
    $('#no_privilegio_alert').addClass('show');
    setTimeout(function() {
        $('#no_privilegio_alert').attr("class", "alert alert-dismissible alert-danger fade");
    }, 1500)
}

function borrar_datos() {
    document.getElementById('user').value = "";
    document.getElementById('user_password').value = "";
    $('#modal_login_user').modal('hide');
    document.getElementById('admin').value = "";
    document.getElementById('admin_password').value = "";
    $('#modal_login_admin').modal('hide');
}