<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Skate',
                'slug' => 'skate',
                'description' => 'Todo para skateboarding: tablas, trucks, ruedas y más',
                'subcategories' => [
                    ['name' => 'Tablas', 'slug' => 'tablas', 'description' => 'Tablas de skate completas y decks'],
                    ['name' => 'Ruedas', 'slug' => 'ruedas', 'description' => 'Ruedas para skate de diferentes medidas y durezas'],
                    ['name' => 'Trucks', 'slug' => 'trucks', 'description' => 'Trucks para skate de diversas marcas'],
                    ['name' => 'Rodamientos', 'slug' => 'rodamientos', 'description' => 'Rodamientos ABEC para mejor desempeño'],
                    ['name' => 'Completas', 'slug' => 'completas', 'description' => 'Skates completos listos para usar'],
                ]
            ],
            [
                'name' => 'Roller',
                'slug' => 'roller',
                'description' => 'Patines y accesorios para patinaje',
                'subcategories' => [
                    ['name' => 'Patines', 'slug' => 'patines', 'description' => 'Patines en línea y quad'],
                    ['name' => 'Ruedas', 'slug' => 'ruedas-roller', 'description' => 'Ruedas para patines'],
                    ['name' => 'Protecciones', 'slug' => 'protecciones', 'description' => 'Cascos, rodilleras y coderas'],
                    ['name' => 'Accesorios', 'slug' => 'accesorios-roller', 'description' => 'Herramientas y repuestos'],
                ]
            ],
            [
                'name' => 'Tenis',
                'slug' => 'tenis',
                'description' => 'Calzado deportivo para skate y lifestyle',
                'subcategories' => [
                    ['name' => 'Skate Shoes', 'slug' => 'skate-shoes', 'description' => 'Tenis especializados para skateboarding'],
                    ['name' => 'Running', 'slug' => 'running', 'description' => 'Tenis para running y entrenamiento'],
                    ['name' => 'Casual', 'slug' => 'casual', 'description' => 'Tenis casuales y lifestyle'],
                ]
            ],
            [
                'name' => 'Ropa',
                'slug' => 'ropa',
                'description' => 'Ropa técnica y casual para deportes urbanos',
                'subcategories' => [
                    ['name' => 'Playeras', 'slug' => 'playeras', 'description' => 'Playeras y t-shirts'],
                    ['name' => 'Pantalones', 'slug' => 'pantalones', 'description' => 'Pants y jeans'],
                    ['name' => 'Chamarras', 'slug' => 'chamarras', 'description' => 'Chamarras y hoodies'],
                    ['name' => 'Accesorios', 'slug' => 'accesorios-ropa', 'description' => 'Gorras, calcetines y más'],
                ]
            ],
            [
                'name' => 'Accesorios',
                'slug' => 'accesorios',
                'description' => 'Accesorios y complementos',
                'subcategories' => [
                    ['name' => 'Mochilas', 'slug' => 'mochilas', 'description' => 'Mochilas y bags'],
                    ['name' => 'Stickers', 'slug' => 'stickers', 'description' => 'Stickers y parches'],
                    ['name' => 'Carteras', 'slug' => 'carteras', 'description' => 'Carteras y billeteras'],
                    ['name' => 'Fingerboards', 'slug' => 'fingerboards', 'description' => 'Fingerboards y accesorios'],
                    ['name' => 'Gafas', 'slug' => 'gafas', 'description' => 'Gafas y lentes deportivos'],
                ]
            ],
        ];

        foreach ($categories as $categoryData) {
            $categoryId = DB::table('categories')->insertGetId([
                'name' => $categoryData['name'],
                'slug' => $categoryData['slug'],
                'description' => $categoryData['description'],
                'order' => 0,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($categoryData['subcategories'] as $index => $subcategory) {
                DB::table('subcategories')->insert([
                    'category_id' => $categoryId,
                    'name' => $subcategory['name'],
                    'slug' => $subcategory['slug'],
                    'description' => $subcategory['description'],
                    'order' => $index,
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}