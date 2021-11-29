<?php
session_start();

if($_SESSION['tipo_usuario'] == "alumno"){
    echo '
    
    
      
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