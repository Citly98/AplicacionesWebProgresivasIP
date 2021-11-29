<?php

include ("../modelo/mostrar_pedido.php");
$obj = new pedido();
$resultado = $obj -> pedidos();

header('Content-type:application/xls');

header('Content-Disposition: attachment; filename=compras.xls');

while($row=mysqli_fetch_assoc($resultado))
?>








<div class="container">          
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        
        <th>Usuario</th>
        <th>Correo</th>
        <th>Contraseña</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($resultado as $r){ ?>
      <tr>      
        
        <td><?php echo $r['usuario_nombre'] ?></td>
        <td><?php echo $r['usuario_correo'] ?></td>
        <td>$<?php echo $r['usuario_contrasena'] ?></td>
        
         
        
      </tr>

            


      <?php } ?>
    </tbody>
  </table>
</div>





</div>




</body>
</html>