<?php 
$departamentos = $entityManager->getRepository('Departamento')->findAll();

echo "<h1>Lista de departamentos</h1>";
echo "<table class=\"table\ table-striped\">";
echo "<tr><th style='padding:0px 15px 0px 0px;'>Id</th><th style='padding:0px 15px 0px 0px;'>Nombre</th><th style='padding:0px 15px 0px 0px;'>Director</th><th></th></tr><tbody>";

foreach ($departamentos as $departamento)
{
	echo "<tr>";
	echo "<td style='padding:0px 15px 0px 0px;'>".$departamento->getId()."</td>";
	echo "<td style='padding:0px 15px 0px 0px;'>".$departamento->getNombre()."</td>";
	echo "<td style='padding:0px 15px 0px 0px;'>".$departamento->getDirector()->getNombre()."</td>";
	echo "<td><a class=\"btn btn-success\" href=\"index.php?id_dep=".$departamento->getId()."\">Editar</a><a class=\"btn btn-danger\" href=\"borrar_dep.php?id_dep=".$departamento->getId()."\">Borrar</a></td>";
	echo "</tr>";
}
echo "</tbody></table>";