<?php

include("BaseDatos.php");
//0.

$id=$_GET["id"];
//1.Crear objeto de la clase BaseDatos



$operacionBD= new BaseDatos();
//2.Crear una consulta SQL para que eliminar datos


$consultaSQL="DELETE FROM productos WHERE id = '$id'";
//3. utilizar el metodo eliminarDatos de la clase BaseDatos


$operacionBD->eliminarDatos($consultaSQL);

header("location:listadoProductos.php");


?>