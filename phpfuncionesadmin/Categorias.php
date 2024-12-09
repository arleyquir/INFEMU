<?php

require_once '../conexion/claseconexion.php';

$conexion = new CONE();
$pdo = $conexion->getConnection();

function Listarsecciones() { 
    global $pdo;
    try { 
        $sql = "SELECT id_seccion, nombre_seccion FROM seccion";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    } catch (PDOException $e) { 
        return "Error de base de datos: " . $e->getMessage();
    }
}

function AgregarCategoria() {
    global $pdo;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            if (isset($_FILES['imagen'], $_POST['nombreCategoria'], $_POST['descripcionCategoria'], $_POST['id_seccion']) && $_FILES['imagen']['error'] == 0) {

                $nombre_categoria = htmlspecialchars($_POST['nombreCategoria'], ENT_QUOTES);
                $descripcion = htmlspecialchars($_POST['descripcionCategoria'], ENT_QUOTES);
                $id_sec = intval($_POST['id_seccion']);
                $carpeta_imagenes = "../img/";

                if (!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0755, true);
                }

                $nombre_imagen = uniqid('categoria_', true) . '.' . pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
                $ruta_archivo = $carpeta_imagenes . $nombre_imagen;

                if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_archivo)) {
                    $sql = "INSERT INTO categoria (nombre_categoria, descripcion, ruta_imagen, id_seccion) VALUES (:nombre, :descripcion, :ruta, :seccion)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':nombre', $nombre_categoria, PDO::PARAM_STR);
                    $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
                    $stmt->bindParam(':ruta', $ruta_archivo, PDO::PARAM_STR);
                    $stmt->bindParam(':seccion', $id_sec, PDO::PARAM_INT);

                    if ($stmt->execute()) {
                        return "Categoría agregada correctamente.";
                    } else {
                        return "Error al agregar la categoría.";
                    }
                } else {
                    return "Error al mover la imagen.";
                }
            } else {
                return "Datos o imagen no válidos.";
            }
        } catch (PDOException $e) {
            return "Error de base de datos: " . $e->getMessage();
        }
    }
    return null;
}

function InfoCategoriabasicas($id_seccion) {
    global $pdo;
    try { 
        $sql = "SELECT id_categoria, nombre_categoria, descripcion, ruta_imagen, id_seccion FROM categoria WHERE id_seccion = :id_seccion";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_seccion', $id_seccion, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    } catch (PDOException $e) { 
        return "Error de base de datos: " . $e->getMessage();
    }
}
