<?php

namespace Database\Seeders;

use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = CategoryModel::all();
        $user=User::all();
        for ($i = 1; $i<=20;$i++){
            PostModel::create([
                'title'=>"Post $i",
                'description'=>"This is the body of Post $i",
                'category_id'=>$category->random()->id,
                'user_id'=>$user->random()->id(),
            ]);
        }
    }
}
