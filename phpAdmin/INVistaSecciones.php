<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style> 
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffffff;
            color: #0F172A;
            margin: 0;
            display: flex;
        }

        .main-content {
            flex: 1;
            padding: 0 25px 25px;
            margin-left: 18%;
        }

        header {
            width: 98.5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            padding: 20px 15px 20px 5px;
            border-bottom: 1.5px solid #f0f0f0;
        }

        header .header-title h1 {
            font-size: 15px;
            margin: 0;
            color: #5D4037;
            font-weight: 100;
        }

        .desc {
            width: 98.5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 30px 0 0px;
            padding: 0 0 40px;
            border-bottom: 1.5px solid #f0f0f0;
        }

        .ent {
            width: 100%;
            height: 230px;
            display: grid;
            grid-template-columns: 40% 60%;
            background-color: white;
            overflow: hidden;
        }

        .vis {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .vis img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

        .dep {
            display: flex;
            flex-direction: column;
            padding: 10px 0px 10px 10px;
            color: #5D4037;
            position: relative;
        }

        .cab {
            font-family: 'Arial', sans-serif;
            margin-bottom: 10px;
            border-bottom: 1px solid #5D4037;
            width: 100%;
            text-align: center;
            padding-bottom: 7px;
        }

        .cab h1 {
            font-size: 16px;
            margin: 0;
            font-weight: normal;
        }

        .info {
            margin-top: 20px;
            width: 100%;
        }

        .esp {
            display: flex;
            align-items: center;
            font-size: 12px;
            color: #5D4037;
            margin: 10px 0 0 20px;
        }

        .esp h2 {
            font-size: 11px;
            margin: 0;
            font-weight: normal;
        }

        .esp p {
            margin: 0 0 0 9px; 
            color: #8B5E3C;
        }

        .acciones {
            position: absolute;
            bottom: 20px;
            right: 0px;
        }

        .acciones a {
            background-color: #fff;
            font-size: 11px;
            color: #5D4037;
            text-decoration: none;
            padding: 8px 10px;
            margin: 0 5px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0px 0.3px 1px 0px rgba(0, 0, 0, 0.6);
        }

        .acciones a:hover {
            background-color: rgba(255, 223, 0, 0.3);
            transform: scale(1.05);
        }

        .busc {
            width: 98.5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 15px 4px 15px 5px;
            border-bottom: 1.5px solid #f0f0f0;
        }

        .busc .titulo h1 {
            font-size: 13px;
            margin: 0;
            color: #5D4037;
            font-weight: 100;
        }

        .busc input[type="search"] {
            padding: 14px;
            width: 400px;
            height: 30px;
            font-size: 14px;
            border-radius: 4px;
            border: 1.5px solid transparent;
            box-shadow: 0px 0px 0.9px 0px rgba(0, 0, 0, 0.6);
            color: #5D4037;
            transition: box-shadow 0.5s ease;
        }

        .busc input[type="search"]::placeholder {
            color: #8B5E3C;
            opacity: 0.8;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 300;
        }

        .busc input[type="search"]:focus {
            outline: none;
            box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.3);
        }

        .conte {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px;
            margin-top: 30px;
            padding: 0px 15px 0px 0px;
        }

        .category-card {
            position: relative;
            width: 100%;
            height: 340px;
            box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.6);
            background-color: white;
            border-radius: 5px;
            transition: transform 0.05s, box-shadow 0.3s;
            overflow: hidden;
            justify-content: flex-start;
            color: #5D4037;
        }

        .category-card:hover {
            transform: scale(1.005);
            box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.3);
        }

        .category-card .imag {
            width: 100%;
            height: 65%; /* Ajuste al 60% de la altura */
        }

        .category-card .imag img {
            width: 100%;
            height: 100%;
        }

        .name {
            font-family: 'Arial', sans-serif;
            margin-bottom: 10px;
            border-bottom: 1px solid #5D4037;
            width: 100%;
            text-align: center;
            padding: 0px 0px 7px 0px;
            margin-top:20px;
            width:60%;
            margin-left:20%;
        }

        .name  h1 {
            font-size: 14px;
            margin: 0;
            font-weight: normal;
        }

        .accion {
            width:80%;
            margin-top:25px;
            margin-left:15%;
        }

        .accion a {
            background-color: #fff;
            font-size: 11px;
            color: #5D4037;
            text-decoration: none;
            padding: 8px 10px;
            margin: 0 5px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0px 0.3px 1px 0px rgba(0, 0, 0, 0.6);
        }

        .accion a:hover {
            background-color: rgba(255, 223, 0, 0.3);
            transform: scale(1.05);
        }

        .nuevacategoria {
    display: block;
    text-align: center;
    background-color: #ffffff;
    font-size: 20px;
    padding: 20px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 7px;
    color: #5D4037;
    text-decoration: none;
    width: 100%;
    box-shadow: 0px 0.3px 1px 0px rgba(0, 0, 0, 0.6);
    transition: transform 1s;
    transition: background-color 0.6s;
    margin-bottom: 5px; /* Añadir margen inferior de 10px */
}

