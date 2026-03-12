Hacé una revisión de código del archivo o fragmento que te indique, con enfoque pedagógico.

Para cada problema o mejora que encuentres:
1. Señalá la línea específica
2. Explicá QUÉ está mal o qué se puede mejorar
3. Explicá POR QUÉ es un problema (seguridad, legibilidad, performance, convención)
4. Mostrá cómo quedaría corregido

Checklist que siempre revisás:
- [ ] Seguridad: SQL injection, XSS, credenciales hardcodeadas
- [ ] Convenciones del proyecto: snake_case, 4 espacios, comentarios en español
- [ ] PHP: uso de PDO (no mysqli), prepared statements para queries con variables
- [ ] CSS: especificidad innecesaria, valores mágicos sin comentario
- [ ] JS: variables sin declarar, funciones muy largas, event listeners sin remover
- [ ] SQL: queries en mayúsculas, índices en columnas usadas en WHERE

Terminá con un resumen de: ✓ qué está bien, ⚠ qué mejorar, ✗ qué corregir urgente.

$ARGUMENTS
