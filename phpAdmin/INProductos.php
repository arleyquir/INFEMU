<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arte & Madera</title>
    <link rel="stylesheet" href="../cssAdmin/Productos.css?v=1.0">
    <style>
        
        .actions a {
            display: inline-block;
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

        .actions a:hover {
            background-color: rgba(255, 223, 0, 0.3);
        }
    </style>
</head>
<body>
<?php
include "barralateral.php";
?> 
<div class="main-content">
   
   <header>
       <div class="header-title">
           <h1>PRODUCTOS</h1>
       </div>
       <input type="search" placeholder="BUSCAR">
   </header>
   <div class="product-grid">
                <div class="product-card">
                    <div class="indicador"><h1>DISPONIBLE</h1></div>
                    <img src="../img/producto2.jpg" alt="Producto Imagen">
                    <div class="info">
                    <p class="prc">$400.000</p>
                    <p>Puerta Roble Sereno acabado fino</p>
                    </div>
                    <div class="actions">
                      <a href="verProducto.php?id=1">VER</a>
                      <a href="INEditarProducto.php">EDITAR</a>
                      <a href="INEliminarProducto.php">ELIMINAR</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="indicador"><h1>DISPONIBLE</h1></div>
                    <img src="../img/producto3.jpg" alt="Producto Imagen">
                    <div class="info">
                    <p class="prc">$500.000</p>
                    <p>Estante blanco con 3 divisiones</p>
                    </div>
                    <div class="actions">
                      <a href="verProducto.php?id=2">VER</a>
                      <a href="editarProducto.php?id=2">EDITAR</a>
                      <a href="eliminarProducto.php?id=2">ELIMINAR</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="indicador"><h1>DISPONIBLE</h1></div>
                    <img src="../img/producto4.jpg" alt="Producto Imagen">
                    <div class="info">
                    <p class="prc">$1,500.000</p>
                    <p>Closet cafe acabado en palisandro</p>
                    </div>
                    <div class="actions">
                      <a href="verProducto.php?id=3">VER</a>
                      <a href="editarProducto.php?id=3">EDITAR</a>
                      <a href="eliminarProducto.php?id=3">ELIMINAR</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="indicador"><h1>DISPONIBLE</h1></div>
                    <img src="../img/producto5.jpg" alt="Producto Imagen">
                    <div class="info">
                    <p class="prc">$1,500.000</p>
                    <p>Closet cafe acabado en arce</p>
                    </div>
                    <div class="actions">
                      <a href="verProducto.php?id=4">VER</a>
                      <a href="editarProducto.php?id=4">EDITAR</a>
                      <a href="eliminarProducto.php?id=4">ELIMINAR</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="indicador"><h1>AGOTADO</h1></div>
                    <img src="../img/producto6.jpg" alt="Producto Imagen">
                    <div class="info">
                    <p class="prc">$700.000</p>
                    <p>Lava platos pequeño con gabinete acabado en haya</p>
                    </div>
                    <div class="actions">
                      <a href="verProducto.php?id=5">VER</a>
                      <a href="editarProducto.php?id=5">EDITAR</a>
                      <a href="eliminarProducto.php?id=5">ELIMINAR</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="indicador"><h1>AGOTADO</h1></div>
                    <img src="../img/producto1212.jpg" alt="Producto Imagen">
                    <div class="info">
                    <p class="prc">$500.000</p>
                    <p>Mesa para tv monet, wengue</p>
                    </div>
                    <div class="actions">
                      <a href="verProducto.php?id=6">VER</a>
                      <a href="editarProducto.php?id=6">EDITAR</a>
                      <a href="eliminarProducto.php?id=6">ELIMINAR</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="indicador"><h1>AGOTADO</h1></div>
                    <img src="../img/producto7.jpg" alt="Producto Imagen">
                    <div class="info">
                    <p class="prc">$900.000</p>
                    <p>Mesa para tv samir, café claro</p>
                    </div>
                    <div class="actions">
                      <a href="verProducto.php?id=7">VER</a>
                      <a href="editarProducto.php?id=7">EDITAR</a>
                      <a href="eliminarProducto.php?id=7">ELIMINAR</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="indicador"><h1>AGOTADO</h1></div>
                    <img src="../img/producto6.jpg" alt="Producto Imagen">
                    <div class="info">
                    <p class="prc">$700.000</p>
                    <p>Lava platos pequeño con gabinete acabado en haya</p>
                    </div>
                    <div class="actions">
                      <a href="verProducto.php?id=8">VER</a>
                      <a href="editarProducto.php?id=8">EDITAR</a>
                      <a href="eliminarProducto.php?id=8">ELIMINAR</a>
                    </div>
                </div>
    </div>

    <footer class="pie">
        <div class="agregar"> <a href="INAgregarMueble.php" class="category-card new-category">NUEVO PRODUCTO</a></div>
    </footer>

</div> 
</body>
</html>