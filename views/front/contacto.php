<?php 
include ('templates/head.php')
?>

<h1 class="titulo1"> Formulario de contacto</h1>
<form action="" class="formularios">

<h2 class="titulo2"> Contacto</h2>
<div class="contenedor-inputs">
  
  <input type="text" name="nombre" placeholder="Nombre completo" class="input-100 input-for" required>

  <input type="email" name="correo" placeholder="Correo electronico" class="input-100 input-for" required>
  
  <input type="text" name="telefono" placeholder="Telefono" class="input-100 input-for" required>
  
  <textarea class="mensaje" name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>

  <input type="submit" value="Enviar" class="btn">

 </div>
</form>


<?php 
include ('templates/foot.php')
?>
