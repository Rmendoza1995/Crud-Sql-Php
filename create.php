
<?php
include("conexion.php");
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$edad = intval($edad);
try {
    $stmt = $pdo->prepare("INSERT INTO registronuevoa ( nombre,correo, edad) VALUES (:nombre, :correo, :edad)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':edad', $edad);
    
    $stmt->execute();

    
} catch (PDOException $e) {
    var_dump($correo);
    echo 'Error de conexión: ' . $e->getMessage();
}
    
?>

