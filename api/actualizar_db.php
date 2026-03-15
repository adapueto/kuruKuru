<?php
require '../includes/db.php';

$url = 'https://api.jikan.moe/v4/seasons/2024/winter';
$respuesta = file_get_contents($url);
if (!$respuesta) {
    die('Error al conectar con la API');
}
$datos = json_decode($respuesta, true);
if (!isset($datos['data'])) {
    die('Respuesta inesperada de la API');
}

// preparar la query una sola vez fuera del loop
$sql = $pdo->prepare("INSERT INTO animes (mal_id, titulo, anio, temporada, imagen_url, score, synopsis)
    VALUES (?, ?, ?, ?, ?, ?, ?)
    ON DUPLICATE KEY UPDATE synopsis = VALUES(synopsis)");

foreach ($datos['data'] as $anime) {
    $sql->execute([
        $anime['mal_id'],
        $anime['title'],
        $anime['aired']['prop']['from']['year'],
        $anime['season'] ?? null,
        $anime['images']['jpg']['image_url'],
        $anime['score'] ?? null,
        $anime['synopsis'] ?? null
    ]);
}