<?php
session_start();
require "config.php";

if (empty($_SESSION["csrf_token"])) {
    $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
}

$errores = [];
$exito = "";
$nombre = "";
$correo = "";
$mensaje = "";

function limpiar($v) {
    return htmlspecialchars(trim($v), ENT_QUOTES, "UTF-8");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $token = $_POST["csrf_token"] ?? "";
    if (!hash_equals($_SESSION["csrf_token"], $token)) {
        $errores[] = "Solicitud no válida.";
    }

    $honeypot = $_POST["website"] ?? "";
    if ($honeypot !== "") {
        $errores[] = "Envío no permitido.";
    }

    if (isset($_SESSION["ultimo_envio"]) && time() - $_SESSION["ultimo_envio"] < 10) {
        $errores[] = "Debes esperar unos segundos antes de enviar otro mensaje.";
    }

    $nombre = limpiar($_POST["nombre"] ?? "");
    $correo = limpiar($_POST["correo"] ?? "");
    $mensaje = limpiar($_POST["mensaje"] ?? "");

    if ($nombre === "" || mb_strlen($nombre) < 3 || mb_strlen($nombre) > 100) {
        $errores[] = "Nombre inválido.";
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL) || mb_strlen($correo) > 150) {
        $errores[] = "Correo electrónico inválido.";
    }

    if ($mensaje === "" || mb_strlen($mensaje) < 5 || mb_strlen($mensaje) > 2000) {
        $errores[] = "Mensaje inválido.";
    }

    if (empty($errores)) {
        try {
            $key = "CLAVE_SECRETA_UNICA_32_BYTES";
            $iv = random_bytes(openssl_cipher_iv_length("AES-256-CBC"));
            $msg_cifrado = openssl_encrypt($mensaje, "AES-256-CBC", $key, 0, $iv);
            $msg_final = base64_encode($iv . $msg_cifrado);

            $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES (:n, :c, :m)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":n", $nombre);
            $stmt->bindValue(":c", $correo);
            $stmt->bindValue(":m", $msg_final);
            $stmt->execute();

            $exito = "Mensaje enviado con éxito.";
            $_SESSION["ultimo_envio"] = time();
            $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
            $nombre = $correo = $mensaje = "";

        } catch (PDOException $e) {
            $errores[] = "Error al guardar el mensaje.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - MS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/estilos-personales.css">
</head>
<body>

<header class="site-header">
    <div class="container nav-container">
        <div class="logo">MS</div>

        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <label for="nav-toggle" class="nav-toggle-label"><span></span></label>

        <nav class="main-nav">
            <ul>
                <li><a href="index.php#inicio">Inicio</a></li>
                <li><a href="index.php#bio">Biografía</a></li>
                <li><a href="index.php#Universidad">Universidad</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="section light contact-section">
    <div class="container form-layout">

        <div class="form-info">
            <h2 class="section-title">Formulario de contacto</h2>
            <div class="section-underline"></div>
            <p>Escribe tu mensaje en el formulario y será guardado de forma segura.</p>

            <ul class="info-list">
                <li><span>Nombre:</span> Marcelo Sarango</li>
                <li><span>Email:</span> ssmanuel@utpl.edu.ec</li>
                <li><span>Ciudad:</span> Loja, Ecuador</li>
            </ul>
        </div>

        <div class="form-card">

            <?php if ($exito): ?>
                <div class="alert success"><?php echo $exito; ?></div>
            <?php endif; ?>

            <?php if ($errores): ?>
                <div class="alert error">
                    <ul>
                        <?php foreach ($errores as $e): ?>
                            <li><?php echo $e; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="post" action="contacto.php" novalidate>
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION["csrf_token"]; ?>">
                <input type="text" name="website" class="honeypot">

                <div class="form-group">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required>
                </div>

                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" value="<?php echo $correo; ?>" required>
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="5" required><?php echo $mensaje; ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary full-width">Enviar mensaje</button>
            </form>

        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container footer-inner">
        <p>© <?php echo date("Y"); ?> MS - Formulario de contacto</p>
    </div>
</footer>

</body>
</html>
