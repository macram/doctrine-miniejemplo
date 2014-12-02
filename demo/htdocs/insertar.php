<?php

require_once "bootstrap.php";
require_once "entity/Empleado.php";

if (!empty($_POST)) 
{
	$empleado = new Empleado();
	if ($_POST['id']!="") $empleado = $entityManager->find('Empleado',$_POST['id']);
	$empleado->setNombre($_POST['inputNombre']);
	$empleado->setDireccion($_POST['inputDireccion']);
	$empleado->setSueldo($_POST['inputSueldo']);
	
	if (!$_POST['id']="") $entityManager->persist($empleado);
	$entityManager->flush();

	echo "Creado empleado con ID " . $empleado->getId() . "\n";
}

header("Location: index.php");