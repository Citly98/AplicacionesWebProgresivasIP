<?php
session_start();

if($_SESSION['tipo_usuario'] == "1"){
    echo '
    
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarColor01" >
        <li class="nav-item">
          <a class="nav-link" href="#">Ver usuarios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Alta</a>
            <a class="dropdown-item" href="#">Modificar</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Eliminar</a>
          </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cerrar" href="#">Salir</a>
        </li>
        </div>
     </div> 
  
        ';
        
} else{
    echo '
    
    <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarColor01">
        <li class="nav-item">
          <a class="nav-link" href="#"> Inicio
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mis Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cerrar" href="#">Salir</a>
        </li>
    </div>
    </div>  
  
    ';
}
?>