<?php

require_once "bootstrap.php";
require_once "entity/Departamento.php";

if (!empty($_GET)) 
{

	$departamento = $entityManager->find('Departamento',$_GET['id_dep']);
	
	$entityManager->remove($departamento);
	$entityManager->flush();
}

header("Location: index.php");