<?php

include 'mdl_conexion.php';

class pedido{

    private $db; //database
    private $lista;

    public function __construct(){
        $this->db = conexion::con();
        $this->arraydb = array();
     }


     public function pedidos(){
         $resultado = $this->db->query("SELECT * FROM usuarios");
         while($filas = $resultado->fetch_assoc()){
                $this->lista[] = $filas;
         }
         return $this->lista;
     }
}

?>