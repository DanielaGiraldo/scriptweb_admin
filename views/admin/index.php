<?php 
include ('templates/head.php')
?>

<section class="section-top">
<div class="div-search">
<input type="search" class="input-search" placeholder="Buscar">
</div>
<div class="perfil" >
<img src="http://localhost/adminscript/public/images/perfil.png" class="img">
</div>



<div class="formulario">
 <label class="color" for="country">Tipo de Usuario</label>
      <select class="select-admin" id="usuario" name="usuario">
      <option value="australia">Aprendices</option>
      <option value="canada">Instructores</option>
      <option value="usa">Cordinares</option> 
      </select>

  <label class="color">Nombre</label>
  <input class="input-admin" type="text" id="" name="" placeholder="Nombre..">

  <label class="color">Proyecto</label>
  <input class="input-admin" type="text" id="" name="" placeholder="Proyecto..">

  <label class="color">Categoria</label>
  <input class="input-admin" type="text" id="" name="" placeholder="Categoria..">

  <input class="btn-admin" type="submit" value="Subir">

</form>
</div>
</section>

<section class="section-grap">
	<img src="http://localhost/adminscript/public/images/grafica2.png" class="grafica">

<article class="div">
<input class="input-admin"type="text" id="" name="" placeholder="Ingresar ..">
<input class="input-admin"type="text" id="" name="" placeholder="Ingresar ..">
<input class="input-admin"type="text" id="" name="" placeholder="Ingresar ..">
<input class="input-admin"type="text" id="" name="" placeholder="Ingresar ..">
</article>

<div class="estrellas">
	<a href="#" data-value="1" title="Votar con 1">&#9673;</a>
	<a href="#" data-value="2" title="Votar con 2">&#9673;</a>
	<a href="#" data-value="3" title="Votar con 3">&#9673;</a>
	<a href="#" data-value="4" title="Votar con 4">&#9673;</a>
	<a href="#" data-value="5" title="Votar con 5">&#9673;</a>
</div>

</section>

<?php 
include ('templates/foot.php')
?>