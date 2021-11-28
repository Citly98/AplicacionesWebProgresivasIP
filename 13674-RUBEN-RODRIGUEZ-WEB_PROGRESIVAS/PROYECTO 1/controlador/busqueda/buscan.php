<?php
session_start();
include("../../modelo/mdl_busqueda.php");
$obj = new class_buscar);

if(isset($_POST['buscar'])){  
$buscar = $_POST['buscar'];
$query = "SELECT * FROM preca WHERE nssPr='$buscar'";
$resultado = $obj -> buscar($query);
if(empty($resultado)){
    $mensaje = "NO SE ENCUENTRA EN BASE";
    exit(json_encode([
        "status" => "2",
        "mensaje" => $mensaje
    ]));
}else{
    foreach($resultado as $r){
        $numero = $r['nssPr'];
        $monto = $r['montoAContarPr'];
        $sub = $r['saldoSubPr'];
        $mes = $r['mensualidadPr'];
        $puntos = $r['puntosPr'];
    }
    $mensaje = "NUMERO CORRECTO!!!";
    exit(json_encode([
        "status" => "1",
        "mensaje" => $mensaje,
        "numero" => $numero,
        "monto" => $monto,
        "sub" => $sub,
        "mes" => $mes,
        "puntos" => $puntos]
    ]));
}
}
?>