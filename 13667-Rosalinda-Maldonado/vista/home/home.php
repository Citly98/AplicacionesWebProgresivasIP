<?php
session_start();

include("../menu/top.php");
?>


<h1>Bienvenido a Home,  <?php echo $_SESSION['tipo_usuario'];?></h1>

<br>


<a href="pag_2" class="btn btn-outline-secondary">ABRIR 2A PAGINA</a>












<?php
include("../menu/bot.php");
?>
