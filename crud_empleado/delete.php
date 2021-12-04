<?php

include("conexion.php");
$con=conectar();

$id_e=$_GET['id'];

$sql="DELETE FROM empleado  WHERE id_e='$id_e'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>