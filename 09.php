<?php

use Empleado as GlobalEmpleado;

include 'includes/header.php';

class Empleado {
  protected $nombre;
  protected $apellido;
  protected $departamento;
  protected $email;

  public function __construct($nombre, $apellido, $departamento, $email)
  {
    $this->nombre = $nombre;
    $this->apellido =$apellido;
    $this->departamento =$departamento;
    $this->departamento =$departamento;
    $this->email =$email;
    // $this->nombreEmpleado();
  }

  public function getNombre ()
  {
    return $this->nombre;
  }

  public function setNombre ($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setApellido($apellido){
    $this->apellido = $apellido; 
  }

}

$empleado = new Empleado('Jose','other', 'toh', 'oter');
$empleado->nombreEmpleado();
$data = $empleado->getApellido();

echo $data;

echo "<pre>";
var_dump($empleado);
echo "</pre>";

$departamento1 = $empleado -> departamentoEmpleado();

echo $departamento1;