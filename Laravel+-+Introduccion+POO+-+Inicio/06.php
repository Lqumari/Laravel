<?php
include 'includes/header.php';

//Constructor property promotion


class Empleado{
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ){}
    
}

$Juan = new Empleado('Juan', 'luna', 'TI', 'Juan@empresa.com',1904);
$Karen = new Empleado('Karen', 'perez', 'Marketing', 'Karen@empresa.com',1904);


echo "<pre>";
var_dump($Juan);
echo "<pre>";

echo "<pre>";
var_dump($Karen);
echo "<pre>";