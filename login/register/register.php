<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Se conecta con la base de datos y registra un usuario, con los campos(email,pass,name,surname,number),
//Consulta si el usuario ya existe(atraves del email) y en caso de que no exista, crea un usuario.

$servername = "localhost";
$username = "root";
$password = "";
$db='restaurante';

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
else
{
  //echo "Se conecto bien";
}
$email = $_POST['email'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$number = $_POST['number'];

$resultado=$conn->query("SELECT EXISTS (SELECT * FROM usuarios WHERE email ='$email');"); 
$row=mysqli_fetch_row($resultado);

    if ($row[0]=="1") 
    {                 
      echo "El usuario ya esta registrado";
    }
    else
    {
      $sql = "INSERT INTO usuarios VALUES ('','$email','$pass','$name','$surname','$number')";
        if (mysqli_query($conn,$sql))
        {
          echo "\nRegistro ingresado correctamente";
        } 
        else 
        {
          echo "Error: ".$sql . mysqli_error($conn);
        }
    }   
    header('Location:../login.html');
$conn->close();
?>