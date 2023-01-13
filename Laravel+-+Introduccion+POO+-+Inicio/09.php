<?php
include 'includes/header.php';

//Modificadores de acceso 
class Empleado{

    //public -> acceso en cualquier lugar (clase u objeto)
    // private -> acceso a la clase
    // protected
    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    /*
        Get - obtener un valor
        Set -para modificar un valor
    */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

}

$juan = new Empleado('Juan', 'luna', 'TI', 'Juan@empresa.com',1904);

$juan->setNombre("Un nuevo Nombre");
$juan->setApellido("Villanueva");
$juan->setDepartamento("Relaciones Publicas");
$juan->setCodigo(4108);


echo $juan->getNombre();
echo $juan->getApellido();
echo $juan->getDepartamento();
echo $juan->getCodigo();


