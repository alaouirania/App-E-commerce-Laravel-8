<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['title' => 'IT and electrics']);
        Category::create(['title' => 'Vehicles']);
        Category::create(['title' => 'Real Estate']);
        Category::create(['title' => 'Clothing and well-being']);
        Category::create(['title' => 'Hobbies and entertainment']);
    }
   
}
