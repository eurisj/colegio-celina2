<?php
session_start();

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "escuela_celina");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Capturar datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Consulta con prepared statement (más seguro)
$stmt = $conexion->prepare("SELECT * FROM estudiantes WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();

    if (password_verify($contrasena, $fila['contrasena'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        exit();
    } else {
        echo "<h3>❌ Contraseña incorrecta.</h3>";
    }
} else {
    echo "<h3>❌ Usuario no encontrado.</h3>";
}

$stmt->close();
$conexion->close();
?>
