<?php
include 'includes/header.php';

// tipados

class Empleado {
  

  public function __construct(
    public $nombre,
    public $apellido,
    public $departamento,
    public $email,
  )
  

}

$empleado = new Empleado('Jose','other', 'toh', 'oter');

echo "<pre>";
var_dump($empleado);
echo "</pre>";
