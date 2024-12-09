<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="../cssAdmin/EliminarProducto.css?v=1.0">
</head>
<body>
    <?php include "barralateral.php"; ?>

    <div class="main-content">
        <header>
            <div class="header-title">
                <h1>PRODUCTO - ELIMINAR PRODUCTO</h1>
            </div>
        </header>

        <div class="form-container">
            <p class="warning">ESTÁS A PUNTO DE ELIMINAR EL SIGUIENTE PRODUCTO:</p>
            
            <div class="product-image">
                <img src="../ruta/de/imagen-del-producto.jpg" alt="Imagen del Producto">
            </div>

            <div class="product-info">
                <p class="detail"><strong>NOMBRE:</strong> Puerta Roble Sereno acabado fino</p>
                <p class="detail"><strong>PRECIO:</strong> $400.000</p>
                <p class="detail"><strong>DESCRIPCIÓN:</strong> Puerta de madera de roble con un acabado sereno y detalles finos.</p>
            </div>

            <form action="#" method="post">
                <button type="submit" class="btn-delete">ELIMINAR PRODUCTO</button>
            </form>
        </div>
    </div>
</body>
</html>