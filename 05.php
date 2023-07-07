<?php
include 'includes/header.php';

// tipados

class Empleado {
  public $nombre;
  public $apellido;
  public $departamento;
  public $email;

  public function __construct(string $nombre, $apellido, $departamento, $email)
  {
    $this->nombre = $nombre;
    $this->apellido =$apellido;
    $this->departamento =$departamento;
    $this->departamento =$departamento;
    $this->email =$email;
  }

}

$empleado = new Empleado('Jose','other', 'toh', 'oter');
$empleado->nombre;

echo "<pre>";
var_dump($empleado);
echo "</pre>";
