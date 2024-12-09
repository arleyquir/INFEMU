<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');

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
            padding: 0px 25px 25px 25px;
            margin-left: 18%;
        }

        header {
            width: 98.5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 15px 15px 15px 5px;
            border-bottom: 1.5px solid #f0f0f0;
        }

        header .header-title h1 {
            font-size: 15px;
            margin: 0;
            color: #5D4037;
            font-weight: 100;
        }

        header input[type="search"] {
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

        header input[type="search"]::placeholder {
            color: #8B5E3C;
            opacity: 0.8;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 300;
        }

        header input[type="search"]:focus {
            outline: none;
            box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.3);
        }

        .distrib {
            display: grid;
            grid-template-columns: repeat(2, 1fr); 
            gap: 20px;
            margin-top: 30px;
            padding: 0px 20px 0px 0px;
        }

        .category-card {
            position: relative;
            width: 100%;
            height: 230px;
            box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.6);
            display: grid;
            grid-template-columns: 50% 50%;
            background-color: white;
            border-radius: 5px;
            transition: transform 0.05s, box-shadow 0.3s;
            overflow: hidden;
        }

        .category-card:hover {
            transform: scale(1.005);
            box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.3);
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
            border-radius: 0px;
        }

        .dep {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            color: #5D4037;
            padding: 10px;
            text-align: left;
            position: relative;
        }

        .cab {
            font-family: 'Arial', sans-serif;
            margin-bottom: 10px;
            border-bottom: 1px solid #5D4037;
            width: 100%;
            text-align: center;
            padding: 0px 0px 7px 0px;
        }

        .cab h1 {
            font-size: 13px;
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
            font-family: 'Arial', sans-serif;
            font-size: 12px;
            color: #5D4037;
            margin-left:10px;
            margin-top: 10px;
        }

        .esp h2 {
            font-size: 11px;
            margin: 0;
            font-weight: normal;
        }

        .esp p {
            margin: 0 0 0 9px; 
            font-weight:normal;
            color:#8B5E3C;
        }

        .acciones {
            position:relative;
            margin-top:55px;
            margin-left:160px;
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
    <?php include 'phpAdmin/barralateral.php
    '; ?>
    <div class="main-content">
        <header>
            <div class="header-title">
                <h1>SECCIONES</h1>
            </div>
            <input type="search" placeholder="BUSCAR">
        </header>

        <?php
        require 'phpfuncionesadmin/Secciones.php';

        // Llamar a la función para obtener las secciones
        $funcionbase = Infobasicaseccion();
        ?>

        <div class="distrib">
            <?php
            if (is_array($funcionbase)) {
                foreach ($funcionbase as $seccion) {
                    ?>
                    <div class="category-card">
                        <div class="vis"> 
                            <img src="<?php echo $seccion['ruta_imagen']; ?>" alt="Imagen de la sección">
                        </div>
                        <div class="dep">
                            <div class="cab">
                                <h1><?php echo htmlspecialchars($seccion['nombre_seccion']); ?></h1>
                            </div>
                            <div class="info">
                                <div class="esp"> 
                                    <h2>N MUEBLES:</h2>
                                    <p><?php echo htmlspecialchars($seccion['id_seccion']); ?></p>
                                </div>
                                <div class="esp"> 
                                    <h2>CATEGORIAS:</h2>
                                    <p>Por implementar</p>
                                </div>
                                <div class="esp"> 
                                    <h2>FECHA CREACIÓN:</h2>
                                    <p><?php echo htmlspecialchars($seccion['fecha_creacion']); ?></p>
                                </div>
                            </div>
                            <div class="acciones">
                                <a href="INVistaSecciones.php?id_seccion=<?php echo $seccion['id_seccion']; ?>">VER</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No se encontraron secciones.</p>";
            }
            ?>
        </div>

        <footer class="pie">
            <div class="agregar">
                <a href="INAgregarSeccion.php" class="nuevacategoria">NUEVA SECCION</a>
            </div>
        </footer>
    </div>  
</body>
</html>
