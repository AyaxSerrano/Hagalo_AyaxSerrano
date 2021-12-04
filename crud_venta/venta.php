<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Ventas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_cliente" placeholder="id_cliente">
                                    <input type="text" class="form-control mb-3" name="id_producto" placeholder="id_producto">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="fecha">
                                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="cantidad">
                                    <input type="text" class="form-control mb-3" name="ventas anuales" placeholder="ventas anuales">
                                    <input type="text" class="form-control mb-3" name="ventas mensuales" placeholder="ventas mensuales">
                                
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id Cliente</th>
                                        <th>Id Producto</th>
                                        <th>Fecha</th>
                                        <th>Cantidad</th>
                                        <th>Ventas Anuales</th>
                                        <th>Ventas Mensuales</th>
                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_cliente']?></th>
                                                <th><?php  echo $row['id_producto']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                <th><?php  echo $row['cantidad']?></th>  
                                                <th><?php  echo $row['ventas anuales']?></th> 
                                                <th><?php  echo $row['ventas mensuales']?></th>     

                                                <th><a href="actualizar.php?id=<?php echo $row['id_cliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_cliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                    <a href="/DAWEB.SE/proyecto_Serrano_Hagalo/index.php">Inicio</a> 
            </div>
    </body>
</html>