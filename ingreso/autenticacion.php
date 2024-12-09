<?php 
session_start();
require '../conexion/claseconexion.php'; 

// Crear instancia de la conexión
$conexion = new CONE();
$pdo = $conexion->getConnection(); 

if (!isset($_POST['username'], $_POST['password'])) {
    header('Location: index.html');
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];

try {
    // Preparar la consulta para evitar inyección SQL
    $stmt = $pdo->prepare('SELECT id_usuario, contraseña FROM usuario_general WHERE email = :username');
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Comparar la contraseña directamente
        if ($password === $user['contraseña']) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $username;
            $_SESSION['id'] = $user['id_usuario']; // Cambia a 'id_usuario'
            header('Location: ../phpAdmin/index.php');
            exit();
        } else {
            header('Location: ../index.php?error=incorrect-password'); // Redirige con error
            exit();
        }
    } else {
        header('Location: ../index.php?error=user-not-found'); // Redirige con error
        exit();
    }
} catch (PDOException $e) {
    exit('Error en la consulta: ' . $e->getMessage());
}
?>