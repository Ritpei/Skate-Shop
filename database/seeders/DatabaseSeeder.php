<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
    }
}