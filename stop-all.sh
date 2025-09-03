#!/bin/bash
echo "🛑 Deteniendo todos los servidores..."

# 1. Detener Frontend
echo "🎨 Deteniendo Frontend..."
pkill -f "vite" 2>/dev/null
kill $(cat /tmp/skate-frontend.pid 2>/dev/null) 2>/dev/null

# 2. Detener Backend
echo "⚙️ Deteniendo Backend..."
pkill -f "node server.js" 2>/dev/null  
kill $(cat /tmp/skate-backend.pid 2>/dev/null) 2>/dev/null

# 3. Detener MySQL (opcional, comentado por defecto)
# echo "🔌 Deteniendo MySQL..."
# brew services stop mysql

echo "✅ Todos los servidores detenidos!"
