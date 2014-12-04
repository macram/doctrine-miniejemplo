<?php
// create_user.php
require_once "bootstrap.php";
require_once "entity/Empleado.php";

$newEmpname = $argv[1];
$newDir = $argv[2];
$newSueldo = $argv[3];
$newDpto = $argv[4];

$empleado = new Empleado();
$empleado->setNombre($newEmpname);
$empleado->setDireccion($newDir);
$empleado->setSueldo($newSueldo);
$empleado-setDpto($newDpto);
$entityManager->persist($empleado);
$entityManager->flush();

echo "Creado empleado con ID " . $empleado->getId() . "\n";