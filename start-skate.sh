#!/bin/bash
echo "🏂 INICIANDO SKATE SHOP..."
echo "=================================="

# MySQL
echo "🔌 Verificando MySQL..."
if ! brew services list | grep mysql | grep started > /dev/null; then
    brew services start mysql
    sleep 3
fi

# Backend
echo "⚙️ Iniciando Backend (puerto 3001)..."
cd backend
npm run backend &
BACKEND_PID=$!
cd ..

# Frontend
echo "🎨 Iniciando Frontend (puerto 5173)..."
cd frontend
npm run dev &
FRONTEND_PID=$!
cd ..

# Guardar PIDs
echo $BACKEND_PID > /tmp/skate-backend.pid
echo $FRONTEND_PID > /tmp/skate-frontend.pid

sleep 3
echo ""
echo "✅ ¡TODOS LOS SERVIDORES INICIADOS!"
echo "📍 Frontend: http://localhost:5173"
echo "📍 Backend API: http://localhost:3001/api"
echo "📍 MySQL: localhost:3306"
echo ""
echo "🛑 Para detener: ./stop-skate.sh"
echo "=================================="
