<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicación - Colegio Celina Pellier</title>
    <link rel="stylesheet" href="styles_escuela.css"> 
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicación - Colegio Celina Pellier</title>
    <link rel="stylesheet" href="styles_escuela.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">    
</head>
<body>
    <nav>
    <ul class="menu">
        <li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
        <li><a class="active" href="ubicacion.php"><i class="fas fa-map-marker-alt"></i> Ubicación</a></li>
        <li><a href="https://www.instagram.com/celina.pellier/?hl=es" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
        <li><a href="contacto.php"><i class="fas fa-phone"></i> Contacto</a></li>
        <li><a href="horarios.php"><i class="fas fa-clock"></i> Horarios</a></li>

        <?php if (isset($_SESSION['usuario'])): ?>
            <li class="login-btn usuario-sesion">
                <span>👤 <?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
            </li>
        <?php else: ?>
            <li class="login-btn"><a href="login.html"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</a></li>
        <?php endif; ?>
    </nav>

    <main>
        <section>
            <h3>Estamos ubicados:</h3>
            <p class="direccion">Av. 26 de Enero, Santo Domingo Este</p>
            <div class="mapa-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799138705!2d-74.25986922606568!3d40.69767007191319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259ab0d6c2e3b%3A0x6db6d22da60a03ac!2sNew+York%2C+NY%2C+USA!5e0!3m2!1ses!2sdo!4v1664241975472!5m2!1ses!2sdo" 
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </main>

    <footer class="centered">
        <p>&copy; 2025 Euris Nolasco, Yesenia Guzman. Todos los derechos reservados.</p>
    </footer>

    <button id="btnSubir" title="Subir arriba">⬆️</button>
    <script src="script.js"></script>
</body>
</html>
