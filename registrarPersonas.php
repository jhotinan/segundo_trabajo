<?php

include("BaseDatos.php");

if(isset($_POST["boton"])){

    $nombre=$_POST["nombreproducto"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["ruta"];

    //echo($nombre."-".$apellido."-".$cedula."-".$descripcion);


    //crear un objeto de la base de datos.
    $operacionBD= new BaseDatos();
    

    //consulta SQL.
    $consultaSQL="INSERT INTO productos(nombre, precio, descripcion, foto) VALUES ('$nombre','$precio','$descripcion','$foto')";
    

    //llamar al metodo agregar datos de la clase baseDatos.
    $operacionBD->agregarDatos($consultaSQL);

}

?>