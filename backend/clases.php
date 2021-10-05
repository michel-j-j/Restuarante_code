<?php
class Empleador        //Clase padre
{ 
    
    private $nombre = "";
    private $apellido = "";
    private $pass = "";
    private $email = "";

    public function __construct($nombre,$apellido,$pass,$email)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->pass = $pass;
        $this->email = $email;
    }
    public function __destruct()
    {

    }
    public function Mostrar()
    {
        echo "\n".$this->nombre, $this->apellido, $this->pass, $this->email;
    }

    
}
class Empleado //Clase hija
{

}



?>