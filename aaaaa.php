<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplicación de Muebles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            font-size: 24px;
            color: #5D4037;
            margin-bottom: 20px;
        }
        label {
            font-size: 14px;
            color: #333;
        }
        input {
            width: 95%;
            padding: 10px;
            margin: 10px 0 20px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: rgba(255, 223, 0, 0.3);
            color: #5D4037;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        button:hover {
            background-color:rgba(255, 223, 0, 0.5);
            transform: scale(1.03); 
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.3);
        }
        .error {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>INICIAR SESIÓN</h2>
        <?php if (isset($_GET['error'])): ?>
            <p class="error">
                <?php 
                if ($_GET['error'] == 'user-not-found') {
                    echo "Usuario no encontrado.";
                } elseif ($_GET['error'] == 'incorrect-password') {
                    echo "Contraseña incorrecta.";
                }
                ?>
            </p>
        <?php endif; ?>
        <form action="ingreso/autenticacion.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
