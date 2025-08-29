<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkatePro - Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .rotate-180 {
            transform: rotate(180deg);
        }
        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Incluye el header -->
    @include('partials.header')

    <main class="max-w-7xl mx-auto px-4 py-8">
        <!-- Solo EL contenido ESPECÍFICO de la página de inicio -->
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-8 text-white text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Bienvenido a SkatePro</h1>
            <p class="text-xl mb-6">Todo lo que necesitas para el skate y roller en un solo lugar</p>
            <a href="/productos" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-all inline-block">
                Ver Productos Destacados
            </a>
        </div>

        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Categorías Populares</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-skateboarding text-6xl text-blue-600"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Skateboards</h3>
                        <p class="text-gray-600 mt-2">Tablas completas y componentes</p>
                        <a href="/skate/tablas" class="mt-3 inline-block text-blue-600 hover:text-blue-800 transition-all">Ver productos →</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
                    <div class="h-48 bg-green-100 flex items-center justify-center">
                        <i class="fas fa-roller-skate text-6xl text-green-600"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Patines</h3>
                        <p class="text-gray-600 mt-2">Patines y accesorios para roller</p>
                        <a href="/roller/patines" class="mt-3 inline-block text-blue-600 hover:text-blue-800 transition-all">Ver productos →</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
                    <div class="h-48 bg-red-100 flex items-center justify-center">
                        <i class="fas fa-shoe-prints text-6xl text-red-600"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Tenis</h3>
                        <p class="text-gray-600 mt-2">Calzado para skate y estilo</p>
                        <a href="/tenis" class="mt-3 inline-block text-blue-600 hover:text-blue-800 transition-all">Ver productos →</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
                    <div class="h-48 bg-yellow-100 flex items-center justify-center">
                        <i class="fas fa-tshirt text-6xl text-yellow-600"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Ropa</h3>
                        <p class="text-gray-600 mt-2">Ropa técnica y casual</p>
                        <a href="/ropa" class="mt-3 inline-block text-blue-600 hover:text-blue-800 transition-all">Ver productos →</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Incluye el footer -->
    <footer class="bg-gray-800 text-white mt-16 py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">SkatePro</h3>
                    <p class="text-gray-400">Tu tienda especializada en skateboarding, patinaje y tenis urbanos.</p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Categorías</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/skate/tablas" class="hover:text-white transition-all">Skate</a></li>
                        <li><a href="/roller/patines" class="hover:text-white transition-all">Roller</a></li>
                        <li><a href="/tenis" class="hover:text-white transition-all">Tenis</a></li>
                        <li><a href="/ropa" class="hover:text-white transition-all">Ropa</a></li>
                        <li><a href="/accesorios" class="hover:text-white transition-all">Accesorios</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Enlaces útiles</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-all">Sobre nosotros</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Contacto</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Preguntas frecuentes</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Envíos y devoluciones</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Contacto</h4>
                    <address class="text-gray-400 not-italic">
                        <p>Calle del Skate 123</p>
                        <p>Madrid, España</p>
                        <p class="mt-2">info@skatepro.es</p>
                        <p>+34 912 345 678</p>
                    </address>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 SkatePro. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileSearch() {
            document.getElementById('mobile-search').classList.toggle('hidden');
        }
        
        function toggleMobileMenu() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }

        function toggleSubmenu(submenuId, arrowId) {
            const submenu = document.getElementById(submenuId);
            const arrow = document.getElementById(arrowId);
            submenu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }
    </script>
</body>
</html>