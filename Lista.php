<?php
include("Conexion.php");
$con= conectar();

$sql="SELECT * FROM Registro";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista usuarios</title>
</head>
<body>

<table class="table">
    <thead class="table-succes table-striped">
        <tr>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Grupo</th>
            <th>Correo Electronico</th>
            <th>Contraseña</th>
            <th>Comentario</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while($row=mysqli_fetch_array($query)){
        ?>
            <tr>
                <th><?php echo $row['Matricula']?></th>
                <th><?php echo $row['Nombre_Completo']?></th>
                <th><?php echo $row['Grupo']?></th>
                <th><?php echo $row['Correo_Electronico']?></th>
                <th><?php echo $row['Contraseña']?></th>
                <th><?php echo $row['Comentario']?></th>
                <th><a href="Eliminar.php?id=<?php echo $row['Correo_Electronico']?> "class="btn btn danger">Eliminar</a></th>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>
</body>
</html>