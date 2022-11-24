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
    <link rel = "stylesheet" href = "estilos-index-admin.css">
    </head> 

    <body>
        <div class = "container-table">
            <div class = "table__title">Datos de usuarios registrados</div>

            <div class = "table__header">Nombre</div>
            <div class = "table__header">Apellido</div>
            <div class = "table__header">Correo</div>
            <div class = "table__header">Usuario</div>
            <div class = "table__header">Telefono</div>
            <div class = "table__header">Tag</div>
            <div class = "table__header">Operacion</div>

            <?php $resultado = mysqli_query ($conexion, $usuarios); //ejecutamos la consulta
            while ($row = mysqli_fetch_assoc ($resultado)) { ?> <!-- creamos una repeticion -->
            <div class = "table__item"><?php echo $row ["nombre"]; ?> </div>
            <div class = "table__item"><?php echo $row ["apellidos"]; ?> </div>
            <div class = "table__item"><?php echo $row ["correo"]; ?> </div>
            <div class = "table__item"><?php echo $row ["usuario"]; ?> </div>
            <div class = "table__item"><?php echo $row ["telefono"]; ?> </div>
            <div class = "table__item"><?php echo $row ["tag"]; ?> </div>
            <div class = "table__item">
                <a href = "eliminar.php?id=<?php echo $row["id"];?>" class = "table__item__link">Eliminar</a> 
            </div>
            <?php } mysqli_free_result ($resultado); ?>
        </div>
        <script src = "confirmar-eliminar.js"></script>
    </body>
</html>