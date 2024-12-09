<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cssAdmin/EditarCategoria.css?v=1.0">
</head>
<body>
<?php 
include "barralateral.php"; 
?>
<div class="main-content">
   
   <header>
       <div class="header-title">
           <h1>CATEGORÍA - EDITAR CATEGORÍA</h1>
       </div>
   </header>

   <div class="form-container">
        <form action="#" method="post">
            <div class="form-group">
                <label for="nombre">NOMBRE</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre de la categoría">
            </div>
            <div class="form-group">
                <label for="ruta-imagen">RUTA IMAGEN</label>
                <input type="text" id="ruta-imagen" name="ruta-imagen" placeholder="Ingrese la ruta de la imagen">
            </div>
            <div class="form-group">
                <label for="descripcion">DESCRIPCION CATEGORIA</label>
                <textarea id="descripcion" name="descripcion" rows="4" placeholder="Ingrese la descripción de la categoría"></textarea>
            </div>
            <button type="submit" class="btn-submit">GUARDAR CAMBIOS </button>
        </form>
    </div>

</div>



</body>
</html>