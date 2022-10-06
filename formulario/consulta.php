<?php

$conn = include('conexion.php');

//variables
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$contraseña = $_GET['contraseña'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $consultar = "INSERT INTO `user` (`Usuario`, `Mail`, `Contraseña`) VALUES ('$nombre','$email','$contraseña')";
  if ($conn->query($consultar) === TRUE) {
    echo "Nuevo usuario creado";
  } else {
    echo $conn->error;
  }
}
