<?php
include("conexion.php");
$con=conectar();

$nc=$_POST['numero_cliente'];
$nombre=$_POST['nombre'];
$productos=$_POST['productos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$genero=$_POST['genero'];

$sql="INSERT INTO cliente VALUES('$nc','$nombre','$productos','$correo','$telefono','$direccion','$genero')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>