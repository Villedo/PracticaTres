<?php

include("Conexion.php");
$con=conectar();

$Email=$_GET['Correo_Electronico'];

$sql="DELETE FROM registro WHERE Correo_Electronico='$Email'";
$query=mysqli_query($con,$sql);

    if($query){
        header("location: Registro.php");
    }


?>