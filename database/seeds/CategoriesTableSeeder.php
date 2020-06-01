<?php

use App\Category;
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
        Category::create([
            'name' => 'Ordinateur',
            'slug' => 'ordinateur'
        ]);

        Category::create([
            'name' => 'Imprimante&Scanner',
            'slug' => 'imprimante&scanner'
        ]);

        Category::create([
            'name' => 'Périphérique',
            'slug' => 'périphérique'
        ]);

        Category::create([
            'name' => 'Onduleur',
            'slug' => 'onduleur'
        ]);

        Category::create([
            'name' => 'Image&Son',
            'slug' => 'image&son'
        ]);
        Category::create([
            'name' => 'Téléphone',
            'slug' => 'téléphone'
        ]);
        Category::create([
            'name' => 'Réseau',
            'slug' => 'réseau'
        ]);
    }
}