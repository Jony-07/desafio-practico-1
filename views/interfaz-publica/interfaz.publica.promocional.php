<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Promocionales</title>
    <link href="estilo.css" rel="stylesheet" type="text/css">
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
            <a  href="http://localhost/desafio-practico-1/?c=admin"  class="d-inline-block align-text-top bg-dark text-warning" >LOG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page" href="http://localhost/desafio-practico-1/">Incio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="http://localhost/desafio-practico-1/?c=interfaz&a=Promocional">Promocionales</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-warning" href="http://localhost/desafio-practico-1/?c=interfaz&a=Textil">Textiles</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
           
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    
                </thead>
                <tbody>
                    <?php
                    $productos=simplexml_load_file('model/productos.xml');
                    foreach ($productos->producto as $row)
                     {
                      $path="assets/img_products/".$row->img."";
                    
                      if(file_exists($path))
                     {
                        if(($row->categoria)=="Promocional")
                        {
                            if(($row->existencias)=="0")
                                {echo $row->existencias="sin existencia";}
                                else{$row->existencias;}
                            ?>
                            <tr>
                                <td><?=$row->codigo?></td>
                                <td><?=$row->nombre?></td>
                                <td><?=$row->descripcion?></td>
                                <td><?php echo "<img src='assets/img_products/$row->img' width='250px'>"?></td>
                                <td><?=$row->categoria?></td>
                                <td><?=$row->precio?></td>
                                <td><?=$row->existencias ?></td>
                             </tr>   
                             <?php
                             }
                        }
                    }
                    ?>
                </tbody>
             
            </table>
          
        </div>
    </div>
</div>
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