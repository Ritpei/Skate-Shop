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
                'description' => 'Todo para skateboarding',
                'subcategories' => [
                    ['name' => 'Tablas', 'slug' => 'tablas'],
                    ['name' => 'Ruedas', 'slug' => 'ruedas'],
                    ['name' => 'Trucks', 'slug' => 'trucks'],
                    ['name' => 'Rodamientos', 'slug' => 'rodamientos'],
                    ['name' => 'Completas', 'slug' => 'completas'],
                ]
            ],
            [
                'name' => 'Roller',
                'slug' => 'roller',
                'description' => 'Patines y accesorios',
                'subcategories' => [
                    ['name' => 'Patines', 'slug' => 'patines'],
                    ['name' => 'Ruedas', 'slug' => 'ruedas-roller'],
                    ['name' => 'Protecciones', 'slug' => 'protecciones'],
                    ['name' => 'Accesorios', 'slug' => 'accesorios-roller'],
                ]
            ],
            [
                'name' => 'Tenis',
                'slug' => 'tenis',
                'description' => 'Calzado deportivo',
                'subcategories' => [
                    ['name' => 'Skate Shoes', 'slug' => 'skate-shoes'],
                    ['name' => 'Running', 'slug' => 'running'],
                    ['name' => 'Casual', 'slug' => 'casual'],
                ]
            ],
            [
                'name' => 'Ropa',
                'slug' => 'ropa',
                'description' => 'Ropa técnica y casual',
                'subcategories' => [
                    ['name' => 'Playeras', 'slug' => 'playeras'],
                    ['name' => 'Pantalones', 'slug' => 'pantalones'],
                    ['name' => 'Chamarras', 'slug' => 'chamarras'],
                    ['name' => 'Accesorios', 'slug' => 'accesorios-ropa'],
                ]
            ],
            [
                'name' => 'Accesorios',
                'slug' => 'accesorios',
                'description' => 'Accesorios diversos',
                'subcategories' => [
                    ['name' => 'Mochilas', 'slug' => 'mochilas'],
                    ['name' => 'Stickers', 'slug' => 'stickers'],
                    ['name' => 'Carteras', 'slug' => 'carteras'],
                    ['name' => 'Fingerboards', 'slug' => 'fingerboards'],
                    ['name' => 'Gafas', 'slug' => 'gafas'],
                ]
            ],
        ];

        foreach ($categories as $categoryData) {
            $category = DB::table('categories')->insertGetId([
                'name' => $categoryData['name'],
                'slug' => $categoryData['slug'],
                'description' => $categoryData['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($categoryData['subcategories'] as $subcategory) {
                DB::table('subcategories')->insert([
                    'category_id' => $category,
                    'name' => $subcategory['name'],
                    'slug' => $subcategory['slug'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}