<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id_e'];
$nombre=$_POST['nombre'];
$Departamento=$_POST['Departamento'];
$horario=$_POST['Horario'];
$productos=$_POST['Productos'];
$caja=$_POST['Caja'];

$sql="UPDATE empleado SET  id_e='$id_empleado',nombre='$nombre',Departamento='$departamento',Horario='$horario',Productos='$productos',Caja='$caja' WHERE id_e='$id_e'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>