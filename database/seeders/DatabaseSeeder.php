<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Seller::factory(3)->create();
        \App\Models\Category::factory(3)->create();
        \App\Models\SubCategory::factory(2)->create();
    }
}
