<?php
include 'cn.php';

//funcion del tag
function generateRandomString($length = 4) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];
$id_cargo = 2;
$tag = generateRandomString();

//consulta para insertar
$insertar = "INSERT INTO registrados(nombre, apellidos, correo, usuario, clave, telefono, id_cargo, tag) VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$clave', '$telefono', '$id_cargo', '$tag')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM registrados WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '<script>
        alert("El usuario ya esta registrado");
        window.history.go(-1);
        </script>';
    exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM registrados WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '<script>
        alert("El correo ya esta registrado");
        window.history.go(-1);
        </script>';
    exit;
}

//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo 'Error al registrarse';
}
else {
    header("location: login.html");;
}

//cerrar conexion
mysqli_close($conexion);
?>