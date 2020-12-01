<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEditar"])){
        
        //recibir id
        $id=$_GET["id"];
        
        //recibir datos a editar
        $nombre=$_POST["nombreEditar"];
        $precio=$_POST["precioEditar"];
        $descripcion=$_POST["descripcionEditar"];

        //crear objeto de base de datos
        $operacionBD= new BaseDatos();

        //crear consulta sql
        $consultaSQL="UPDATE productos SET nombre='$nombre' , precio='$precio', descripcion='$descripcion' WHERE id='$id'";
        

        $operacionBD->actualizarDatos($consultaSQL);

        header("location:listadoProductos.php");
    }
?>