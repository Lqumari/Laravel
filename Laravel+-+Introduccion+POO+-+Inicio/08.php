<?php
include 'includes/header.php';

//Modificadores de acceso 
class Empleado{

    //public -> acceso en cualquier lugar (clase u objeto)
    // private -> acceso a la clase
    // protected
    protected $nombre;
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

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function cambiarNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}

$juan = new Empleado('Juan', 'luna', 'TI', 'Juan@empresa.com',1904);

$juan->cambiarNombre("Un nuevo Nombre");

echo $juan->obtenerNombre();


echo "<pre>";
var_dump($juan);
echo "<pre>";
