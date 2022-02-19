<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Promocionales</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Img</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    
                </thead>
                <tbody>
                    <?php
                    $productos=simplexml_load_file('model/productos.xml');
                    foreach ($productos->producto as $row) {
                    $path="assets/img_products/".$row->img."";
                    
                    if(file_exists($path))
                    {
                        if(($row->categoria)=="Promocional")
                        {
                    ?>
                    <tr>
                        <td><?=$row->codigo?></td>
                        <td><?=$row->nombre?></td>
                        <td><?=$row->descripcion?></td>
                        <td><?php echo "<img src='assets/img_products/$row->img' width='300px'>"?></td>
                        <td><?=$row->categoria?></td>
                        <td><?=$row->precio?></td>
                        <td><?=$row->existencias?></td>
                        
                      
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

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>