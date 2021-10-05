<?php
require('clases.php');
$array;
$empleador = new Empleador("Michelle","Jauge","Crespo2000","Email");
for($i = 0; $i< 10; $i++)
{
    $empleador = new Empleador("Michelle".$i,"Jauge","Crespo2000","Email");
    $array[$i] = $empleador;
}
for($i = 0; $i< 10; $i++)
{
    $array[$i]->Mostrar();
}
?>