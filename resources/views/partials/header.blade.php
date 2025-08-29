<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkatePro - Tienda de Skate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .rotate-180 {
            transform: rotate(180deg);
        }
        .transition-all {
            transition: all 0.3s ease;
        }
        .submenu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 0.5rem;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header corregido -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3">
            <div class="flex items-center justify-between">
                
                <!-- Logo -->
                <a href="/" class="text-2xl font-bold text-blue-600 hover:text-blue-700 transition-all">
                    <i class="fas fa-skating mr-1"></i> SkatePro
                </a>

                <!-- Navegación principal - Desktop -->
                <nav class="hidden md:flex items-center space-x-6 text-gray-700 font-medium">
                    
                    <!-- Menú Skate -->
                    <div class="relative group">
                        <button class="hover:text-blue-600 focus:outline-none flex items-center transition-all">
                            Skate <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-2 w-48 z-10">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Tablas</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Ruedas</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Trucks</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Rodamientos</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Patinetas Completas</a>
                        </div>
                    </div>

                    <!-- Menú Roller -->
                    <div class="relative group">
                        <button class="hover:text-blue-600 focus:outline-none flex items-center transition-all">
                            Roller <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-2 w-48 z-10">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Patines</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Ruedas</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Protecciones</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Accesorios</a>
                        </div>
                    </div>

                    <!-- Menú Tenis -->
                    <div class="relative group">
                        <button class="hover:text-blue-600 focus:outline-none flex items-center transition-all">
                            Tenis <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-2 w-48 z-10">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Todos los Tenis</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Por Tallas</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Por Marcas</a>
                        </div>
                    </div>

                    <!-- Menú Ropa -->
                    <div class="relative group">
                        <button class="hover:text-blue-600 focus:outline-none flex items-center transition-all">
                            Ropa <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-2 w-56 z-10">
                            <div class="submenu-grid">
                                <div>
                                    <p class="font-semibold px-4 py-2 text-blue-600">Hombre</p>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Playeras</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Pantalones</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Chamarras</a>
                                </div>
                                <div>
                                    <p class="font-semibold px-4 py-2 text-blue-600">Mujer</p>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Playeras</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Pantalones</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Chamarras</a>
                                </div>
                                <div>
                                    <p class="font-semibold px-4 py-2 text-blue-600">Accesorios</p>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Calcetas</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Beanies</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Gorras</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Cinturones</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Menú Accesorios -->
                    <div class="relative group">
                        <button class="hover:text-blue-600 focus:outline-none flex items-center transition-all">
                            Accesorios <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-2 w-48 z-10">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Mochilas</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Stickers</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Carteras</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Fingerboards</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Gafas</a>
                        </div>
                    </div>

                    <!-- Mapa -->
                    <a href="#" class="hover:text-blue-600 transition-all">📍 Mapa</a>

                </nav>

                <!-- Botones de acción (derecha) -->
                <div class="flex items-center space-x-4">
                    
                    <!-- Botón Búsqueda -->
                    <button class="text-gray-600 hover:text-blue-600 transition-all" onclick="toggleMobileSearch()">
                        <i class="fas fa-search text-xl"></i>
                    </button>

                    <!-- Botón Favoritos -->
                    <a href="#" class="text-gray-600 hover:text-red-600 relative transition-all">
                        <i class="far fa-heart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                    </a>

                    <!-- Botón Carrito -->
                    <a href="#" class="text-gray-600 hover:text-green-600 relative transition-all">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-green-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                    </a>

                    <!-- Botón Login -->
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all">
                        Iniciar Sesión
                    </a>

                    <!-- Botón Menú Móvil -->
                    <button class="md:hidden text-gray-600 hover:text-blue-600" onclick="toggleMobileMenu()">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                </div>
            </div>

            <!-- Navegación móvil -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2">
                
                <!-- Skate móvil -->
                <div class="relative">
                    <button onclick="toggleSubmenu('skate-submenu', 'skate-arrow')" class="flex items-center justify-between w-full text-left text-gray-700 hover:text-blue-600 transition-all">
                        <span>Skate</span>
                        <svg id="skate-arrow" class="w-4 h-4 transform transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="skate-submenu" class="hidden pl-4 mt-1 space-y-1">
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Tablas</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Ruedas</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Trucks</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Rodamientos</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Completas</a>
                    </div>
                </div>

                <!-- Roller móvil -->
                <div class="relative">
                    <button onclick="toggleSubmenu('roller-submenu', 'roller-arrow')" class="flex items-center justify-between w-full text-left text-gray-700 hover:text-blue-600 transition-all">
                        <span>Roller</span>
                        <svg id="roller-arrow" class="w-4 h-4 transform transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="roller-submenu" class="hidden pl-4 mt-1 space-y-1">
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Patines</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Ruedas</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Protecciones</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Accesorios</a>
                    </div>
                </div>

                <!-- Tenis móvil -->
                <div class="relative">
                    <button onclick="toggleSubmenu('tenis-submenu', 'tenis-arrow')" class="flex items-center justify-between w-full text-left text-gray-700 hover:text-blue-600 transition-all">
                        <span>Tenis</span>
                        <svg id="tenis-arrow" class="w-4 h-4 transform transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="tenis-submenu" class="hidden pl-4 mt-1 space-y-1">
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Todos los Tenis</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Por Tallas</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Por Marcas</a>
                    </div>
                </div>

                <!-- Ropa móvil -->
                <div class="relative">
                    <button onclick="toggleSubmenu('ropa-submenu', 'ropa-arrow')" class="flex items-center justify-between w-full text-left text-gray-700 hover:text-blue-600 transition-all">
                        <span>Ropa</span>
                        <svg id="ropa-arrow" class="w-4 h-4 transform transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="ropa-submenu" class="hidden pl-4 mt-1 space-y-1">
                        <p class="font-semibold text-blue-600">Hombre</p>
                        <a href="#" class="block pl-4 text-gray-600 hover:text-blue-600 transition-all">Playeras</a>
                        <a href="#" class="block pl-4 text-gray-600 hover:text-blue-600 transition-all">Pantalones</a>
                        <a href="#" class="block pl-4 text-gray-600 hover:text-blue-600 transition-all">Chamarras</a>
                        
                        <p class="font-semibold text-blue-600 mt-2">Mujer</p>
                        <a href="#" class="block pl-4 text-gray-600 hover:text-blue-600 transition-all">Playeras</a>
                        <a href="#" class="block pl-4 text-gray-600 hover:text-blue-600 transition-all">Pantalones</a>
                        <a href="#" class="block pl-4 text-gray-600 hover:text-blue-600 transition-all">Chamarras</a>
                        
                        <p class="font-semibold text-blue-600 mt-2">Accesorios</p>
                        <a href="#" class="block pl-4 text-gray-600 hover:text-blue-600 transition-all">Calcetas</a>
                        <a href="#" class="block pl-4 text-gray-600 hover:text-blue-600 transition-all">Beanies</a>
                        <a href="#" class="block pl-4 text-gray-600 hover:text-blue-600 transition-all">Gorras</a>
                        <a href="#" class="block pl-4 text-gray-600 hover:text-blue-600 transition-all">Cinturones</a>
                    </div>
                </div>

                <!-- Accesorios móvil -->
                <div class="relative">
                    <button onclick="toggleSubmenu('accesorios-submenu', 'accesorios-arrow')" class="flex items-center justify-between w-full text-left text-gray-700 hover:text-blue-600 transition-all">
                        <span>Accesorios</span>
                        <svg id="accesorios-arrow" class="w-4 h-4 transform transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="accesorios-submenu" class="hidden pl-4 mt-1 space-y-1">
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Mochilas</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Stickers</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Carteras</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Fingerboards</a>
                        <a href="#" class="block text-gray-600 hover:text-blue-600 transition-all">Gafas</a>
                    </div>
                </div>

                <!-- Mapa móvil -->
                <a href="#" class="block text-gray-700 hover:text-blue-600 transition-all">📍 Mapa</a>

            </div>

            <!-- Barra de búsqueda móvil -->
            <div id="mobile-search" class="mt-3 hidden">
                <div class="relative">
                    <input type="text" placeholder="Buscar productos..." 
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all">
                    <i class="fas fa-search text-gray-400 absolute left-3 top-3"></i>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-8 text-white text-center">
            <h1 class="text-4xl font-bold mb-4">Bienvenido a SkatePro</h1>
            <p class="text-xl mb-6">Todo lo que necesitas para el skate y roller en un solo lugar</p>
            <button class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-all">
                Ver Productos Destacados
            </button>
        </div>

        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Categorías Populares</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-skateboarding text-6xl text-blue-600"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Skateboards</h3>
                        <p class="text-gray-600 mt-2">Tablas completas y componentes</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
                    <div class="h-48 bg-green-100 flex items-center justify-center">
                        <i class="fas fa-roller-skate text-6xl text-green-600"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Patines</h3>
                        <p class="text-gray-600 mt-2">Patines y accesorios para roller</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
                    <div class="h-48 bg-red-100 flex items-center justify-center">
                        <i class="fas fa-shoe-prints text-6xl text-red-600"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Tenis</h3>
                        <p class="text-gray-600 mt-2">Calzado para skate y estilo</p>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all">
                    <div class="h-48 bg-yellow-100 flex items-center justify-center">
                        <i class="fas fa-tshirt text-6xl text-yellow-600"></i>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Ropa</h3>
                        <p class="text-gray-600 mt-2">Ropa técnica y casual</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
                        <li><a href="#" class="hover:text-white transition-all">Skate</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Roller</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Tenis</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Ropa</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Accesorios</a></li>
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