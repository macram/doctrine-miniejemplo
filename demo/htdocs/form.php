<?php
	if (!empty($_GET)) {	
		$empleado = $entityManager->find('Empleado',$_GET['id']);
	}
?>
<h1>Inserción de empleados</h1>
<form role="form" method="POST" action="insertar.php">
  <div class="form-group">
    <label for="inputNombre">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Nombre del empleado" required
		<?php
			if (isset($empleado)) echo 'value="'.$empleado->getNombre().'"';
		?>
	>
  </div>
  <div class="form-group">
    <label for="inputDireccion">Dirección</label>
    <input type="text" class="form-control" id="inputDireccion" name="inputDireccion" placeholder="Dirección del empleado" required
		<?php
			if (isset($empleado)) echo 'value="'.$empleado->getDireccion().'"';
		?>	
	>
  </div>
  <div class="form-group">
    <label for="inputSueldo">Sueldo</label>
    <input type="text" class="form-control" id="inputSueldo" name="inputSueldo" placeholder="Sueldo del empleado" required
		<?php
			if (isset($empleado)) echo 'value="'.$empleado->getSueldo().'"';
		?>
	>
  </div>
  <?php
	echo '<input type="hidden" name="id" value="'.$_GET['id'].'" />';
  ?>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="reset" class="btn btn-default">Borrar</button>
</form>