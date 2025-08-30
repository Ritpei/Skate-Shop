<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Página principal
// Página principal - Ruta específica para home
Route::get('/', function () {
    return view('home'); // Vista especial para la página de inicio
})->name('home');

// ... el resto de tus rutas existentes

// Rutas de autenticación
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rutas de Skate
Route::prefix('skate')->group(function () {
    Route::get('/tablas', function () { return view('skate.tablas'); })->name('skate.tablas');
    Route::get('/ruedas', function () { return view('skate.ruedas'); })->name('skate.ruedas');
    Route::get('/trucks', function () { return view('skate.trucks'); })->name('skate.trucks');
    Route::get('/rodamientos', function () { return view('skate.rodamientos'); })->name('skate.rodamientos');
    Route::get('/completas', function () { return view('skate.completas'); })->name('skate.completas');
});

// Rutas de Roller
Route::prefix('roller')->group(function () {
    Route::get('/patines', function () { return view('roller.patines'); })->name('roller.patines');
    Route::get('/ruedas', function () { return view('roller.ruedas'); })->name('roller.ruedas');
    Route::get('/protecciones', function () { return view('roller.protecciones'); })->name('roller.protecciones');
    Route::get('/accesorios', function () { return view('roller.accesorios'); })->name('roller.accesorios');
});

// Rutas de Tenis
Route::prefix('tenis')->group(function () {
    Route::get('/', function () { return view('tenis.index'); })->name('tenis');
    Route::get('/tallas', function () { return view('tenis.tallas'); })->name('tenis.tallas');
    Route::get('/marcas', function () { return view('tenis.marcas'); })->name('tenis.marcas');
});

// Rutas de Ropa
Route::prefix('ropa')->group(function () {
    Route::get('/', function () { return view('ropa.index'); })->name('ropa');
    
    // Ropa - Hombre
    Route::get('/hombre/playeras', function () { return view('ropa.hombre.playeras'); })->name('ropa.hombre.playeras');
    Route::get('/hombre/pantalones', function () { return view('ropa.hombre.pantalones'); })->name('ropa.hombre.pantalones');
    Route::get('/hombre/chamarras', function () { return view('ropa.hombre.chamarras'); })->name('ropa.hombre.chamarras');
    
    // Ropa - Mujer
    Route::get('/mujer/playeras', function () { return view('ropa.mujer.playeras'); })->name('ropa.mujer.playeras');
    Route::get('/mujer/pantalones', function () { return view('ropa.mujer.pantalones'); })->name('ropa.mujer.pantalones');
    Route::get('/mujer/chamarras', function () { return view('ropa.mujer.chamarras'); })->name('ropa.mujer.chamarras');
    
    // Accesorios de Ropa
    Route::get('/accesorios/calcetas', function () { return view('ropa.accesorios.calcetas'); })->name('ropa.accesorios.calcetas');
    Route::get('/accesorios/beanies', function () { return view('ropa.accesorios.beanies'); })->name('ropa.accesorios.beanies');
    Route::get('/accesorios/gorras', function () { return view('ropa.accesorios.gorras'); })->name('ropa.accesorios.gorras');
    Route::get('/accesorios/cinturones', function () { return view('ropa.accesorios.cinturones'); })->name('ropa.accesorios.cinturones');
});

// Rutas de Accesorios
Route::prefix('accesorios')->group(function () {
    Route::get('/', function () { return view('accesorios.index'); })->name('accesorios');
    Route::get('/mochilas', function () { return view('accesorios.mochilas'); })->name('accesorios.mochilas');
    Route::get('/stickers', function () { return view('accesorios.stickers'); })->name('accesorios.stickers');
    Route::get('/carteras', function () { return view('accesorios.carteras'); })->name('accesorios.carteras');
    Route::get('/fingerboards', function () { return view('accesorios.fingerboards'); })->name('accesorios.fingerboards');
    Route::get('/gafas', function () { return view('accesorios.gafas'); })->name('accesorios.gafas');
});

// Otras rutas
Route::get('/mapa', function () { return view('mapa'); })->name('mapa');

// Carrito y Favoritos
Route::get('/carrito', function () { return view('cart.index'); })->name('cart');
Route::get('/favoritos', function () { return view('favorites.index'); })->name('favorites');


// Ruta de productos
Route::get('/productos', function () {
    return view('products.index');
})->name('products.index');
Route::prefix('admin')->group(function () {
    // Productos
    Route::resource('products', \App\Http\Controllers\ProductController::class)
        ->names([
            'index' => 'admin.products.index',
            'create' => 'admin.products.create',
            'store' => 'admin.products.store',
            'show' => 'admin.products.show',
            'edit' => 'admin.products.edit',
            'update' => 'admin.products.update',
            'destroy' => 'admin.products.destroy'
        ]);
});