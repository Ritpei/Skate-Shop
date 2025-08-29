<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tienda de Patinetas')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')
</head>
<body class="font-sans bg-gray-100 text-gray-800">
    @include('partials.header')
    
    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-6 mt-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm">&copy; {{ date('Y') }} Tienda de Patinetas. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
    // Funcionalidad básica del header
    function toggleMobileSearch() {
        document.getElementById('mobile-search').classList.toggle('hidden');
    }
    </script>
    @stack('scripts')
</body>
</html>