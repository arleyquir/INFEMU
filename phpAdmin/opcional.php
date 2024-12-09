<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cssAdmin/categoria.css?v=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'barralateral.php'; ?>
<div class="main-content">
   
    <header>
        <div class="header-title">
            <h1>CATEGORIA</h1>
        </div>
        <input type="search" placeholder="BUSCAR">
    </header>
    
    <div class="category-container">
        <div class="category-card">
            <div class="cab">
                <h1>HABITACION</h1>
            </div>
            <img src="../img/categoriahabitacion2.jpg" alt="Category Image">
            <div class="info">
                <p>Descubre nuestra selección de muebles para convertir tu dormitorio en un oasis de estilo y confort. Ofrecemos camas elegantes, armarios amplios y mesitas de noche funcionales que combinan diseño moderno y practicidad.</p>
            </div>
            <div class="actions">
                <button class="edit">
                    <a href="INEditarCategoria.php" style="color: inherit; text-decoration: none;">EDITAR</a>
                </button>
                <button class="delete">
                    <a href="INEliminarCategoria.php" style="color: inherit; text-decoration: none;">ELIMINAR</a>
                </button>
            </div>
        </div>

        <div class="category-card">
            <div class="cab">
                <h1>SALA</h1>
            </div>
            <img src="../img/categoria sala .jpg" alt="Category Image">
            <div class="info">
                <p>Descubre nuestra colección de muebles para sala que combina comodidad, estilo y funcionalidad. Encuentra sofás, sillones, mesas y accesorios ideales para crear un espacio de reunión elegante y acogedor.</p>
            </div>
            <div class="actions">
                <button class="edit">
                    <a href="INCategoriasremplazo.php" style="color: inherit; text-decoration: none;">EDITAR</a>
                </button>
                <button class="delete">
                    <a href="HtmlAdmin/EliminarCategoria.html" style="color: inherit; text-decoration: none;">ELIMINAR</a>
                </button>
            </div>
        </div>

        <div class="category-card">
            <div class="cab">
                <h1>COCINA</h1>
            </div>
            <img src="../img/categoriacocina.jpg" alt="Category Image">
            <div class="info">
                <p>Optimiza tu espacio culinario con nuestra gama de muebles diseñados para la cocina. Encuentra gabinetes funcionales, islas versátiles y mesas de comedor que maximizan el espacio y mejoran la organización.</p>
            </div>
            <div class="actions">
                <button class="edit">
                    <a href="HtmlAdmin/EditarCategoria.html" style="color: inherit; text-decoration: none;">EDITAR</a>
                </button>
                <button class="delete">
                    <a href="HtmlAdmin/EliminarCategoria.html" style="color: inherit; text-decoration: none;">ELIMINAR</a>
                </button>
            </div>
        </div>
        
    </div>

    <footer class="pie">
        <div class="agregar">
            <a href="INAgregarCategoria.php" class="nuevacategoria">NUEVA CATEGORIA</a>
        </div>
    </footer>
</div>
</body>
</html>