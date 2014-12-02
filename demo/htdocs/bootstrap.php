<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/entity"), $isDevMode);

// database configuration parameters
$dbParams = array(
    'driver'   => 'pdo_pgsql',// Driver que utilizaremos para conectarnos
    'user'     => 'postgres', // Usuario de la base de datos
    'password' => '12345',    // Contraseña de la base de datos
    'dbname'   => 'Doctrine',      // Nombre de la base de datos de nuestro proyecto
);

// obtaining the entity manager
$entityManager = EntityManager::create($dbParams, $config);