<?php 
include ('templates/head.php')
?>

<h1 class="titulo1"> Formulario de registro</h1>
<form action="" class="formularios">

<h2 class="titulo2"> Crea una cuenta</h2>
<div class="contenedor-inputs">
  <fieldset class="datos">
    <br>
     <legend>Datos personales:</legend>
  <input type="text" name="nombre" placeholder="Nombre completo" class="input-50 input-for" required>
  
  <select name="genero" class="input-50 select-for" required>
  <option value="genero" selected>Genero</option>
  <option value="">Mujer</option>
  <option value="">Hombre</option>
  </select>

  <select name="tipo de documento" class="input-50 select-for" required>
  <option value="tipo" selected>Tipo de documento</option>
  <option value="">CC</option>
  <option value="">TI</option>
  </select>

  <input type="text" name="documento" placeholder="Numero de documento" class="input-50 input-for" required>

  <input type="text" name="direccion" placeholder="Dia/mes/año" class="input-100 input-for" required>
 </fieldset>

 <fieldset class="academico">
  <br>
  <legend>Datos academicos:</legend>
  <select name="tipo usuario" class="input-50 select-for" required>
  <option value="usuario" selected>Tipo de usuario</option>
  <option value="">Aprendiz</option>
  <option value="">Instructor</option>
  <option value="">Coordinador</option>
  </select>



  <select name="area formacion" class="input-50 select-for" required>
  <option value="formacion" selected>Area de formación</option>
  <option value="">Diseño</option>
  <option value="">....</option>
  </select>

  <select name="area conocimiento" class="input-100 select-for" required>
  <option value="conocimiento" selected>Area de conocimiento</option>
  <option value="">Diseño</option>
  <option value="">....</option>
  </select>
</fieldset>

  <fieldset class="ubicacion">
    <br>
    <legend>Ubicacion Usuario:</legend>
  <select name="pais" class="input-50 select-for" required>
  <option value="pais" selected>Pais</option>
  <option value="">Colombia</option>
  <option value="">....</option>
  </select>

  <select name="departamento" class="input-50 select-for" required>
  <option value="departamento" selected>Departamento</option>
  <option value="">Putumayo</option>
  <option value="">....</option>
  </select>

  <select name="ciudad" class="input-50 select-for" required>
  <option value="ciudad" selected>Ciudad</option>
  <option value="">Mocoa</option>
  <option value="">....</option>
  </select>

  <select name="comuna" class="input-50 select-for" required>
  <option value="comuna" selected>Comuna</option>
  <option value="">....</option>
  <option value="">....</option>
  </select>

  <select name="barrio" class="input-50 select-for" required>
  <option value="barrio" selected>Barrio</option>
  <option value="">Luis Carlos Galan</option>
  <option value="">....</option>
  </select>

  <select name="corregimiento" class="input-50 select-for" required>
  <option value="corregimiento" selected>Corregimiento</option>
  <option value="">....</option>
  <option value="">....</option>
  </select>

  <select name="vereda" class="input-50 select-for" required>
  <option value="vereda" selected>Vereda</option>
  <option value="">Planadas</option>
  <option value="">....</option>
  </select>
  </fieldset>

<fieldset class="contacto">
  <br>
  <legend>Contacto Usuario:</legend>
<input type="text" name="direccion" placeholder="Direccion" class="input-50 input-for" required>

<input type="text" name="celular" placeholder="Celular" class="input-50 input-for" required>

<input type="text" name="telefono" placeholder="Telefono" class="input-50 input-for" required>
</fieldset>

<input type="email" name="correo" placeholder="Correo electronico" class="input-100 input-for email" required>

<input type="password" name="password" placeholder="Contraseña" class="input-100 input-for" required>
<input type="password" name="password" placeholder="Confirmar Contraseña" class="input-100 input-for" required>

<input type="submit" value="Registrarse" class="btn">
<p class="link">¿Ya tienes una cuenta? <a href="#"> Ingresa aqui</a></p>

</div>

</form>


<?php 
include ('templates/foot.php')
?>






