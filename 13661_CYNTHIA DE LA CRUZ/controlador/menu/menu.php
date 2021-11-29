<?php
session_start();

if($_SESSION['tipo_usuario'] == "alumno"){
    echo '
    <li class="nav-item">
          <a class="nav-link" href="home"> Bienvenida
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Citas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ubicaciòn</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fotos</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Cortes corto mujer</a>
            <a class="dropdown-item" href="#">Cortes largo mujer</a>
            <a class="dropdown-item" href="#">Cortes hombre</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
    ';
} else{
    echo '
    <li class="nav-item">
          <a class="nav-link" href="#"> PAGINA DE INICIO
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
    ';

}



?>