<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cssAdmin/EditarContratosActivos.css?v=1.0">
</head>
<body>
<?php

include "barralateral.php"
?>
<div class="main-content"> 
   <header>
       <div class="header-title">
           <h1>CONTRATOS - CONTRATOS ACTIVOS - EDITAR</h1>
       </div>
   </header>
   <?php include 'navcontratos.php'; ?>
   <div class="form-container">

   <form action="procesar_edicion_producto.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label class="enc" for="nombre">ARCHIVO CON CLAUSULAS</label>
                <input type="text" id="nombre" name="nombre" value="RUTA6.07678DISCO3">
            </div>
            <div class="form-group">
                <label class="enc" for="nombre">NOMBRE DEL CLIENTE</label>
                <input type="text" id="nombre" name="nombre" value="WILIAM ORTEGA">
            </div>
            <div class="form-group">
            <label class="enc" for="fechaInicio">FECHA CREACION</label>
             <input type="date" id="fechaInicio" name="fechaInicio" value="2025-10-12">
            </div>
            <div class="form-group">
            <label class="enc" for="fechaInicio">FECHA FIN</label>
            <input type="date" id="fechaInicio" name="fechaInicio" value="2025-10-12">
            </div>
                <button type="submit" class="btn-submit">EDITAR PRODUCTO</button>
            </form>

   </div>

</div>

    
</body>
</html>