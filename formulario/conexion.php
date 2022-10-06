<?php

$conn = new mysqli("localhost", "root", "", "android_user");

if ($db->connect_error) die("Error");
else {
  echo "Conexión creada";
}
return $conn;