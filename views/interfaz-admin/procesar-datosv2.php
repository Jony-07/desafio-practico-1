<?php
require 'validacionesv2.php';
$errores=array();
if(isset($_POST['upd']))
{
    if(!isset($codigo)||isVoid($codigo))
    {
        array_push($errores,"Debes ingresar un codigo");
    }
    elseif(!isProduct($codigo))
    {
        array_push($errores,"Debes ingresar un codigo válido.");
    }
    if(!isset($nombre)||isVoid($nombre))
    {
        array_push($errores,"Debes ingresar nombre de producto ");
    }
    elseif(!isText($nombre))
    {
        array_push($errores,"Debes ingresar nombre válido.");
    }
    if(!isset($desc)||isVoid($desc))
    {
        array_push($errores,"Debes ingresar una descripcion");
    }
    elseif(!isText($desc))
    {
        array_push($errores,"Debes ingresar una descripción válida.");
    }
    if(!isset($img)||isVoid($img))
    {
        array_push($errores,"Debes ingresar una imagen");
    }
    elseif(!isAccept($img))
    {
        array_push($errores,"Debes ingresar imagen aceptable.");
    }
    if(!isset($ctg)||isVoid($ctg))
    {
        array_push($errores,"Debes ingresar  una categoria");
    }
    if(!isset($price)||isVoid($price))
    {
        array_push($errores,"Debes ingresar ");
    }
    elseif(!isFloat($price))
    {
        array_push($errores,"Debes ingresar precio.");
    }
    if(!isset($existencias)||isVoid($existencias))
    {
        array_push($errores,"Debes ingresar ");
    }
    elseif(!isInteger($existencias))
    {
        array_push($errores,"Debes ingresar un número válido.");
    }
    if(!isText(isset($nombre))&&!isText($desc)&&!isAccept($img)&&!isInteger($existencias)&&!isFloat($price)&&!isProduct($codigo))
    {
            header("location : http://localhost/desafio-practico-1/?c=admin");
    }
}
?>