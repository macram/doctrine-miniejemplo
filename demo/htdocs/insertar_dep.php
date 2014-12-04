<?php

require_once "bootstrap.php";
require_once "entity/Empleado.php";
require_once "entity/Departamento.php";

if (!empty($_POST)) 
{
	$departamento = new Departamento();
	if ($_POST['id_dep']!="") $departamento = $entityManager->find('Departamento',$_POST['id_dep']);
	$departamento->setNombre($_POST['inputNombre']);
	$empleado = $entityManager->getRepository("Empleado")->findOneBy(array('nombre' => $_POST['inputDirector']));
	$departamento->setDirector($empleado);
	
	
	
	if (!$_POST['id_dep']="") $entityManager->persist($departamento);
	$entityManager->flush();

	echo "Creado departamento con ID " . $departamento->getId() . "\n";
}

header("Location: index.php");