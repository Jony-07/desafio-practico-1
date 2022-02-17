<?php
class InicioControlador{
 
    public function Inicio(){
        //$bd = BasedeDatos::Conectar();
        require_once "views/encabezado.php";
        require_once "views/inicio/main.php";
        require_once "views/pie.php";
    }
}