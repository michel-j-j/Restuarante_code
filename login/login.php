<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

sleep(2);
$servername = "localhost";
$username = "root";
$password = "";
$db='restaurante';

$conn = new mysqli($servername, $username, $password,$db);

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
$consulta = mysqli_query ($conn, "SELECT * FROM usuarios WHERE email = '$email' AND pass = '$pass'");
  if(!$consulta)
  {

  echo "Usuario no existe " . $email . " o el pass " . $pass. " o hubo un error " ;
  echo json_encode(array('error'=>true));
  echo mysqli_error($consulta);
  exit;
  }

  if($user = mysqli_fetch_assoc($consulta)) 
  { 
    echo json_encode(array('error'=>false));
  } 
  else 
  { 
    echo json_encode(array('error'=>true));
    echo "Usuario no existe " . $email . " " . $pass. " o hubo un error " ;
  }
$conn->close();
?>