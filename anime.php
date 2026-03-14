<?php
require 'includes/db.php';

    $id = $_GET['id'] ?? null;
    if (!$id) header('Location: index.php');
    $sql = $pdo->prepare("SELECT * FROM animes
        WHERE mal_id = ?");
    $sql->execute([$id]);
    $anime = $sql->fetch();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $anime['titulo'] ?></title>
</head>
<body>
    <h1><?= $anime['titulo'] ?></h1>
    <div class="detalle">
        <img src="<?= $anime['imagen_url'] ?>" alt="<?= $anime['titulo'] ?>">
        <h2><?= $anime['titulo'] ?></h2>
        <p><?= $anime['anio'] ?> — <?= $anime['temporada'] ?></p>
        <p>Score: <?= $anime['score'] ?></p>
    </div>
</body>
</html>