<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id_e'];
$nombre=$_POST['nombre'];
$Dep=$_POST['Departamento'];
$Hor=$_POST['Horario'];
$Pro=$_POST['Productos'];
$Caj=$_POST['Caja'];

$sql="INSERT INTO cliente VALUES('$id','$nombre','$Dep','$Hor','$Pro','$Caj')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>