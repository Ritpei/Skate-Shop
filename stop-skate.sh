#!/bin/bash
echo "🏂 DETENIENDO SKATE SHOP..."
echo "=================================="

# Frontend
echo "🎨 Deteniendo Frontend..."
pkill -f "vite" 2>/dev/null
kill $(cat /tmp/skate-frontend.pid 2>/dev/null) 2>/dev/null

# Backend
echo "⚙️ Deteniendo Backend..."
pkill -f "node server.js" 2>/dev/null
kill $(cat /tmp/skate-backend.pid 2>/dev/null) 2>/dev/null

# Limpiar
rm -f /tmp/skate-*.pid 2>/dev/null

echo ""
echo "✅ ¡SERVIDORES DETENIDOS!"
echo "=================================="
