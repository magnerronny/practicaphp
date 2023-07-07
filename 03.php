<?php
include 'includes/header.php';

// atributos de una clase 
class Empleado {
  public $nombre;
  public $apellido;
  public $departamento;
  public $email;

}

$empleado = new Empleado;

$empleado ->nombre = "juan";
$empleado ->apellido ="la torre";

echo "<pre>";
var_dump($empleado);
echo "</pre>";


$empleado2 = new Empleado;

$empleado2 ->nombre = "juan";
$empleado2 ->apellido ="la torre";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";
