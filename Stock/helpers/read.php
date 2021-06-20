<?php

include 'conexion.php';

if(!isset($_POST['buscar'])){

$_POST['buscar'] = "";

}


$buscar = $_POST['buscar'];



$SQL_READ = "SELECT * FROM images_tabla WHERE id LIKE '%$buscar' or Nombre LIKE '%$buscar' or Precio LIKE '%$buscar' 
or Bodega LIKE '%$buscar' or imagenes LIKE '%$buscar' or T18 LIKE '%$buscar' or T19 LIKE '%$buscar' or T20 LIKE '%$buscar' 
or T21 LIKE '%$buscar' or T22 LIKE '%$buscar' or T23 LIKE '%$buscar' or T24 LIKE '%$buscar' or T25 LIKE '%$buscar' 
or T26 LIKE '%$buscar' or T27 LIKE '%$buscar' or T28 LIKE '%$buscar' or T29 LIKE '%$buscar' or T30 LIKE '%$buscar' or T31 LIKE '%$buscar' 
or T32 LIKE '%$buscar' or T33 LIKE '%$buscar' or T34 LIKE '%$buscar' or T35 LIKE '%$buscar' or T36 LIKE '%$buscar' or T37 LIKE '%$buscar' 
or T38 LIKE '%$buscar' or T39 LIKE '%$buscar' or T40 LIKE '%$buscar' or T41 LIKE '%$buscar' or T42 LIKE '%$buscar' or T43 LIKE '%$buscar' 
or T44 LIKE '%$buscar'";

$sql_query = mysqli_query($conn,$SQL_READ);

?>
