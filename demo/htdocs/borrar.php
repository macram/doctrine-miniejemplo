<?php

require_once "bootstrap.php";
require_once "entity/Empleado.php";

if (!empty($_GET)) 
{

	$empleado = $entityManager->find('Empleado',$_GET['id']);
	
	$entityManager->remove($empleado);
	$entityManager->flush();
}

header("Location: index.php");