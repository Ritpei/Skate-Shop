<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkatePro - @yield('title', 'Tienda de Skate')</title>
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
    <!-- Header -->
    @include('partials.header')

    <!-- Contenido específico de cada página -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
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