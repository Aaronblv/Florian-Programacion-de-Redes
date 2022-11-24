<?php
include ("cn.php");
$id = $_GET['id'];

$eliminar = "DELETE FROM registrados WHERE id = '$id'";
$resultado = mysqli_query($conexion, $eliminar);

if ($resultado) {
    header("location: index-admin.php");
} else {
    echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}

mysqli_close($conexion);
?>