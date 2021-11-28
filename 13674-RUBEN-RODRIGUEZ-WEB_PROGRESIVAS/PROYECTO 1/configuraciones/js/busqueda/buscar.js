function buscador() {
    alert(document.getElementById('busca').value);
    if (document.getElementById('busca').value == "") {
        msg_vacio();
    } else {
        var datos = new FormData();
        datos.append("numero", $(document.getElementById('busca').value));

        $.ajax({
            url: "cerrar",
            type: 'POST',
            processData: false,
            contentType: false,
            data: datos,
            success: function(resp) {
                var resultado = JSON.parse(resp);
                console.log("numero " + resultado.numero);
                console.log(resultado.monto);
                console.log(resultado.sub);
                console.log(resultado.mes);
                console.log(resultado.puntos);

                if (resultado.status == 1) {} else {
                    var msg = resultado.mensaje;
                    msg_error(msg);
                    borrar_datos()
                }
            }
        });
    }
}

function borrar_datos() {
    document.getElementById('busca').value = "";
}

function msg_error(msg) {
    document.getElementById("msg_error").innerHTML = msg;
    $('#error_alert').addClass('show');
    setTimeout(function() {
        $('#error_alert').attr("class", "alert alert-dismissible alert-danger fade");
    }, 1500)
}

function msg_vacio() {
    document.getElementById("msg_vacio").innerHTML = "campo vacio";
    $('#campo_vacio').addClass('show');
    setTimeout(function() {
        $('#campo_vacio').attr("class", "alert alert-dismissible alert-danger fade");
    }, 5000)
}