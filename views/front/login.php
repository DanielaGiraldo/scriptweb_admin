<?php 
include ('templates/head.php')
?>

<h1 class="titulo1"> Formulario Login</h1>
<form action="" class="formularios">

<h2 class="titulo2"> Ingresar</h2>
<div class="contenedor-inputs">
  
  <input type="email" name="correo" placeholder="Correo electronico" class="input-100 input-for" required>
  
  <input type="password" name="password" placeholder="Contraseña" class="input-100 input-for" required>
<p class="p_recordar">
				<input type="checkbox" name="recordar" class="recordar">Recordar contraseña</input>
			</p>

  <input type="submit" value="Ingresar" class="btn-login">

</div>

</form>


<?php 
include ('templates/foot.php')
?>


