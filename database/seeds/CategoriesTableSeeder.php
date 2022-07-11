<?php

use App\Category;
use Illuminate\Support\Str;
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
        $categories = [
            'Calcio',
            'Tennis',
            'Basket',
            'Motori',
            'Nuoto',
            'Altri sport'
        ];

        foreach ($categories as $item) {
            $new_category = new Category();
            $new_category->name = $item;
            $new_category->slug = Str::slug($new_category->name, '-');
            $new_category->save();
        }
    }
}