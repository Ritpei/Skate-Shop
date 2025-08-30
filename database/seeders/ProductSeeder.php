<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ProductImage;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Productos de Skate - Tablas
            [
                'name' => 'Tabla Professional Santa Cruz',
                'category_slug' => 'skate',
                'subcategory_slug' => 'tablas',
                'price' => 1299.00,
                'compare_price' => 1499.00,
                'description' => 'Tabla profesional Santa Cruz con diseño clásico. Ideal para street y park. Medida 8.25"',
                'brand' => 'Santa Cruz',
                'model' => 'Classic Dot',
                'specifications' => [
                    'Medida' => '8.25"',
                    'Material' => 'Madera de arce canadiense',
                    'Capas' => '7 capas',
                    'Concavidad' => 'Media'
                ],
                'colors' => ['Rojo', 'Negro'],
                'sizes' => ['8.0"', '8.25"', '8.5"']
            ],
            [
                'name' => 'Tabla Element Section',
                'category_slug' => 'skate',
                'subcategory_slug' => 'tablas',
                'price' => 899.00,
                'description' => 'Tabla Element Section con diseño moderno. Perfecta para principiantes.',
                'brand' => 'Element',
                'model' => 'Section',
                'specifications' => [
                    'Medida' => '8.0"',
                    'Material' => 'Madera de arce',
                    'Capas' => '7 capas'
                ]
            ],

            // Productos de Skate - Ruedas
            [
                'name' => 'Ruedas Spitfire Formula Four',
                'category_slug' => 'skate',
                'subcategory_slug' => 'ruedas',
                'price' => 499.00,
                'description' => 'Ruedas Spitfire Formula Four 99a. Duraderas y excelente desempeño.',
                'brand' => 'Spitfire',
                'model' => 'Formula Four',
                'specifications' => [
                    'Dureza' => '99a',
                    'Diámetro' => '54mm',
                    'Contact Patch' => '34mm'
                ]
            ],

            // Productos de Tenis
            [
                'name' => 'Tenis Vans Old Skool',
                'category_slug' => 'tenis',
                'subcategory_slug' => 'skate-shoes',
                'price' => 1299.00,
                'compare_price' => 1499.00,
                'description' => 'Tenis Vans Old Skool clásicos. Ideales para skate y uso casual.',
                'brand' => 'Vans',
                'model' => 'Old Skool',
                'specifications' => [
                    'Material' => 'Lona y cuero',
                    'Suela' => 'Goma vulcanizada',
                    'Estilo' => 'Low Top'
                ],
                'colors' => ['Negro', 'Blanco', 'Rojo', 'Azul'],
                'sizes' => ['5', '6', '7', '8', '9', '10', '11']
            ],

            // Productos de Ropa
            [
                'name' => 'Playera Thrasher Flame',
                'category_slug' => 'ropa',
                'subcategory_slug' => 'playeras',
                'price' => 299.00,
                'description' => 'Playera Thrasher con icónico logo flame. 100% algodón.',
                'brand' => 'Thrasher',
                'specifications' => [
                    'Material' => '100% Algodón',
                    'Corte' => 'Regular Fit',
                    'Manga' => 'Corta'
                ],
                'colors' => ['Negro', 'Blanco', 'Gris'],
                'sizes' => ['S', 'M', 'L', 'XL']
            ],

            // Productos de Accesorios
            [
                'name' => 'Mochila Vans Classic',
                'category_slug' => 'accesorios',
                'subcategory_slug' => 'mochilas',
                'price' => 799.00,
                'description' => 'Mochila Vans clásica. Perfecta para el día a día.',
                'brand' => 'Vans',
                'specifications' => [
                    'Capacidad' => '20L',
                    'Material' => 'Poliéster',
                    'Compartimentos' => '2 principales + bolsillo frontal'
                ],
                'colors' => ['Negro', 'Azul', 'Rojo']
            ]
        ];

        foreach ($products as $productData) {
            $category = Category::where('slug', $productData['category_slug'])->first();
            $subcategory = Subcategory::where('slug', $productData['subcategory_slug'])
                ->where('category_id', $category->id)
                ->first();

            $slug = Str::slug($productData['name']);
            $counter = 1;
            while (Product::where('slug', $slug)->exists()) {
                $slug = Str::slug($productData['name']) . '-' . $counter;
                $counter++;
            }

            $product = Product::create([
                'category_id' => $category->id,
                'subcategory_id' => $subcategory->id,
                'name' => $productData['name'],
                'slug' => $slug,
                'description' => $productData['description'],
                'price' => $productData['price'],
                'compare_price' => $productData['compare_price'] ?? null,
                'quantity' => rand(5, 50),
                'sku' => 'SKU' . rand(10000, 99999),
                'brand' => $productData['brand'],
                'model' => $productData['model'] ?? null,
                'specifications' => $productData['specifications'] ?? [],
                'colors' => $productData['colors'] ?? [],
                'sizes' => $productData['sizes'] ?? [],
                'is_featured' => rand(0, 1),
                'is_active' => true,
                'in_stock' => true,
            ]);

            // Insertar imagen placeholder
            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => 'products/placeholder.jpg',
                'is_main' => true,
                'order' => 0,
            ]);
        }
    }
}