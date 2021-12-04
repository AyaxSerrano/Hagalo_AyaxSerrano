<?php

include("conexion.php");
$con=conectar();

$numero_cliente=$_POST['numero_cliente'];
$nombre=$_POST['nombre'];
$productos=$_POST['productos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$genero=$_POST['genero'];

$sql="UPDATE cliente SET  nobre='$nombre',productos='$productos', correo='$correo', telefono='$telefono', direccion='$direccion', genero='$genero' WHERE numero_cliente='$numero_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>