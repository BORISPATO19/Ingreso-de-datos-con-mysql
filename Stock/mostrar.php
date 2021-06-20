<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostar imagenes</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <center>
    <div class="tabla">
        <h1>TABLA DE INVENTARIO-2021</h1>
        <a href="index.php">INGRESO DE DATOS</a>
        
    </div>
</center>
<form action="mostrarbusqueda.php" method="POST" class="form_search">
    <input type="text" name="buscar" placeholder="Buscar">
    <input type="submit" value="Buscar" class="btn_search">
</form>

    <div class="table">
        <table class="table-striped" border="2">
            <thead>
                <tr>
                    <th colspan="5"><a href="index.php">Nuevo</a></th>
                </tr>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Bodega</th>
                    <th>imagen</th>  
                    <th>18</th>
                    <th>19</th>
                    <th>20</th>
                    <th>21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    <th>25</th>
                    <th>26</th>
                    <th>27</th>
                    <th>28</th>
                    <th>29</th>
                    <th>30</th>
                    <th>31</th>
                    <th>32</th>
                    <th>33</th>
                    <th>34</th>
                    <th>35</th>
                    <th>36</th>
                    <th>37</th>
                    <th>38</th>
                    <th>39</th>
                    <th>40</th>
                    <th>41</th>
                    <th>42</th>
                    <th>43</th>
                    <th>44</th>
                    <th colspan="2">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("conexion.php");

                    $query = "SELECT * FROM images_tabla";
                    $resultado= $conn->query($query);
                    while($row = $resultado->fetch_assoc()){?>
                        
                
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['Nombre']; ?></td>
                        <td><?php echo $row['Precio']; ?></td>
                        <td><?php echo $row['Bodega']; ?></td>
                        <td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagenes']); ?>"/></td>
                        <td><?php echo $row['T18']; ?></td>
                        <td><?php echo $row['T19']; ?></td>
                        <td><?php echo $row['T20']; ?></td>
                        <td><?php echo $row['T21']; ?></td>
                        <td><?php echo $row['T22']; ?></td>
                        <td><?php echo $row['T23']; ?></td>
                        <td><?php echo $row['T24']; ?></td>
                        <td><?php echo $row['T25']; ?></td>
                        <td><?php echo $row['T26']; ?></td>
                        <td><?php echo $row['T27']; ?></td>
                        <td><?php echo $row['T28']; ?></td>
                        <td><?php echo $row['T29']; ?></td>
                        <td><?php echo $row['T30']; ?></td>
                        <td><?php echo $row['T31']; ?></td>
                        <td><?php echo $row['T32']; ?></td>
                        <td><?php echo $row['T33']; ?></td>
                        <td><?php echo $row['T34']; ?></td>
                        <td><?php echo $row['T35']; ?></td>
                        <td><?php echo $row['T36']; ?></td>
                        <td><?php echo $row['T37']; ?></td>
                        <td><?php echo $row['T38']; ?></td>
                        <td><?php echo $row['T39']; ?></td>
                        <td><?php echo $row['T40']; ?></td>
                        <td><?php echo $row['T41']; ?></td>
                        <td><?php echo $row['T42']; ?></td>
                        <td><?php echo $row['T43']; ?></td>
                        <td><?php echo $row['T44']; ?></td>
                        
                        <th><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></th>
                        <th><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
                    </tr>
                <?php

                    }
                ?>

            </tbody>
        </table>
        </div>
  
</body>
</html>