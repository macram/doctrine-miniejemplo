<?php

/**
 * @Entity 
 * @Table(name="Empleados")
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
}
