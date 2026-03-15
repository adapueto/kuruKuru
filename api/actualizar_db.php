<?php
require '../includes/db.php';

$url = 'https://api.jikan.moe/v4/seasons/2024/winter';
$respuesta = file_get_contents($url);
$datos = json_decode($respuesta, true);

// preparar la query una sola vez fuera del loop
$sql = $pdo->prepare("INSERT IGNORE INTO animes (mal_id, titulo, anio, temporada, imagen_url, score)
    VALUES (?, ?, ?, ?, ?, ?)");

foreach ($datos['data'] as $anime) {
    $sql->execute([
        $anime['mal_id'],
        $anime['title'],
        $anime['aired']['prop']['from']['year'],
        $anime['season'],
        $anime['images']['jpg']['image_url'],
        $anime['score']
    ]);
}