<?php
session_start();          // Inicia la sesión
session_unset();          // Limpia las variables de sesión
session_destroy();        // Destruye la sesión
header("Location: INDE.php"); // Redirige a la página principal
exit();
?>