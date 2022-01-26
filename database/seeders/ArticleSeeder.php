<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;



class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
        $faker = Factory::create();

       for($i=0; $i<26; $i++){
        Article::create([
            'title'=>$faker->sentence(),
            'subtitle'=>$faker->sentence(),
            'content'=>$faker->text($maxcNbChars=600),
            'category_id'=> Category::inRandomOrder()->first()->id

        ]);



       }
     * @return void
     */
    public function run()
    {
        Category::get()->each(function($category)
        {
            \App\Models\Article::factory(5)->create([
                'category_id' => $category->id]
            );
        });
    }
}
