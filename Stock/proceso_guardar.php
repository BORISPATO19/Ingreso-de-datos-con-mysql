<?php
include ("conexion.php");

$nombre = $_POST['Nombre'];
$precio = $_POST['Precio'];
$bodega = $_POST['Bodega'];

$Imagen= addslashes(file_get_contents($_FILES['imagenes']['tmp_name']));

$talla = $_POST['T18'];
$talle = $_POST['T19'];
$talli = $_POST['T20'];
$tallo = $_POST['T21'];
$tallu = $_POST['T22'];
$azul = $_POST['T23'];
$roja = $_POST['T24'];
$verde = $_POST['T25'];
$blanca = $_POST['T26'];
$lila = $_POST['T27'];
$negro = $_POST['T28'];
$cafe = $_POST['T29'];
$naranja = $_POST['T30'];
$celeste = $_POST['T31'];
$ploma = $_POST['T32'];
$plomo = $_POST['T33'];
$rosa = $_POST['T34'];
$morado = $_POST['T35'];
$amarillo = $_POST['T36'];
$caoba = $_POST['T37'];
$gris = $_POST['T38'];
$dorado = $_POST['T39'];
$tugsteno = $_POST['T40'];
$red = $_POST['T41'];
$green = $_POST['T42'];
$yellow = $_POST['T43'];
$black = $_POST['T44'];




$query = "INSERT INTO images_tabla(Nombre,Precio,Bodega,imagenes,T18,T19,T20,T21,T22,T23,
T24,T25,T26,T27,T28,T29,T30,T31,T32,T33,T34,T35,T36,T37,T38,T39,T40,T41,T42,T43,T44) 
VALUES ('$nombre','$precio','$bodega','$Imagen','$talla','$talle','$talli','$tallo','$tallu',
'$azul','$roja','$verde','$blanca','$lila','$negro','$cafe'
,'$naranja','$celeste','$ploma','$plomo','$rosa','$morado',
'$amarillo','$caoba','$gris','$dorado','$tugsteno','$red',
'$green','$yellow','$black')";

$resultado = $conn->query($query);


if($resultado){
    
    header("Location: mostrar.php");
}
else{
    echo "No se inserto";
}



?>