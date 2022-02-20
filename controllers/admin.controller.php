<?php

    class AdminController{

        public function Inicio()
        {
            require_once "views/interfaz-admin/product-index.php";
        }

        public function Eliminar()
        {
            $codigo=$_GET['cod'];
            $productos=simplexml_load_file('model/productos.xml');
            $indice=1;
            $i=1;
            foreach($productos->producto as $row)
            if($row->codigo==$codigo)
            {
            {
                $indice=$i;
                $path1='assets/img_products/'.$codigo.'.png';
                $path2='assets/img_products/'.$codigo.'.jpg';
                if(file_exists($path1))
                {
                    unlink($path1);
                }
                elseif(file_exists($path2))
                {
                    unlink($path2);
                }
                unset($productos->producto[$indice]);
                file_put_contents('model/productos.xml',$productos->asXML());
                header('location:http://localhost/desafio-practico-1/?c=admin');
                break;
             }
            $i++;
            }
           
        }
        public function Agregar()
        {
            $productos=simplexml_load_file('model/productos.xml');
            $producto=$productos->addChild('producto');
            $producto->addChild('codigo',$_POST['codigo']);
            $producto->addChild('nombre',$_POST['nombre']);
            $producto->addChild('descripcion',$_POST['desc']);
           
           
            $name=$_POST['codigo'];
            $path='assets/img_products';
            $filename=$_FILES['img']['name'];
            $sourcefoto=$_FILES['img']['tmp_name'];
            $explode=explode('.',$filename);
            $extension=array_pop($explode);
            $name=$name.'.'.$extension;
            if(file_exists($path))
            {
               $dir=opendir($path);
               $imgproduct=$path.'/'.$name;
               if(move_uploaded_file($sourcefoto,$imgproduct))
               {
                $producto->addChild('img',$_POST['codigo'].'.'.$extension);
                $producto->addChild('categoria',$_POST['ctg']);
                $producto->addChild('precio',$_POST['price']);
                $producto->addChild('existencias',$_POST['existencias']);
                file_put_contents('model/productos.xml',$productos->asXML());

               header("location: http://localhost/desafio-practico-1/?c=admin");
               }
            }
           
        }
        public function Editar()
        {
      
            if(!isset($_POST['img']))
            {
                $codigo=$_GET['cod'];
                $productos=simplexml_load_file('model/productos.xml');
                $producto=$productos->addChild('producto');
                $indice=0;
                $i=0;
                foreach($productos->producto as $row)
                {
                if($row->codigo==$codigo)
                {
                    
                    $indice=$i;
                    
                             
                    break;
                }
                $i++;
                }
                $fileimg=$productos->producto[$indice]->img;
                $explode=explode('.',$fileimg);
                $extension=array_pop($explode);
                $name=$_POST['codigo'].'.'.$extension;
                unset($productos->producto[$indice]);
                $producto->addChild('codigo',$_POST['codigo']);
                $producto->addChild('nombre',$_POST['nombre']);
                $producto->addChild('descripcion',$_POST['desc']);
                $producto->addChild('img',$name);
                $producto->addChild('categoria',$_POST['ctg']);
                $producto->addChild('precio',$_POST['price']);
                $producto->addChild('existencias',$_POST['existencias']);
                file_put_contents('model/productos.xml',$productos->asXML());
                header("location: http://localhost/desafio-practico-1/?c=admin");
                   
            }
            else
            {
                $codigo=$_GET['cod'];
                $productos=simplexml_load_file('model/productos.xml');
                $producto=$productos->addChild('producto');
                $indice=0;
                $i=0;
                foreach($productos->producto as $row)
                {
                if($row->codigo==$codigo)
                {
                    
                    $indice=$i;
                    
                    unset($productos->producto[$indice]);
                    break;
                }
                $i++;
                }
            /*
            $productos=simplexml_load_file('model/productos.xml');
            $producto=$productos->addChild('producto');
            $producto->addChild('codigo',$_POST['codigo']);
            $producto->addChild('nombre',$_POST['nombre']);
            $producto->addChild('descripcion',$_POST['desc']);
           
           
            $name=$_POST['codigo'];
            $path='assets/img_products';
            $filename=$_FILES['img']['name'];
            $sourcefoto=$_FILES['img']['tmp_name'];
            $explode=explode('.',$filename);
            $extension=array_pop($explode);
            $name=$name.'.'.$extension;
            if(file_exists($path))
            {
               $dir=opendir($path);
               $imgproduct=$path.'/'.$name;
               if(move_uploaded_file($sourcefoto,$imgproduct))
               {
                $producto->addChild('img',$_POST['codigo'].'.'.$extension);
                $producto->addChild('categoria',$_POST['ctg']);
                $producto->addChild('precio',$_POST['price']);
                $producto->addChild('existencias',$_POST['existencias']);
                file_put_contents('model/productos.xml',$productos->asXML());

               header("location: http://localhost/desafio-practico-1/?c=admin");
               }
            }
            */
            $producto->addChild('codigo',$_POST['codigo']);
            $producto->addChild('nombre',$_POST['nombre']);
            $producto->addChild('descripcion',$_POST['desc']);
            $name=$_POST['codigo'];
            $path='assets/img_products';
            $filename=$_FILES['img']['name'];
            $sourcefoto=$_FILES['img']['tmp_name'];
            $explode=explode('.',$filename);
            $extension=array_pop($explode);
            $name=$name.'.'.$extension;
            if(file_exists($path))
            {
               $dir=opendir($path);
               $imgproduct=$path.'/'.$name;
               if(move_uploaded_file($sourcefoto,$imgproduct))
               {
                $producto->addChild('img',$_POST['codigo'].'.'.$extension);
                $producto->addChild('categoria',$_POST['ctg']);
                $producto->addChild('precio',$_POST['price']);
                $producto->addChild('existencias',$_POST['existencias']);
                file_put_contents('model/productos.xml',$productos->asXML());

               header("location: http://localhost/desafio-practico-1/?c=admin");
               }
            }
            }
 
        //$producto->addChild('img',$_POST['codigo'].'.'.$extension);
       



    }
        
}