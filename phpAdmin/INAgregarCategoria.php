<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="../cssAdmin/AgregarCategoria.css?v=1.0">
</head>
<body>
    <?php 
        include 'barralateral.php';
        require '../phpfuncionesadmin/Categorias.php';
    ?>

    <div class="main-content">
        <header>
            <div class="header-title">
                <h1>SECCIÓN - AGREGAR CATEGORÍA</h1>
            </div>
        </header>
        <div class="form-container">
        <form action="INAgregarCategoria.php?id_seccion=<?php echo $_GET['id_seccion']; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="enc" for="nombre">NOMBRE DE LA CATEGORÍA</label>
                    <input type="text" id="nombre" name="nombreCategoria" placeholder="Nombre de la categoría" required>
                </div>

                <div class="form-group">
                    <label class="enc" for="descripcion">DESCRIPCIÓN DE LA CATEGORÍA</label>
                    <textarea id="descripcion" name="descripcionCategoria" placeholder="Ingrese una descripción de la categoría" required></textarea>
                </div>

                <div class="form-group">
                    <label class="enc" for="imagen">IMAGEN DE LA CATEGORÍA</label>
                    <div class="file-upload">
                        <label class="custom-file-label" id="fileLabel">Seleccionar Imagen</label>
                        <input type="file" id="imagen" name="imagen" accept="image/*" required onchange="mostrarNombreArchivo()">
                    </div>
                </div>
                
                <input type="hidden" name="id_seccion" value="<?php echo $_GET['id_seccion']; ?>">

                <button type="submit" class="btn-submit">AGREGAR CATEGORÍA</button>
            </form>

            <?php
                    $resultado = AgregarCategoria(); 
                    if ($resultado) {
                        echo "<p class='status-message'>" . htmlspecialchars($resultado) . "</p>";
                    }
            ?>
        </div>
    </div> 
    <script src="../jsAdmin/jasAgregarproducto.js" defer></script>
</body>
</html>
