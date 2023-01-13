<?php
include 'includes/header.php';
//Constructor

class Empleado{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
}

$Juan = new Empleado('Juan', 'luna', 'TI', 'Juan@empresa.com',1904);
$Karen = new Empleado('Karen', 'perez', 'Marketing', 'Karen@empresa.com',1904);


echo "<pre>";
var_dump($Juan);
echo "<pre>";

echo "<pre>";
var_dump($Karen);
echo "<pre>";