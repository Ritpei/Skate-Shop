<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - SkatePro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-blue-800 text-white">
            <div class="p-4">
                <h1 class="text-xl font-bold">SkatePro Admin</h1>
            </div>
            <nav class="mt-6">
                <a href="/admin/products" class="block py-2 px-4 hover:bg-blue-700">
                    <i class="fas fa-box mr-2"></i> Productos
                </a>
                <a href="/" class="block py-2 px-4 hover:bg-blue-700">
                    <i class="fas fa-home mr-2"></i> Ver Sitio
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <div class="p-6">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
