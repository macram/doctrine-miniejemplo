<?php 
$empleados = $entityManager->getRepository('Empleado')->findAll();

echo "<h1>Lista de empleados</h1>";
echo "<table class=\"table\ table-striped\">";
echo "<tr><th style='padding:0px 15px 0px 0px;'>Id</th><th style='padding:0px 15px 0px 0px;'>Nombre</th><th style='padding:0px 15px 0px 0px;'>Dirección</th><th style='padding:0px 15px 0px 0px;'>Sueldo</th><th></th></tr><tbody>";

foreach ($empleados as $empleado)
{
	echo "<tr>";
	echo "<td style='padding:0px 15px 0px 0px;'>".$empleado->getId()."</td>";
	echo "<td style='padding:0px 15px 0px 0px;'>".$empleado->getNombre()."</td>";
	echo "<td style='padding:0px 15px 0px 0px;'>".$empleado->getDireccion()."</td>";
	echo "<td style='padding:0px 15px 0px 0px;'>".$empleado->getSueldo()."</td>";
	echo "<td><a class=\"btn btn-success\" href=\"index.php?id=".$empleado->getId()."\">Editar</a><a class=\"btn btn-danger\" href=\"borrar.php?id=".$empleado->getId()."\">Borrar</a></td>";
	echo "</tr>";
}
echo "</tbody></table>";