<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
       $category = ['Sport', 'Musique' , 'Gastronomie' ,'TI' ,];

       for($i=0; $i<count($category); $i++){
        Category::create([
           'label' =>$category[$i]

        ]);

       }
     * @return void
     */
    public function run()
    {

        \App\Models\Category::factory(5)->create();




    }
}
