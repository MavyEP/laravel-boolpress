<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $dati_categories = config('categories');
        $dati_categories = [
            [
                'name' => 'Photography'
            ],
            [
                'name' => 'Cinema'
            ],
            [
                'name' => 'Games'
            ],
            [
                'name' => 'Comedy'
            ],
            [
                'name' => 'Sports'
            ]
        ];

        foreach ($dati_categories as $dati_category) {
          $slug = Str::of($dati_category['name'])->slug('-')->__toString();
          $dati_category['slug'] = $slug;
          $new_category = new Category();
          $new_category->name = $dati_category['name'];
          $new_category->slug = $dati_category['slug'];
          $new_category->save();
        }
    }
}
