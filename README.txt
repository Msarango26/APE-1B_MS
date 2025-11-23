===========================================
README – Página Web Personal con Formulario
===========================================

### ----- Descripción -------------##
-------------------------------------

Este proyecto fue desarrollado para la actividad APE 1B de la asignatura Desarrollo Web. 
El sitio consiste en una página web personal que incluye una sección de inicio, una biografía del estudiante, 
una sección llamada “Universidad” con información académica, y un formulario de contacto totalmente funcional. 
Los mensajes enviados a través del formulario se guardan en una base de datos MySQL utilizando PHP y PDO. 
El sistema incluye validaciones, limpieza de datos, verificación con token CSRF, honeypot para evitar bots 
y cifrado del mensaje antes de almacenarlo.

Tecnologías utilizadas
- HTML5  
- CSS3 (archivo: assets/css/estilos-personales.css)  
- PHP 7+ (conexión PDO)  
- MySQL / phpMyAdmin  
- Hosting gratuito InfinityFree  

### ----- Estructura del proyecto ----- ##
---------------------------------------------------

La estructura básica generada para este proyecto es:

APE-1B_MS/  
│  
├── index.php  
├── contacto.php  
├── config.php  
├── README.txt  
│  
├── assets/  
│   └── css/  
│        └── estilos-personales.css  
│  
└── imagenes/  
     ├── img1.jpg  
     ├── img2.jpg  
     ├── img3.jpg  
     ├── img4.jpg  
     └── img5.jpg  

### ----- Contenido del sitio ----- ##
-------------------------------------------------

- Inicio con presentación del estudiante y fotografía  
- Biografía detallada, hobbies e intereses  
- Sección “Universidad” con carreras y cursos realizados  
- Formulario de contacto con campos:  
  - Nombre  
  - Correo electrónico  
  - Mensaje  
- Protección contra envíos automáticos y mensajes inválidos  
- Almacenamiento del mensaje utilizando cifrado AES-256-CBC  

Base de datos utilizada

Nombre de la base: contacto_web  
Tabla: mensajes

### ----- Estructura SQL:----- ##
------------------------------------------

CREATE TABLE mensajes (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

### ----- Enlace al hosting ----- ##
----------------------------------------------

[http://msarango.infinityfreeapp.com]

