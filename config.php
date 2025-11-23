<?php
$host = "sql305.infinityfree.com";        // Host MySQL del hosting
$dbname = "if0_40492108_contacto_web";    // Nombre REAL de la base de datos en InfinityFree
$user = "if0_40492108";                   // Usuario MySQL del hosting
$password = "lg300immtmuH5";              // CONTRASEÑA MySQL

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Error de conexión a la base de datos.");
}
?>
