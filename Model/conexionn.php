<?php
function conectarBaseDeDatos() {
    try {
        // Obtener valores de entorno o usar valores predeterminados
        $DB_HOST = $_ENV['DB_HOST'] ?? 'localhost';
        $DB_PORT = $_ENV['DB_PORT'] ?? '5432';
        $DB_NAME = $_ENV['DB_NAME'] ?? 'pasantias';
        $DB_USER = $_ENV['DB_USER'] ?? 'postgres';
        $DB_PASSWORD = $_ENV['DB_PASSWORD'] ?? 'admin123';

        // Crear cadena de conexión
        $dsn = "pgsql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME;user=$DB_USER;password=$DB_PASSWORD";

        // Intentar establecer la conexión
        $conn = new PDO($dsn);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    } catch (PDOException $e) {
        // Log de errores
        error_log("Error al conectar a la base de datos: " . $e->getMessage());

        // Mensaje de error más detallado para el usuario
        echo "Error al conectar a la base de datos. Detalles: " . $e->getMessage();
        die();
    }
}

?>



