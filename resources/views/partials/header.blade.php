<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            
            <!-- Logo -->
            <a href="{{ url('/') }}" class="text-2xl font-bold text-blue-600 hover:text-blue-700 transition-all">
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
                        <a href="/skate/tablas" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Tablas</a>
                        <a href="/skate/ruedas" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Ruedas</a>
                        <a href="/skate/trucks" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Trucks</a>
                        <a href="/skate/rodamientos" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Rodamientos</a>
                        <a href="/skate/completas" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Completas</a>
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
                        <a href="/roller/patines" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Patines</a>
                        <a href="/roller/ruedas" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Ruedas</a>
                        <a href="/roller/protecciones" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Protecciones</a>
                        <a href="/roller/accesorios" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Accesorios</a>
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
                        <a href="/tenis" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Todos los Tenis</a>
                        <a href="/tenis/tallas" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Por Tallas</a>
                        <a href="/tenis/marcas" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Por Marcas</a>
                    </div>
                </div>

                <!-- Menú Ropa -->
                <div class="relative group">
                    <button class="hover:text-blue-600 focus:outline-none flex items-center transition-all">
                        Ropa <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md p-2 w-48 z-10">
                        <a href="/ropa" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Toda la Ropa</a>
                        <a href="/ropa/hombre/playeras" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Hombre</a>
                        <a href="/ropa/mujer/playeras" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Mujer</a>
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
                        <a href="/accesorios" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Todos</a>
                        <a href="/accesorios/mochilas" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Mochilas</a>
                        <a href="/accesorios/stickers" class="block px-4 py-2 hover:bg-gray-100 rounded transition-all">Stickers</a>
                    </div>
                </div>

                <!-- Mapa -->
                <a href="/mapa" class="hover:text-blue-600 transition-all">📍 Mapa</a>

            </nav>

            <!-- Botones de acción (derecha) -->
            <div class="flex items-center space-x-4">
                
                <!-- Botón Búsqueda -->
                <button class="text-gray-600 hover:text-blue-600 transition-all" onclick="toggleMobileSearch()">
                    <i class="fas fa-search text-xl"></i>
                </button>

                <!-- Botón Favoritos -->
                <a href="/favoritos" class="text-gray-600 hover:text-red-600 relative transition-all">
                    <i class="far fa-heart text-xl"></i>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                </a>

                <!-- Botón Carrito -->
                <a href="/carrito" class="text-gray-600 hover:text-green-600 relative transition-all">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span class="absolute -top-2 -right-2 bg-green-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                </a>

                <!-- Botón Login -->
                <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-all">
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
                    <a href="/skate/tablas" class="block text-gray-600 hover:text-blue-600 transition-all">Tablas</a>
                    <a href="/skate/ruedas" class="block text-gray-600 hover:text-blue-600 transition-all">Ruedas</a>
                    <a href="/skate/trucks" class="block text-gray-600 hover:text-blue-600 transition-all">Trucks</a>
                    <a href="/skate/rodamientos" class="block text-gray-600 hover:text-blue-600 transition-all">Rodamientos</a>
                    <a href="/skate/completas" class="block text-gray-600 hover:text-blue-600 transition-all">Completas</a>
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
                    <a href="/roller/patines" class="block text-gray-600 hover:text-blue-600 transition-all">Patines</a>
                    <a href="/roller/ruedas" class="block text-gray-600 hover:text-blue-600 transition-all">Ruedas</a>
                    <a href="/roller/protecciones" class="block text-gray-600 hover:text-blue-600 transition-all">Protecciones</a>
                    <a href="/roller/accesorios" class="block text-gray-600 hover:text-blue-600 transition-all">Accesorios</a>
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
                    <a href="/tenis" class="block text-gray-600 hover:text-blue-600 transition-all">Todos los Tenis</a>
                    <a href="/tenis/tallas" class="block text-gray-600 hover:text-blue-600 transition-all">Por Tallas</a>
                    <a href="/tenis/marcas" class="block text-gray-600 hover:text-blue-600 transition-all">Por Marcas</a>
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
                    <a href="/ropa" class="block text-gray-600 hover:text-blue-600 transition-all">Toda la Ropa</a>
                    <a href="/ropa/hombre/playeras" class="block text-gray-600 hover:text-blue-600 transition-all">Hombre</a>
                    <a href="/ropa/mujer/playeras" class="block text-gray-600 hover:text-blue-600 transition-all">Mujer</a>
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
                    <a href="/accesorios" class="block text-gray-600 hover:text-blue-600 transition-all">Todos</a>
                    <a href="/accesorios/mochilas" class="block text-gray-600 hover:text-blue-600 transition-all">Mochilas</a>
                    <a href="/accesorios/stickers" class="block text-gray-600 hover:text-blue-600 transition-all">Stickers</a>
                </div>
            </div>

            <!-- Mapa móvil -->
            <a href="/mapa" class="block text-gray-700 hover:text-blue-600 transition-all">📍 Mapa</a>

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
EOF