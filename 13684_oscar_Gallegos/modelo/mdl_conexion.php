<?php
class conexion{
    public function connect_db(){
        $con = mysqli_connect("localhost:3307","root","root","proyectoutsc");
        $con -> set_charset("UTF8");
        return $con;
    }
}
?>