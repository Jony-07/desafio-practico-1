<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Promocionales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 py-5">
           
        <a href="#addnew" class="btn btn-success" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar materia</a>
            
            <table class="table table-bordered " style="margin-top:20px;" >
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Img</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    $productos=simplexml_load_file('model/productos.xml');
                    foreach ($productos->producto as $row) {
                    $path="assets/img_products/".$row->img."";
                    if(file_exists($path))
                    {
                    ?>
                    <tr>
                        <td><?=$row->codigo?></td>
                        <td><?=$row->nombre?></td>
                        <td><?=$row->descripcion?></td>
                        <td><?php echo "<img src='assets/img_products/$row->img' width='200px' height='200px'>"?></td>
                        <td><?=$row->categoria?></td>
                        <td><?=$row->precio?></td>
                        <td><?=$row->existencias?></td>
                        <td>
                        <a href="#actualizar_<?=$row->codigo?>" class="btn btn-primary" data-toggle="modal">Editar</a>
                            <a href="#delete_<?=$row->codigo?>" class="btn btn-danger" data-toggle="modal">Borrar</a>
                        </td>
                       
                    </tr>     
                    <?php include('actualizar_modal.php'); ?>
                    <?php include('borrar_modal.php'); ?>
                    <?php
                    }
                   
                    }
                    ?>
                </tbody>
             
            </table>
          
        </div>
    </div>
</div>
<?php include('nueva_modal.php'); ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
</body>
</html>