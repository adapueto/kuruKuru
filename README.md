# KuruKuru 🌸

Catálogo de animes por temporada — proyecto educativo full-stack con PHP, MySQL y la [Jikan API](https://jikan.moe/).

---

## Stack

| Capa | Tecnología |
|------|------------|
| Backend | PHP (mysqli / PDO) |
| Base de datos | MySQL (via XAMPP) |
| Frontend | HTML, CSS, JavaScript puro |
| API externa | Jikan (MyAnimeList unofficial) |
| Servidor local | Apache (XAMPP) |

---

## Roadmap

### Fase 1 — Configurar el entorno
- [ ] Instalar XAMPP (Apache + MySQL + PHP)
- [ ] Crear carpeta `kuruKuru` dentro de `htdocs`
- [ ] Abrir con VSCode + instalar extensiones PHP Intelephense y MySQL
- [ ] Verificar `http://localhost` en el navegador

### Fase 2 — Base de datos MySQL
- [ ] Abrir phpMyAdmin (`http://localhost/phpmyadmin`)
- [ ] Crear la base de datos `anime_db`
- [ ] Crear la tabla `animes` con columnas: `mal_id`, `titulo`, `año`, `temporada`, `imagen_url`, `score`, etc.
- [ ] Practicar queries: `SELECT`, `INSERT`, `WHERE`, `ORDER BY`, `LIMIT`

> **Aprenderás:** SQL básico, estructura relacional, tipos de datos

### Fase 3 — Conectar PHP con MySQL y llenar la DB
- [ ] Crear `includes/db.php` con la conexión (mysqli o PDO)
- [ ] Crear `api/actualizar_db.php` que consulta la Jikan API con `file_get_contents()`
- [ ] Parsear el JSON con `json_decode()`
- [ ] Guardar cada anime con `INSERT` en MySQL
- [ ] Verificar en phpMyAdmin que los datos llegaron

> **Aprenderás:** PHP básico, consumir APIs, JSON, INSERT con PHP

### Fase 4 — Mostrar datos en HTML
- [ ] Crear `index.php` con `SELECT` a la tabla y generar cards en HTML
- [ ] Empezar simple: lista con título, año e imagen
- [ ] Agregar página de detalle `anime.php?id=123` usando `$_GET`

> **Aprenderás:** PHP mezclado con HTML, parámetros GET, loops en PHP

### Fase 5 — Estilar con CSS
- [ ] Crear `css/estilos.css` y vincularlo desde el HTML
- [ ] Grid de cards con CSS Grid o Flexbox
- [ ] Responsive con `@media queries`
- [ ] Paleta oscura estilo anime

> **Aprenderás:** Selectores CSS, Box Model, Grid/Flexbox, responsive design

### Fase 6 — Interactividad con JavaScript
- [ ] Filtros por temporada (Winter / Spring / Summer / Fall) con JS puro
- [ ] Tabs para cambiar entre años
- [ ] Animación de aparición de cards al cargar

> **Aprenderás:** DOM manipulation, eventos, `querySelector`, `classList`

### Fase 7 — El Top 3
- [ ] Sección especial con `SELECT ... ORDER BY score DESC LIMIT 3`
- [ ] Diseño visual diferente para destacarlos (podio o cards más grandes)

> **Aprenderás:** SQL avanzado, LIMIT/ORDER BY, lógica de presentación

---

## Estructura de carpetas

```
kuruKuru/
├── index.php            # Página principal con listado de animes
├── anime.php            # Página de detalle de un anime
├── includes/
│   └── db.php           # Conexión a MySQL
├── api/
│   └── actualizar_db.php # Script para poblar la DB desde Jikan
├── css/
│   └── estilos.css      # Estilos globales
└── js/
    └── main.js          # Lógica de filtros e interactividad
```

---

## Cómo correr el proyecto localmente

1. Instalar [XAMPP](https://www.apachefriends.org/)
2. Clonar este repo dentro de `C:/xampp/htdocs/` (Windows) o `/opt/lampp/htdocs/` (Linux)
3. Iniciar Apache y MySQL desde el panel de XAMPP
4. Abrir `http://localhost/phpmyadmin` y crear la base de datos `anime_db`
5. Ejecutar `http://localhost/kuruKuru/api/actualizar_db.php` para poblar la DB
6. Abrir `http://localhost/kuruKuru/` y ver el catálogo
