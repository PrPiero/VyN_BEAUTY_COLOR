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
    public function run()
    {
        Category::truncate();

        $category = new Category;
        $category->category ="Shampoo";
        $category->save();

        $category = new Category;
        $category->category ="Mascarilla para el Cabello";
        $category->save();

        $category = new Category;
        $category->category ="Aceite para el Cabello";
        $category->save();

        $category = new Category;
        $category->category ="Tinte para el Cabello";
        $category->save();

        $category = new Category;
        $category->category ="Acondicionador";
        $category->save();

        $category = new Category;
        $category->category ="Crema para el Cabello";
        $category->save();
    }
}
