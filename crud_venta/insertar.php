<?php
include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$id_producto=$_POST['id_producto'];
$fecha=$_POST['fecha'];
$cantidad=$_POST['cantidad'];
$ventasa=$_POST['ventas_anuales'];
$ventasm=$_POST['ventas_mensuales'];

$sql="INSERT INTO ventas VALUES('$id_cliente','$id_producto','$fecha','$cantidad','$ventasa','$ventasm')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: venta.php");
    
}else {
}
?>