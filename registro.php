<?php
// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "", "escuela_celina");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

// Verifica si el usuario ya existe
$stmt = $conexion->prepare("SELECT * FROM estudiantes WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    echo "<h3>⚠️ El usuario ya existe. Intenta con otro nombre.</h3>";
    exit();
}

// Insertar nuevo usuario
$stmt = $conexion->prepare("INSERT INTO estudiantes (usuario, contrasena) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $contrasena);

if ($stmt->execute()) {
    // Registro exitoso → redirigir
    header("Location: index.php");
    exit();
} else {
    echo "❌ Error al registrar: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
