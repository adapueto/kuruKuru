<?php
require 'includes/db.php';

    $sql = $pdo->query("SELECT * FROM animes");
    $animes = $sql->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>KuruKuru</title>
</head>
<body>
    <h1>KuruKuru</h1>
    <div class="grilla">
        <?php foreach ($animes as $anime): ?>
            <a href="anime.php?id=<?= $anime['mal_id'] ?>">
                <div class="card">
                    <img src="<?= htmlspecialchars($anime['imagen_url']) ?>" alt="<?= htmlspecialchars($anime['titulo']) ?>">
                    <h2><?= htmlspecialchars($anime['titulo']) ?></h2>
                    <p><?= htmlspecialchars($anime['anio']) ?> — <?= htmlspecialchars($anime['temporada']) ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</body>
</html>
