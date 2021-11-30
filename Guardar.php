<?php 
include("Conexion.php");
$con=conectar();

$Email=$_POST['Email'];
$Nombre=$_POST['Nombre'];
$Contraseña=$_POST['Contraseña'];
$Matricula=$_POST['Matricula'];
$Comentario=$_POST['Comentario'];
$Grupo=$_POST['Grupo'];

$sql="INSERT INTO registro VALUES('$Email', '$Nombre', '$Contraseña', '$Matricula','$Comentario', '$Grupo')";
$query= mysqli_query($con,$sql);

if($query){
    header("location: Exito.html");
    
}else{
    header("location: Error.html");
}
?>