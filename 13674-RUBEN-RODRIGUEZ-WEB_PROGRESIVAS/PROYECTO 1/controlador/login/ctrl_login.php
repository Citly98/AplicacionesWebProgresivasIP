<?php
session_start();
include("../../modelo/mdl_login.php");
$obj = new class_login();

if(isset($_POST['usuario'])){  
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$query = "SELECT * FROM usuarios WHERE correoUs='$usuario' AND contrsenaUs ='$contrasena'";
$resultado = $obj -> login($query);
if(empty($resultado)){
    $mensaje = "USUARIO Y/O CONTRASEÑA INCORRECTOS";
    exit(json_encode([
        "status" => "2",
        "mensaje" => $mensaje
    ]));
}else{
    foreach($resultado as $r){
        $nombre = $r['nombreUs'];
        $id = $r['idUs'];
        $rol = $r['nivelUs'];
    }
    $mensaje = "USUARIO CORRECTO!!!";
    $_SESSION['tipo_usuario'] = "$rol";
    $_SESSION['nombre_general'] = "$nombre";
    exit(json_encode([
        "status" => "1",
        "mensaje" => $mensaje,
        "rol" => $rol,
        "nombre" => $_SESSION['nombre_general']
    ]));
}
}
?>