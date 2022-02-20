<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Promocionales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar bg-dark" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
         
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="http://localhost/desafio-practico-1/">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
<footer class="bg-dark text-white pt-3 pb-4">
<div class="containter text-center text-md-left">
    <div class="row text-center text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                Company Namy
            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex fugiat alias dicta dolorum, sed doloribus voluptate rerum reiciendis temporibus animi nesciunt repudiandae vitae doloremque nihil atque expedita cumque aperiam quo?</p>
       
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                Products
            </h5>
        <p><a href="#" class="text-white" style="text-decoration: none;">The Providers</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Creativity</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Texto</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Más Texto</a></p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                Useful links
            </h5>
        <p><a href="#" class="text-white" style="text-decoration: none;">The Providers</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Creativity</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Texto</a></p>
        <p><a href="#" class="text-white" style="text-decoration: none;">Más Texto</a></p> 
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
               Contact
            </h5>
            <i class="fas fa-home mr-3">Siu</i>
            <i class="fas fa-envelope mr-3">Siu</i>
            <i class="fas fa-phone mr-3">Siu</i>
            <i class="fas fa-print mr-3">Siu</i>
       
        </div>
        <hr class="mb-4">
        <div class="row align-items-center text-center">
            <div class="col-md-7 col-lg-8 offset-lg-2">
                <center>
                <p> Copyright @2022 All rights reserved by:
                    <a href="#" style="text-decoration: none;"><strong class="text-warning">Textil Export</strong></a>
                </p>
                </center>
                
            </div>
        </div> 
    </div>
</div>
</footer>
</body>
</html>