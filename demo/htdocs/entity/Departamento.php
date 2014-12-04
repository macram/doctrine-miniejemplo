<?php

require_once "Empleado.php";

/**
 * @Entity 
 * @Table(name="Departamento")
 **/
class Departamento
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	protected $id;

	/** @Column(type="string") **/
	protected $nombre;
	
	/** @OneToOne(targetEntity="Empleado") **/
	protected $director;
	
	/** @OneToMany(targetEntity="Empleado", mappedBy="dpto") **/
	protected $empleados;
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setNombre($_nombre)
	{
		$this->nombre = $_nombre;
	}
	
	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function setDirector($_director)
	{
		$this->director = $_director;
	}
	
	public function getDirector()
	{
		return $this->director;
	}


}