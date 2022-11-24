<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

//conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "bd_prueba");
$consulta = "SELECT * FROM registrados WHERE usuario = '$usuario' and clave = '$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);
if ($filas['id_cargo'] == 1) { //administrador
    header("location: index-admin.php");
} else

if ($filas['id_cargo'] == 2) { //cliente
    header("location: index-usuario.php");
}
else {
    echo "Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>