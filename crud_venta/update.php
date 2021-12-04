<?php

include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$id_producto=$_POST['id_producto'];
$fecha=$_POST['fecha'];
$cantidad=$_POST['cantidad'];
$ventas_mensuales=$_POST['ventas_mensuales'];
$ventas_anuales=$_POST['ventas_anuales'];


$sql="UPDATE empleado SET  id_cliente='$id_cliente',id_producto='$id_producto',fecha='$fecha',cantidad='$cantidad',ventas_mensuales='$ventas_mensuales',ventas_anuales='$ventas_anuales' WHERE id_cliente='$id_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: venta.php");
    }
?>