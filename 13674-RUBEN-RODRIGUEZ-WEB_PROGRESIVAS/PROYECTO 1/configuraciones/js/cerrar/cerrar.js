function cerrar() {


    $.ajax({
        url: "ctrl_cerrar",
        type: "POST",
        processData: false,
        contentType: false,
        data: "ok=" + "ok",
        success: function(resp) {
            var respuesta = JSON.parse(resp);
            console.log(respuesta.status);
            if (respuesta.status == "1") {
                window.location.replace("inicio");
                console.log(respuesta);
            }
        }
    })

}