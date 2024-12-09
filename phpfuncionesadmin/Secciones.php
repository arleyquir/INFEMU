<?php
require_once '../conexion/claseconexion.php';

$conexion = new CONE();
$pdo = $conexion->getConnection();

function AgregarSeccion() {
    global $pdo;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            if (isset($_FILES['imagen'], $_POST['nombre']) && $_FILES['imagen']['error'] == 0) {
                $nombre_seccion = $_POST['nombre'];
                $nombre_imagen = $_FILES['imagen']['name'];
                
                $fecha = date("Y-m-d", strtotime("-1 day"));
                
                $tipo_imagen = pathinfo($nombre_imagen, PATHINFO_EXTENSION);
                $tipos_permitidas = ["jpg", "jpeg", "png"];
                $carpeta_imagenes = "../img/";
                $ruta_archivo = $carpeta_imagenes . basename($nombre_imagen);

                if (in_array($tipo_imagen, $tipos_permitidas)) {
                    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_archivo)) {
                        $sql = "INSERT INTO seccion (nombre_seccion, ruta_imagen, fecha_creacion) VALUES (:nombre, :ruta, :fecha)";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(':nombre', $nombre_seccion, PDO::PARAM_STR);
                        $stmt->bindParam(':fecha', $fecha, PDO::PARAM_STR);
                        $stmt->bindParam(':ruta', $ruta_archivo, PDO::PARAM_STR); 

                        if ($stmt->execute()) {
                            return "Sección agregada correctamente.";
                        } else {
                            return "Error al agregar la sección: " . implode(", ", $stmt->errorInfo());
                        }
                    } else {
                        return "Hubo un error al subir la imagen.";
                    }
                } else {
                    return "El tipo de imagen no es permitido.";
                }
            } else {
                return "Verificar que los campos no estén vacíos y que haya seleccionado una imagen.";
            }
        } catch (PDOException $e) {
            return "Error de base de datos: " . $e->getMessage();
        } catch (Exception $e) {
            return "Error inesperado: " . $e->getMessage();
        }
    }
    return null;
}


function Infobasicaseccion() { 
    global $pdo; 

    if ($pdo) {
        try { 
            $sql = "SELECT id_seccion, nombre_seccion, ruta_imagen,fecha_creacion FROM seccion";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(); 
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            return $resultados;
        } catch (PDOException $e) { 
            return "Error de base de datos: " . $e->getMessage();
        } catch (Exception $e) { 
            return "Error inesperado: " . $e->getMessage();
        }
    }
    return null;
}
function Contecategoria($id_seccion) {
    global $pdo;

    if ($pdo) {
        try {
            $sql = "SELECT s.id_seccion, COUNT(c.id_categoria) AS total_categorias
                    FROM seccion s
                    LEFT JOIN categoria c ON s.id_seccion = c.id_seccion
                    WHERE s.id_seccion = :id_seccion
                    GROUP BY s.id_seccion";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id_seccion', $id_seccion, PDO::PARAM_INT);
            $stmt->execute();
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($resultado) {
                return $resultado;
            } else {
                return "No se encontraron categorías para la sección especificada.";
            }
        } catch (PDOException $e) {
            return "Error de base de datos: " . $e->getMessage();
        } catch (Exception $e) {
            return "Error inesperado: " . $e->getMessage();
        }
    }
    return "Error: No hay conexión a la base de datos.";
}






function IfoSeccionesprincipal($id_seccion) {
    global $pdo;

    try {
        if (!is_numeric($id_seccion)) {
            throw new Exception("El ID proporcionado no es válido.");
        }

        $sql = "SELECT id_seccion, nombre_seccion, ruta_imagen, fecha_creacion 
                FROM seccion 
                WHERE id_seccion = :id_seccion";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_seccion', $id_seccion, PDO::PARAM_INT);
        $stmt->execute();

        $resultados = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$resultados) {
            return ["error" => "No se encontró ninguna sección con el ID proporcionado."];
        }

        return $resultados;

    } catch (PDOException $e) {
        return ["error" => "Error de base de datos: " . $e->getMessage()];
    } catch (Exception $e) {
        return ["error" => "Error inesperado: " . $e->getMessage()];
    }
}




function Infoseccioncompleta(){ 

}

?>