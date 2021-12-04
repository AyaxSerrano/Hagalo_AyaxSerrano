<?php

include("conexion.php");
$con=conectar();

$numero_cliente=$_GET['id'];

$sql="DELETE FROM cliente  WHERE numero_cliente='$numero_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>