<?php
    include ("cn.php");
    $usuarios = "SELECT * FROM registrados";
?>

<!DOCTYPE html>
<html lang = "es">
    <head>
    <meta charset = "UTF-8">
    <title></title>
    <meta name = "viewport" content = "width-device-width, user-scalable-no", initial-scale-1.0, maximum-scale-1.0, minimum-scale-1.0>
    <link rel = "stylesheet" href = "estilos-index-usuario.css">
    </head> 

    <body>
        <div class = "container-table">
            <div class = "table__title">Datos de usuario</div>

            <div class = "table__header">Nombre</div>
            <div class = "table__header">Apellido</div>
            <div class = "table__header">Correo</div>
            <div class = "table__header">Usuario</div>
            <div class = "table__header">Telefono</div>

            <?php $resultado = mysqli_query ($conexion, $usuarios);
            while ($row = mysqli_fetch_assoc ($resultado)) { ?>
            <div class = "table__item"><?php echo $row ["nombre"]; ?> </div>
            <div class = "table__item"><?php echo $row ["apellidos"]; ?> </div>
            <div class = "table__item"><?php echo $row ["correo"]; ?> </div>
            <div class = "table__item"><?php echo $row ["usuario"]; ?> </div>
            <div class = "table__item"><?php echo $row ["telefono"]; ?> </div>
            <?php } mysqli_free_result ($resultado); ?>

    </body>
</html>