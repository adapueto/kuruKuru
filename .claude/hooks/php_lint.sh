#!/bin/bash
# Hook: verifica sintaxis PHP después de cada edición
FILE=$(echo "$CLAUDE_TOOL_INPUT" | python3 -c "import sys,json; d=json.load(sys.stdin); print(d.get('file_path',''))" 2>/dev/null)

if echo "$FILE" | grep -q '\.php$'; then
  if php -l "$FILE" 2>&1; then
    echo "✓ PHP sintaxis OK: $FILE"
  fi
fi