.nuevacategoria:hover {
    transform: scale(1.01);
    box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.3);
    background-color: rgba(255, 223, 0, 0.3);
}

.pie {
    width: 98.5%;
    height: 100px;
    margin-top: 0px;
    display: flex; /* Cambiar a flex para alinear el contenido correctamente */
    justify-content: center; /* Centrar el contenido horizontalmente */
    align-items: flex-end; /* Alinear el contenido al fondo */
}

.agregar {
    width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
    margin: 0; /* Eliminar margen inferior */
}



    </style>
</head>
<body>
    <?php

    include 'barralateral.php';
    require '../phpfuncionesadmin/Secciones.php';


    if (isset($_GET['id_seccion'])) {

        $id_seccion = $_GET['id_seccion'];
        $seccion = IfoSeccionesprincipal($id_seccion);
        $categoria=Contecategoria($id_seccion);
    
    }

    ?>

    <div class="main-content">
        <header>
            <div class="header-title">
                <h1>SECCION - <?php echo $seccion['nombre_seccion'];?> </h1>
            </div>
        </header>

        <?php
            if (is_array($seccion)){
        ?>
        <div class="desc">
            <div class="ent">
                <div class="vis"> 
                    <img src="<?php echo $seccion['ruta_imagen']; ?>" alt="Category Image">
                </div>
                <div class="dep">
                    <div class="cab">
                        <h1><?php echo $seccion['nombre_seccion'];?></h1>
                    </div>
                    <div class="info">
                        <div class="esp"> 
                            <h2>N MUEBLES:</h2>
                            <p><?php echo $seccion['id_seccion'];?></p>
                        </div>
                        <div class="esp"> 
                           <?php if (is_array($categoria)){?> 
                            <h2>CATEGORIAS:</h2>
                            <p><?php echo htmlspecialchars($categoria['total_categorias'])?></p>
                            <?php 
                           } else{
                            echo $categoria;
                           }

                            ?>
                        </div>
                        <div class="esp"> 
                            <h2>FECHA CREACIÓN:</h2>
                            <p><?php echo $seccion['fecha_creacion'];?></p>
                        </div>
                        <div class="acciones">
                            <a href="INVistaSecciones.php">EDITAR</a>
                            <a href="#">ELIMINAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            }
        ?>

    
        <div class="distrib">
            <div class="busc">
                <div class="titulo">
                    <h1>CATEGORIAS ASOCIADAS A <?php echo $seccion['nombre_seccion'];?> </h1>
                </div>
                <input type="search" placeholder="BUSCAR">
            </div>  

         <?php 
         require '../phpfuncionesadmin/Categorias.php';

        $categorias=InfoCategoriabasicas($id_seccion); 
         ?>

            <div class="conte">

            <?php 
             if(is_array($categorias) && !empty($categorias)){
               
                foreach ($categorias as $categoria) {
            ?>
                <div class="category-card">
                    <div class="imag">
                    <img src="<?= htmlspecialchars($categoria['ruta_imagen']) ?>" alt="Imagen de <?= htmlspecialchars($categoria['nombre_categoria']) ?>">
                    </div>
                    <div class="name">
                        <h1><?php echo htmlspecialchars($categoria['nombre_categoria']); ?></h1>
                    </div>
                    <div class="accion">
                    <a href="#">VER</a>
                    <a href="INEditarCategoria.php">EDITAR</a>
                    <a href="INEliminarCategoria.php">ELIMINAR</a>
                    </div>
                </div>
                
            <?php 
             } }else{
                echo 'no existen categorías con esta sección '; 

             }
            ?>
            </div>


            <footer class="pie">
        <div class="agregar">
            <a href="INAgregarCategoria.php?id_seccion=<?php echo $seccion['id_seccion']; ?>" class="nuevacategoria">NUEVA CATEGORIA</a>
        </div>
       </footer>
        </div>
    </div>  
</body>
</html>
