# Flujo de trabajo diario — KuruKuru

## Arrancar la sesión (5 min)

```
/pm iniciar fase N
```
```bash
git checkout -b fase-N origin/fase-N
```

---

## Durante el día — repetir por cada tarea

1. Intentá la tarea sola primero
2. ¿Te trabaste? → `/fase [qué querés hacer]`
3. Escribís el código → el hook corre `php -l` automático al guardar
4. Terminás la tarea → `/revisar [archivo]`
5. Corregís lo que señaló
6. `/commit`

> En cualquier momento: `/explicar [fragmento]` si no entendés algo

---

## Cerrar el día (10 min)

```
/simplify
```
```
/pm terminar fase N
```
```bash
git push origin fase-N
```
Abrir Pull Request: `fase-N` → `main` en GitHub

---

## Referencia rápida de comandos

| Comando | Cuándo usarlo |
|---------|--------------|
| `/pm iniciar fase N` | Al arrancar el día |
| `/pm terminar fase N` | Al terminar la fase |
| `/pm estado` | Para ver progreso general |
| `/fase [descripción]` | Cuando te trabás en una tarea |
| `/revisar [archivo]` | Code review al terminar una tarea |
| `/explicar [código]` | Cuando no entendés algo |
| `/simplify` | Revisión final de calidad |
| `/commit` | Antes de cada commit |
