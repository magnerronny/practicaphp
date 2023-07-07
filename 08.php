<?php

use Empleado as GlobalEmpleado;

include 'includes/header.php';

class Empleado {
  public $nombre;
  public $apellido;
  public $departamento;
  public $email;

  public function __construct($nombre, $apellido, $departamento, $email)
  {
    $this->nombre = $nombre;
    $this->apellido =$apellido;
    $this->departamento =$departamento;
    $this->departamento =$departamento;
    $this->email =$email;
    // $this->nombreEmpleado();
  }

  public function nombreEmpleado()
  {
    echo $this->nombre . "" . $this->apellido;
  }

  public function departamentoEmpleado()
  {
    return $this->departamento;
  }

}

$empleado = new Empleado('Jose','other', 'toh', 'oter');
$empleado->nombreEmpleado();


echo "<pre>";
var_dump($empleado);
echo "</pre>";

$departamento1 = $empleado -> departamentoEmpleado();

echo $departamento1;