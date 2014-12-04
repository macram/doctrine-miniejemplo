<?php

require_once "Departamento.php";

/**
 * @Entity 
 * @Table(name="Empleado")
 **/
class Empleado 
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $nombre;

    /** @Column(type="string") **/
    protected $direccion;

    /** @Column(type="float") **/
    protected $sueldo;
	
	/** @ManyToOne(targetEntity="Departamento", inversedBy="empleados")**/
	protected $dpto;
    // Setters, getters
	
	public function setNombre($_nombre)
	{
		$this->nombre = $_nombre;
	}
	
	public function setDireccion($_direccion)
	{
		$this->direccion = $_direccion;
	}
	
	public function setSueldo($_sueldo)
	{
		$this->sueldo = $_sueldo;
	}
	
	public function getID()
	{
		return $this->id;
	}
	
	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function getDireccion()
	{
		return $this->direccion;
	}
	
	public function getSueldo()
	{
		return $this->sueldo;
	}
	
	public function setDpto($_dpto)
	{
		$this->dpto = $_dpto;
	}
	
	public function getDpto()
	{
		return $this->dpto;
	}
}
