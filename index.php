<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biografía Personal - MS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/estilos-personales.css">
</head>
<body>

<header class="site-header">
    <div class="container nav-container">
        <div class="logo">MS</div>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>

        <nav class="main-nav">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#bio">Biografía</a></li>
                <li><a href="#Universidad">Universidad</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="inicio" class="hero">
    <div class="container hero-inner">
        <div class="hero-text">
            <span class="hero-badge">Proyecto APE 1B_MS</span>
            <h1>Marcelo Sarango</h1>
            <p>Estudiante de la UTPL</p>
            <div class="hero-buttons">
                <a href="contacto.php" class="btn btn-primary">Envíame un mensaje</a>
                <a href="#Universidad" class="btn btn-outline">Ver Universidad</a>
            </div>
        </div>
        <div class="hero-photo">
            <div class="photo-frame">
                <img src="imagenes/img1.jpg" alt="Foto de perfil">
            </div>
        </div>
    </div>
</section>

<section id="bio" class="section light">
    <div class="container">
        <h2 class="section-title">Biografía personal</h2>
        <div class="section-underline"></div>

        <div class="grid two-columns gap-lg">
            <div>
                <p>
                    Mi nombre es Manuel Marcelo Sarango Saca, tengo 27 años y estudio las carreras de Telecomunicaciones y Tecnologías de la información. Me llama la atención cómo funcionan las páginas web y las aplicaciones que usamos a diario.
                </p>
                <p>
                    Me gusta aprender de forma constante, probar nuevas herramientas y investigar sobre nuevas tecnologías actuales. Actualmente me encuentro desarrollando un proyecto para la carrera de Telecomunicaciones, el cual se enfoca en crear una red Zigbee para monitoreo en infraestructuras de puentes.
                </p>
                <p>
                    Tengo mucha curiosidad por vincular este proyecto con el diseño web de tal manera que pueda crear una plataforma para monitoreo y control desde una página web, lo cual me gratifica saber que puedo complementar mis conocimientos de ambas carreras.
                </p>
            </div>

            <div>
                <h3 class="subtitle">Datos personales</h3>
                <ul class="info-list">
                    <li><span>Nombre:</span> Manuel Marcelo Sarango Saca</li>
                    <li><span>Edad:</span> 27 años</li>
                    <li><span>Correo:</span> ssmanuel@utpl.edu.ec</li>
                    <li><span>Ciudad:</span> Loja, Ecuador</li>
                    <li><span>Intereses:</span> Seguridad de la información</li>
                </ul>

                <h3 class="subtitle mt-md">Hobbies</h3>
                <ul class="info-list">
                    <li><span>Hobby 1:</span> Escuchar música rock clásico en inglés.</li>
                    <li><span>Hobby 2:</span> Hacer deporte, especialmente ecuabóley.</li>
                    <li><span>Hobby 3:</span> Ver cursos y tutoriales en línea.</li>
                    <li><span>Hobby 4:</span> Caminar, tomar fotografías, viajar y conocer nuevos lugares.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="Universidad" class="section">
    <div class="container">
        <h2 class="section-title">Universidad</h2>
        <div class="section-underline"></div>

        <p class="section-intro">Estas son las carreras que estoy estudiando y los cursos que he completado.</p>

        <div class="grid three-columns gap-md cards-grid">

            <article class="card project-card">
                <div class="card-image">
                    <img src="imagenes/img3.jpg" alt="1">
                </div>
                <div class="card-body">
                    <h3>Telecomunicaciones</h3>
                    <p>La carrera de telecomunicaciones se refiere al diseño, desarrollo e implementación de sistemas para transmitir información a distancia por medios alámbricos o inalámbricos.</p>
                    <span class="tag">Microondas</span>
                    <span class="tag">Practicum 3</span>
                    <span class="tag">Telefonía</span>
                    <span class="tag">Arquitectura y Seguridad de Redes</span>
                </div>
            </article>

            <article class="card project-card">
                <div class="card-image">
                    <img src="imagenes/img4.jpg" alt="2">
                </div>
                <div class="card-body">
                    <h3>Tecnologías de la Información</h3>
                    <p>La carrera de TI se enfoca en la creación, gestión e implementación de soluciones tecnológicas como software, redes y sistemas para resolver problemas y mejorar procesos.</p>
                    <span class="tag">Administración de Base de Datos</span>
                    <span class="tag">Ingeniería de Software</span>
                    <span class="tag">Desarrollo Web</span>
                </div>
            </article>

            <article class="card project-card">
                <div class="card-image">
                    <img src="imagenes/img5.jpg" alt="3">
                </div>
                <div class="card-body">
                    <h3>Cursos completados</h3>
                    <p>Los cursos de telecomunicaciones y TI sirven para desarrollar habilidades tecnológicas y mejorar el desempeño profesional.</p>
                    <span class="tag">CCNA1</span>
                    <span class="tag">CCNA2</span>
                </div>
            </article>
        </div>

        <div class="section-cta">
            <a href="contacto.php" class="btn btn-primary">¿Quieres escribirme? Ir al formulario</a>
        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container footer-inner">
        <p>© <?php echo date("Y"); ?> MS - Biografía personal y formulario</p>
    </div>
</footer>

</body>
</html>
