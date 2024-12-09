<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../cssAdmin/EditarProducto.css?v=1.0">
</head>
<body>
    <?php include 'barralateral.php'; ?>
    <div class="main-content">
        <header>
            <div class="header-title">
                <h1>PRODUCTOS - EDITAR PRODUCTO</h1>
            </div>
        </header>

        <div class="form-container">
            <form action="procesar_edicion_producto.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="enc" for="precio">PRECIO DEL MUEBLE</label>
                    <input type="number" id="precio" name="precio" placeholder="Ingrese el precio" value="PRODUCT_PRICE" required>
                </div>

                <div class="form-group">
                    <label class="enc" for="descripcion">DESCRIPCIÓN DEL PRODUCTO</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Ingrese una descripción del producto" required>PRODUCT_DESCRIPTION</textarea>
                </div>

                <div class="conimps">
                    <div class="form-group">
                        <label class="enc" for="categoria">CATEGORÍA DEL PRODUCTO</label>
                        <div class="custom-select-wrapper">
                            <div class="custom-select">
                                <div class="custom-select-display"><span>PRODUCT_CATEGORY</span></div>
                                <div class="custom-options">
                                    <div data-value="habitacion"><span>Habitación</span></div>
                                    <div data-value="sala"><span>Sala</span></div>
                                    <div data-value="cocina"><span>Cocina</span></div>
                                </div>
                                <select id="categoria" name="categoria" style="display: none;">
                                    <option value="habitacion">Habitación</option>
                                    <option value="sala">Sala</option>
                                    <option value="cocina">Cocina</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="enc" for="imagen">IMAGEN DEL PRODUCTO</label>
                        <div class="file-upload">
                            <label class="custom-file-label" id="fileLabel">Seleccionar Imagen</label>
                            <input type="file" id="imagen" name="imagen" accept="image/*" onchange="mostrarNombreArchivo()">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn-submit">EDITAR PRODUCTO</button>
            </form>
        </div>
    </div> 
    <script src="../jsAdmin/jasEditarProducto.js" defer></script>
</body>
</html>