<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabajo Formulario</title>
</head>

<body>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <input type="text" name="form" value="insertar" hidden>
    <input type="text" placeholder="nombre" name="nombre"><br><br>
    <input type="text" placeholder="email" name="email"><br><br>
    <input type="text" placeholder="contraseña" name="contraseña"><br><br>
    <input type="submit"><br><br>
  </form>

  <hr>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <p>Busqueda mediante ID</p>
    <input type="text" name="form" value="buscar" hidden>
    <input type="text" placeholder="id" name="id">
    <input type="submit">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['form'] === "1")
      include("consulta.php");
    else include("buscar.php");
  }
  ?>
</body>

</html>