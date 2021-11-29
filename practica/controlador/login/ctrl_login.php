<?php
     session_start();
     include("../../modelo/mdl_login.php");
$obj = new class_login(); //Variable global

if(isset($_POST['usuario'])){
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$query = "SELECT * FROM usuarios WHERE usuario_nombre ='$usuario' AND usuario_contrasena ='$contrasena'";
$resultado = $obj -> login($query);
if(empty($resultado)){
	$mensaje = "Usuario o contraseña incorrectos";
	exit(json_encode([
		"status" => "2",
		"mensaje" => $mensaje
	]));
}else{
	$mensaje = "Usuario correcto";
	$_SESSION['tipo_usuario'] = "alumno";
	exit(json_encode([
		"status" => "1",
		"mensaje" => $mensaje
	]));
}
}
?>