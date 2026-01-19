<?php
$carrera = $_GET["carrera"] ?? "";
$carrera = strtolower(trim($carrera));
$carrera = preg_replace('/[^a-z0-9_-]/', '', $carrera);
if ($carrera === "") { $carrera = "sin-seleccion"; }

$nombreC = str_replace("-", " ", $carrera);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Universidad - MS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/APE-1B_MS/assets/css/estilos-personales.css">
</head>
<body>

<header class="site-header">
    <div class="container nav-container">
        <div class="logo">MS</div>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label"><span></span></label>

        <nav class="main-nav">
            <ul>
                <li><a href="/APE-1B_MS/index.php#inicio">Inicio</a></li>
                <li><a href="/APE-1B_MS/index.php#bio">Biografía</a></li>
                <li><a href="/APE-1B_MS/index.php#Universidad">Universidad</a></li>
                <li><a href="/APE-1B_MS/contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="section light">
    <div class="container" style="max-width: 1100px;">
        <h2 class="section-title">Universidad</h2>
        <div class="section-underline"></div>

        <p style="text-align: justify;">
            Carrera seleccionada: <strong><?php echo htmlspecialchars($nombreC, ENT_QUOTES, "UTF-8"); ?></strong>
        </p>

        <div class="grid three-columns gap-md cards-grid" style="margin-top: 18px;">
            <article class="card project-card">
                <div class="card-image">
                    <img src="/APE-1B_MS/imagenes/img3.jpg" alt="Telecomunicaciones">
                </div>
                <div class="card-body">
                    <h3>Telecomunicaciones</h3>
                    <p>Enfocada en redes, radiofrecuencia y transmisión de información a distancia en medios alámbricos e inalámbricos.</p>
                    <span class="tag">Microondas</span>
                    <span class="tag">Telefonía</span>
                    <span class="tag">Arquitectura y Seguridad</span>
                </div>
            </article>

            <article class="card project-card">
                <div class="card-image">
                    <img src="/APE-1B_MS/imagenes/img4.jpg" alt="Tecnologías de la Información">
                </div>
                <div class="card-body">
                    <h3>Tecnologías de la Información</h3>
                    <p>Orientada a desarrollo de software, bases de datos, redes y soluciones tecnológicas para organizaciones.</p>
                    <span class="tag">Base de Datos</span>
                    <span class="tag">Ingeniería de Software</span>
                    <span class="tag">Desarrollo Web</span>
                </div>
            </article>

            <article class="card project-card">
                <div class="card-image">
                    <img src="/APE-1B_MS/imagenes/img5.jpg" alt="Cursos completados">
                </div>
                <div class="card-body">
                    <h3>Cursos completados</h3>
                    <p>Lista de cursos que he completado dentro de mi formación académica.</p>
                    <span class="tag">CCNA1</span>
                    <span class="tag">CCNA2</span>
                </div>
            </article>
        </div>

        <div class="section-cta">
            <a href="/APE-1B_MS/index.php#Universidad" class="btn btn-outline">Volver a Universidad</a>
            <a href="/APE-1B_MS/contacto.php" class="btn btn-primary">Ir a Contacto</a>
        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container footer-inner">
        <p>© <?php echo date("Y"); ?> MS</p>
    </div>
</footer>

</body>
</html>
