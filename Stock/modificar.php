<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Index de Imagenes</title>
        <link rel="stylesheet" href="styles.css">
    </head>
<body>
            <?php
                include("conexion.php");

                $id = $_REQUEST['id'];

                $query = "SELECT * FROM images_tabla WHERE id ='$id'";
                $resultado= $conn->query($query);
                $row = $resultado->fetch_assoc();
            ?>

    <center><br/><br/><br/>
        <form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="starwars">

                    <input type="text" name="Nombre" placeholder="Nombre...." value="<?php echo $row['Nombre']; ?>"/><br/><br/>
                    <input type="text" name="Precio" placeholder="Precio" value="<?php echo $row['Precio']; ?>"/><br/><br/>
                    <input type="text" name="Bodega" placeholder="Bodega" value="<?php echo $row['Bodega']; ?>"/><br/><br/>
                    <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagenes']); ?>"/><br/><br/>
                    <input type="file" name="imagenes"/><br/><br/>
            </div>
            
        
                
                <input type="text" name="T18" placeholder="T18" value="<?php echo $row['T18']; ?>"/>
                <input type="text" name="T19" placeholder="T19" value="<?php echo $row['T19']; ?>"/>
                <input type="text" name="T20" placeholder="T20" value="<?php echo $row['T20']; ?>"/>
                <input type="text" name="T21" placeholder="T21" value="<?php echo $row['T21']; ?>"/>
                <input type="text" name="T22" placeholder="T22" value="<?php echo $row['T22']; ?>"/>
                <input type="text" name="T23" placeholder="T23" value="<?php echo $row['T23']; ?>"/>
                <input type="text" name="T24" placeholder="T24" value="<?php echo $row['T24']; ?>"/>
                <input type="text" name="T25" placeholder="T25" value="<?php echo $row['T25']; ?>"/>
                <input type="text" name="T26" placeholder="T26" value="<?php echo $row['T26']; ?>"/>
                <input type="text" name="T27" placeholder="T27" value="<?php echo $row['T27']; ?>"/>
                <input type="text" name="T28" placeholder="T28" value="<?php echo $row['T28']; ?>"/>
                <input type="text" name="T29" placeholder="T29" value="<?php echo $row['T29']; ?>"/>
                <input type="text" name="T30" placeholder="T30" value="<?php echo $row['T30']; ?>"/>
                <input type="text" name="T31" placeholder="T31" value="<?php echo $row['T31']; ?>"/>
                <input type="text" name="T32" placeholder="T32" value="<?php echo $row['T32']; ?>"/>    
                <input type="text" name="T33" placeholder="T33" value="<?php echo $row['T33']; ?>"/>
                <input type="text" name="T34" placeholder="T34" value="<?php echo $row['T34']; ?>"/>
                <input type="text" name="T35" placeholder="T35" value="<?php echo $row['T35']; ?>"/>
                <input type="text" name="T36" placeholder="T36" value="<?php echo $row['T36']; ?>"/>
                <input type="text" name="T37" placeholder="T37" value="<?php echo $row['T37']; ?>"/>
                <input type="text" name="T38" placeholder="T38" value="<?php echo $row['T38']; ?>"/>
                <input type="text" name="T39" placeholder="T39" value="<?php echo $row['T39']; ?>"/>
                <input type="text" name="T40" placeholder="T40" value="<?php echo $row['T40']; ?>"/>
                <input type="text" name="T41" placeholder="T41" value="<?php echo $row['T41']; ?>"/>
                <input type="text" name="T42" placeholder="T42" value="<?php echo $row['T42']; ?>"/>
                <input type="text" name="T43" placeholder="T43" value="<?php echo $row['T43']; ?>"/>
                <input type="text" name="T44" placeholder="T44" value="<?php echo $row['T44']; ?>"/>
        
            <input type="submit" value="Aceptar">
        </form>
    </center>
</body>
</html>