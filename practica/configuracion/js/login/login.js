function login_usuario() {
    if ($('#user').val() == "") {
        var msg = "Usuario vacio";
        msg_error(msg);
    } else if ($('#user_password').val() == "") {
        var msg = "Contraseña vacia";
        msg_error(msg);
    } else {
        var datos = new FormData();
        datos.append("usuario", $('#user').val());
        datos.append("contrasena", $('#user_password').val());
        $.ajax({
            url: "ctrl_login",
            type: 'POST',
            processData: false,
            contentType: false,
            data: datos,
            success: function(resp) {
                var resultado = JSON.parse(resp);
                if (resultado.status == 1) {
                    var msg = resultado.mensaje;
                    msg_success(msg);
                } else {
                    var msg = resultado.mensaje;
                    msg_error(msg);
                }
            }
        });
    }
}

function cerrar() {
    document.getElementById('user').value = "";
    document.getElementById('contrasena').value = "";
    $('#modal_form_usuario').modal('hide');
}

function msg_success(msg) {
    document.getElementById("msg_success").innerHTML =
        msg;
    $('#success_alert').addClass('show');
    setTimeout(function() {
        $('#success_alert').attr("class", "alert alert-dismissible alert-success fade");
    }, 2000)
}

function msg_error(msg) {
    document.getElementById("msg_error").innerHTML =
        msg;
    $('#error_alert').addClass('show');
    setTimeout(function() {
        $('#error_alert').attr("class", "alert alert-dismissible alert-danger fade");
    }, 2000)
}
//inicio funcion admin
function login_admin() {
    if ($('#admin').val() == "") {
        var msg = "Campo admin vacio";
        msg_error(msg);
    } else if ($('#admin_password').val() == "") {
        var msg = "Contraseña vacia";
        msg_error(msg);
    } else {
        var datos = new FormData();
        datos.append("usuario", $('#admin').val());
        datos.append("contrasena", $('#admin_password').val());
        $.ajax({
            url: "ctrl_login",
            type: 'POST',
            processData: false,
            contentType: false,
            data: datos,
            success: function(resp) {
                var resultado = JSON.parse(resp);
                if (resultado.status == 1) {
                    var msg = resultado.mensaje;
                    msg_success(msg);
                } else {
                    var msg = resultado.mensaje;
                    msg_error(msg);
                }
            }
        });
    }
}

function cerrar() {
    document.getElementById('user').value = "";
    document.getElementById('contrasena').value = "";
    $('#modal_form_admin').modal('hide');
}

function msg_success(msg) {
    document.getElementById("msg_success").innerHTML =
        msg;
    $('#success_alert').addClass('show');
    setTimeout(function() {
        $('#success_alert').attr("class", "alert alert-dismissible alert-success fade");
    }, 2000)
}

function msg_error(msg) {
    document.getElementById("msg_error").innerHTML =
        msg;
    $('#error_alert').addClass('show');
    setTimeout(function() {
        $('#error_alert').attr("class", "alert alert-dismissible alert-danger fade");
    }, 2000)
}