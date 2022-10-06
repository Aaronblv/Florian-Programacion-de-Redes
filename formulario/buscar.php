<?php
$conn = include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $id = $_GET['id'];

  $query = "SELECT * FROM user WHERE id='$id'";
  $result = $conn->query($query);

  if ($conn->affected_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $array = $row;
    }
    echo json_encode($array);
  } else {
    echo "ID no registrada";
  }
  $result->close();
  $conn->close();
}
