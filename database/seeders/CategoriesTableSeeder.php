<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Category::factory(10)->create();
    }
}
