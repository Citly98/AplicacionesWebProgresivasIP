<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
<?php

include("../menu/top.php");
session_start();
?>
<p class="text-primary"><h3><?php echo $_SESSION['nombre_general']?></h3></p>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
        <form class="d-flex">
                <input id="busca" class="form-control me-sm-2" type="text" placeholder="Buscar">
                <button type="submit" onclick="buscador()" class="btn btn-success">Buscar</button>
        </form>
    </div>
</div>
</div>
<div class="alert alert-dismissible alert-danger fade" id="campo_vacio" style="position: fixed; top: 50%; right: 43%; z-index: 10000;">
        <p id="msg_vacio"></p>
</div>








<?php
include("../menu/modal_cerrar.php");
?>


<?php
include("../menu/bot.php");
?>


