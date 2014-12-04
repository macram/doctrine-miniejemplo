<?php
	if (!empty($_GET)) {	
		if ($_GET['id_dep']!="") $departamento = $entityManager->find('Departamento',$_GET['id_dep']);
	}
?>
<h1>Inserción de departamentos</h1>
<form role="form" method="POST" action="insertar_dep.php">
  <div class="form-group">
    <label for="inputNombre">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Nombre del departamento" required
		<?php
			if (isset($departamento)) echo 'value="'.$departamento->getNombre().'"';
		?>
	>
  </div>
  <div class="form-group">
    <label for="inputDirector">Director</label>
    <input type="text" class="form-control" id="inputDirector" name="inputDirector" placeholder="Director del departamento" required
		<?php
			if (isset($departamento)) echo 'value="'.$departamento->getDirector()->getNombre().'"';
		?>	
	>
  </div>
  <?php
	echo '<input type="hidden" name="id_dep" value="'.$_GET['id_dep'].'" />';
  ?>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="reset" class="btn btn-default">Borrar</button>
</form>