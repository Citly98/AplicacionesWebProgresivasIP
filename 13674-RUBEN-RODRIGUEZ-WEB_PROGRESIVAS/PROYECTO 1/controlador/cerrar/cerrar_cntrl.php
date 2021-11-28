<?php 
session_start();

unset($_SESSION['tipo_usuario']);
unset($_SESSION['nombre_general']);

exit (json_encode([
    "status"=> "1"
]))
?>

