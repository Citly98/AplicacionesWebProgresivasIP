<?php
session_start();
include("../../modelo/mdl_login.php");
$obj = new class_login();//variable global que puede utlizarse para todas las sesiones

if(isset($_POST['usuario'])){
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$query = "SELECT * FROM usuarios WHERE usuario_correo='$usuario' AND usuario_contrasena ='$contrasena'";
$resultado = $obj -> login($query);
if(empty($resultado)){
    $mensaje = "usuario y contraseña incorrectos";
    exit(json_encode([
        "status" => "2",
        "mensaje" => $mensaje
    ]));
}else{//si se cumple entre usuario
    $mensaje = "has ingresado con el usuario correcto!!!";
    foreach($resultado as $r){
        $_SESSION['tipo_usuario'] = $r['usuario_nivel'];
    }
    $_SESSION['login'] = "ok";
    exit(json_encode([
        "status" => "1",
        "mensaje" => $mensaje 
    ]));
}
}
?>