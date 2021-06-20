<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   
    <center><br/>
    <div class="texto">
        <h1>Ingresos de Datos</h1>
        <a href="mostrar.php">Base de Datos</a>
    </div>
    
    <form action="proceso_guardar.php" method="POST" enctype="multipart/form-data"></th>
            <div class="started">
                <th>Nombre <input type="text" REQUIRED name="Nombre" placeholder="Nombre...." value=""/><br/><br/>
                <th>Precio <input type="text" name="Precio"/></th><br/><br/>
                <th>Bodega <input type="text" name="Bodega"/></th><br/><br/>
                <th>Imagen <input type="file" REQUIRED name="imagenes"/></th><br/><br/>
            </div>

            <div class="start">
                <section class="station">
                   <input type="text" name="T18" placeholder="18"/><br/><br/>
                   <input type="text" name="T19" placeholder="19"/><br/><br/>
                   <input type="text" name="T20" placeholder="20"/><br/><br/>
                   <input type="text" name="T21" placeholder="21"/><br/><br/>
                   <input type="text" name="T22" placeholder="22"/><br/><br/>
                   <input type="text" name="T23" placeholder="23"/><br/><br/>
                 </section>

                <section class="station-one" >
                    <input class="street" type="text" name="T24" placeholder="24"/><br/><br/>
                    <input class="street" type="text" name="T25" placeholder="25"/><br/><br/>
                    <input class="street" type="text" name="T26" placeholder="26"/><br/><br/>
                    <input class="street" type="text" name="T27" placeholder="27"/><br/><br/>
                    <input class="street" type="text" name="T28" placeholder="28"/><br/><br/>
                    <input class="street" type="text" name="T29" placeholder="29"/><br/><br/>
                </section>

                <section class="station-two" >
                    <input class="street" type="text" name="T30" placeholder="30"/><br/><br/>
                    <input class="street" type="text" name="T31" placeholder="31"/><br/><br/>
                    <input class="street" type="text" name="T32" placeholder="32"/><br/><br/>
                    <input class="street" type="text" name="T33" placeholder="33"/><br/><br/>
                    <input class="street" type="text" name="T34" placeholder="34"/><br/><br/>
                    <input class="street" type="text" name="T35" placeholder="35"/><br/><br/>
                </section>

                <section class="station-tree">
                    <input class="street" type="text" name="T36" placeholder="36"/><br/><br/>
                    <input class="street" type="text" name="T37" placeholder="37"/><br/><br/>
                    <input class="street" type="text" name="T38" placeholder="38"/><br/><br/>
                    <input class="street" type="text" name="T39" placeholder="39"/><br/><br/>
                    <input class="street" type="text" name="T40" placeholder="40"/><br/><br/>
                    <input class="street" type="text" name="T41" placeholder="41"/><br/><br/>
                </section>

                <section class="station-four">
                    <input class="street" type="text" name="T42" placeholder="42"/><br/><br/>
                    <input class="street" type="text" name="T43" placeholder="43"/><br/><br/>
                    <input class="street" type="text" name="T44" placeholder="44"/><br/><br/>
                </section>
            </div>

            <input class="steer" type="submit" value="Aceptar">
    </form>
    </center>
</body>
</html>