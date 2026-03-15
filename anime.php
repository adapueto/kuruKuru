<?php
require 'includes/db.php';

    $id = $_GET['id'] ?? null;
    if (!$id) {
        header('Location: index.php');
        exit;
    }
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
    <h1><?= htmlspecialchars($anime['titulo']) ?></h1>
    <div class="detalle">
        <img src="<?= htmlspecialchars($anime['imagen_url']) ?>" alt="<?= htmlspecialchars($anime['titulo']) ?>">
        <h2><?= htmlspecialchars($anime['titulo']) ?></h2>
        <p><?= htmlspecialchars($anime['anio']) ?> — <?= htmlspecialchars($anime['temporada']) ?></p>
        <p>Score: <?= htmlspecialchars($anime['score']) ?></p>
    </div>
</body>
</html>