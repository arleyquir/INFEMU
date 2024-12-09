<?php
require_once 'configuracion.php';

if (!class_exists('CONE')) {
    class CONE {
        private $pdo;

        public function __construct() {
            try {
                $dsn = 'mysql:host=' . SERVIDOR . ';dbname=' . BASEDATOS . ';charset=utf8';
                $this->pdo = new PDO($dsn, USUARIO, CONTRASEÑA);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                $this->pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
            } catch (PDOException $error) {
                die('Error de conexión: ' . $error->getMessage());
            }
        }

        public function getConnection() {
            return $this->pdo;
        }
    }
}
?>
