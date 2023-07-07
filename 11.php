<?php
include 'includes/header.php';

abstract class Persona {
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $telefono;

  public function __construct($nombre, $apellido, $email, $telefono)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->telefono = $telefono;
  }

  public function mostrarInfo()
  {
    echo "nombre: " .$this->nombre." " . $this->apellido;
  }
  
}

class Empleado extends Persona {
  
  protected $codigo;
  protected $departamento;

  public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
  {
    parent::__construct($nombre, $apellido, $email, $telefono);
    $this->codigo = $codigo;
    $this->departamento = $departamento;
  }

  public static function obtenerEmpleado()
  {
    echo "Desde método estatico";
  }

}


class Proveedor extends Persona {
  
  protected $empresa;

  public function __construct($nombre, $apellido, $email, $telefono, $empresa)
  {
    parent::__construct($nombre, $apellido, $email, $telefono);
    $this->empresa = $empresa;
  }
}

$empleado = new Empleado('rommy','gonzales','fgdgdf','dfgsdfsd','32ewrff', 'fssdfs');


echo "<pre>";
var_dump($empleado);
echo "</pre>";

$empleado->mostrarInfo();
Empleado::obtenerEmpleado();