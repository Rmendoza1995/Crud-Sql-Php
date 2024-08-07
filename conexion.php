<?php
$server = 'localhost';
$database = 'InfoToolsSV';
$username = 'Rmendoza';
$password = 'Rmendoza';
// Configuración del DSN
$dsn = 'Driver={SQL Server};Server=localhost;Database=InfoToolsSV;';

// Establecer las opciones de conexión
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Modo de error
    PDO::ATTR_EMULATE_PREPARES => false, // Desactivar emulación de preparación de consultas
);

// Crear una instancia de PDO con el DSN y las opciones
try {
    $pdo = new PDO("odbc:{$dsn}", 'Rmendoza', 'Rmendoza', $options);
    echo "conexion a sql server realizada con exito";
    // Realizar operaciones en la base de datos
    
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}

?>

