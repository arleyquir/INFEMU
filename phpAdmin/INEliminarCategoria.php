<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cssAdmin/EliminarCategoria.css?v=1.0">
</head>
<body>
    <?php
    include "barralateral.php";
    ?>
    <div class="main-content">
   
   <header>
       <div class="header-title">
           <h1>CATEGORÍA - ELIMINAR CATEGORÍA</h1>
       </div>
   </header>

   <div class="form-container">
        <p class="aviso">ESTÁS A PUNTO DE ELIMINAR LA SIGUIENTE CATEGORÍA:</p>
        <div class="category-info">
            <p class="espe"><strong>NOMBRE:</strong> Sala</p>
            <p class="espe"><strong>RUTA IMAGEN:</strong> RUTA5.NUMERO6</p>
            <p class="espe"><strong>DESCRIPCION:</strong> Desde sofás lujosos hasta mesas auxiliares</p>
        </div>
        <form action="#" method="post">
            <button type="submit" class="btn-delete">ELIMINAR CATEGORIA</button>
        </form>
    </div>

</div>
</body>
</html>