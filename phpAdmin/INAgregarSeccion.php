<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Sección</title>
    <link rel="stylesheet" href="../cssAdmin/AgregarSeccion.css">
</head>
<body>
    <?php include "barralateral.php"; ?>
    
    <div class="main-content">
        <header>
            <div class="header-title">
                <h1>CATEGORÍA - AGREGAR SECCIÓN</h1>
            </div>
        </header>
        
        <div class="form-container">
            <form action="INAgregarSeccion.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <!-- Caja de texto para el nombre -->
                    <div class="form-group label-input">
                        <label for="nombre">NOMBRE</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre de la sección" required>
                    </div>

                    <!-- Apartado de seleccionar imagen -->
                    <div class="form-group file-group">
                        <label for="imagen">IMAGEN DE LA SECCIÓN</label>
                        <div class="file-upload">
                            <label class="custom-file-label" id="fileLabel">Seleccionar imagen</label>
                            <input type="file" id="imagen" name="imagen" accept="image/*" required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn-submit">AGREGAR SECCIÓN</button>
            </form>

            <?php
            require '../phpfuncionesadmin/Secciones.php';
            $mensaje = AgregarSeccion();
            if ($mensaje) {
                echo "<p class='status-message'>$mensaje</p>";
                
                if (strpos($mensaje, 'Sección agregada correctamente.') !== false) {
                    echo "<script>
                        setTimeout(function() {
                            window.location.href = 'index.php';
                        }, 5000); // Redirige después de 5 segundos
                    </script>";
                }
            }
            ?>
        </div>
    </div>

    <script src="../jsAdmin/jasAgregarproducto.js"></script>
</body>
</html>
