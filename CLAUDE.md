# KuruKuru — Contexto del proyecto

## Stack
- PHP con **PDO** (no mysqli)
- MySQL sin ORM
- CSS vanilla — sin frameworks (ni Bootstrap, ni Tailwind)
- JS puro — sin jQuery, sin React
- Queries SQL siempre en MAYÚSCULAS (`SELECT`, `INSERT`, `WHERE`...)

## Convenciones de código
- Variables y funciones PHP: `snake_case`
- Indentación: 4 espacios
- Comentarios en español
- `includes/db.php` está en `.gitignore` — nunca sugerir commitearlo

## Estructura de carpetas
```
kuruKuru/
├── index.php
├── anime.php
├── includes/db.php      # Conexión PDO (ignorado en git)
├── api/actualizar_db.php
├── css/estilos.css
└── js/main.js
```

## Fases del proyecto
1. Entorno (XAMPP, VSCode)
2. Base de datos MySQL (anime_db, tabla animes: mal_id, titulo, año, temporada, imagen_url, score)
3. PHP + Jikan API → poblar DB
4. index.php con datos reales
5. CSS (grid oscuro, responsive)
6. JS (filtros, tabs, animaciones)
7. Top 3 (ORDER BY score DESC LIMIT 3)
