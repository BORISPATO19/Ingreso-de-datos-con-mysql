<?php
include ("conexion.php");

$id = $_REQUEST['id'];

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



$query = "UPDATE images_tabla SET Nombre='$nombre', Precio='$precio', Bodega='$bodega', imagenes='$Imagen', 
T18='$talla', T19='$talle', T20='$talli', T21='$tallo', T22='$tallu', T23='$azul', T24='$roja', 
T25='$verde', T26='$blanca', T27='$lila', T28='$negro', T29='$cafe', T30='$naranja', T31='$celeste', 
T32='$ploma', T33='$plomo', T34='$rosa', T35='$morado', T36='$amarillo', T37='$caoba', T38='$gris', 
T39='$dorado', T40='$tugsteno', T41='$red', T42='$green', T43='$yellow', T44='$black'  WHERE id = '$id'";

$resultado = $conn->query($query);


if($resultado){
    
    header("Location: mostrar.php");
}
else{
    echo "No se modifico";
}



?>