<?php
include ("conexion.php");

$id = $_REQUEST['id'];



$query = "DELETE FROM images_tabla WHERE id = '$id'";
$resultado = $conn->query($query);


if($resultado){
   header("Location: mostrar.php");
}
else{
    echo "No se elimino";
}



?>