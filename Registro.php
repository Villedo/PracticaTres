<?php
include("Conexion.php");
$con=conectar();

$sql="SELECT * FROM registro";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registro </title>
</head>
<body class="BD">
    <br>
    <br>
    <br>
    <br>
    <center><h1>Registro</h1></center>

    <form action="Guardar.php" method="post" class="BD-p">

        <p>Correo <br><input type="email" name="Email" /></p>

        <p>Nombre Completo <br><input type="text" name="Nombre" /></p>

        <p>Grupo <br><input type="text" name="Grupo" /></p>

        <p>Contraseña <br><input type="password" name="Contraseña" /></p>

        <p>Matricula <br><input type="text" name="Matricula" /></p>
        
        <p>Comentario <br><input type="text" name="Comentario" /></p>

        <input type="submit" class="btn btn-success" value="Guardar">
        
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><form action="lista.php" method="post">
        <input type="submit" class="btn btn-primary" value="Eliminar"> </form></center>
</body>
</html>
