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
    if (!$anime) {
        header('Location: index.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($anime['titulo']) ?></title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor contenedor--angosto">
    <h1><?= htmlspecialchars($anime['titulo']) ?></h1>
    <div class="detalle">
        <img src="<?= htmlspecialchars($anime['imagen_url']) ?>" alt="<?= htmlspecialchars($anime['titulo']) ?>">
        <div class="info">
            <h2><?= htmlspecialchars($anime['titulo']) ?></h2>
            <div class="info__columnas">
                <div class="info__datos">
                    <p><?= htmlspecialchars($anime['anio']) ?> — <?= htmlspecialchars($anime['temporada']) ?></p>
                    <p class="score">Score: <?= htmlspecialchars($anime['score']) ?></p>
                </div>
                <div class="info__synopsis">
                    <?php if ($anime['synopsis']): ?>
                        <p><?= htmlspecialchars($anime['synopsis']) ?></p>
                    <?php else: ?>
                        <p>Sin descripción disponible.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>