$(document).ready(function() {
    //esto es para ejecutar las alertas dentro del navegador 
    Notification.requestPermission(function(permission) {
        if (Notification.permission === "granted") {
            var options = {
                body: "Descripción o cuerpo de la notificación",
                icon: "configuraciones/imagenes/negro.jpgimagenes/negro.jpg",
                dir: "ltr"
            };
            var notification = new Notification("Hola dame permisos)", options);
        } else {
            Notification.requestPermission(function(permission) {
                if (Notification.permission === "granted") {
                    alerta();
                }
            });
        }
    });


    if (Notification.permission === "granted") {
        alert("alertas activadas")
    } else {
        alert("alertas desactivadas")
    }
});

function alerta() {
    var options = {
        body: "hola soy la notificacion",
        icon: "configuraciones/imagenes/negro.jpgimagenes/negro.jpg",
        dir: "ltr"
    };
    var notification = new Notification("soy la notificacion:)", options);
}