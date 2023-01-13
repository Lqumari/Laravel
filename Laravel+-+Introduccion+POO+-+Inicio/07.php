<?php
include 'includes/header.php';

//Metodos
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

    public function nombreEmpleado()
    {
        echo $this->nombre ." ". $this->apellido;
    }

    public function departamentoEmpleado()
    {
        return $this-> departamento;
    }
}

$juan = new Empleado('Juan', 'luna', 'TI', 'Juan@empresa.com',1904);
$karen = new Empleado('Karen', 'perez', 'Marketing', 'Karen@empresa.com',1904);



echo "<pre>";
var_dump($juan);
echo "<pre>";

echo "<pre>";
var_dump($karen);
echo "<pre>";

echo $juan->nombreEmpleado();

echo $karen->nombreEmpleado();

$departamento1 = $juan->departamentoEmpleado();
echo $departamento1;