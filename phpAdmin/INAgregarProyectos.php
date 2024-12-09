<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cssAdmin/AgregarProyectos.css?v=1.0">
</head>
<body>
<?php include 'barralateral.php'; ?>
<div class="main-content"> 
<header>
       <div class="header-title">
           <h1>PROYECTOS - NUEVO PROYECTO </h1>
       </div>
       <input type="search" placeholder="BUSCAR">
   </header>
   <?php include 'NavProyectos.php'; ?>
   <div class="form-container">

   <form action="procesar_edicion_producto.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label class="enc" for="nombre">CONTRATO REFERENCIA</label>
                <input type="text" id="nombre" name="nombre" value="RUTA6.07678DISCO3">
            </div>
           
            <div class="form-group">
            <label class="enc" for="fechaInicio">FECHA INICIO</label>
             <input type="date" id="fechaInicio" name="fechaInicio" value="2025-10-12">
            </div>
            <div class="form-group">
            <label class="enc" for="fechaInicio">FECHA FIN</label>
            <input type="date" id="fechaInicio" name="fechaInicio" value="2025-10-12">
            </div>
            <div class="form-group">
                <label class="enc" for="descripcion">DESCRIPCION PROYECTO</label>
                <textarea id="descripcion" name="descripcion" placeholder="Descripción de la categoría" required></textarea>
            </div>
                <button type="submit" class="btn-submit">AGREGAR PROYECTO</button>
            </form>

   </div>
</div>

    
</body>
</html>