<?php

namespace Database\Seeders;

use App\Models\CategoryModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            'Laravel',
            'C# Programming',
            'Java Programming',
            'Python Programming',
            'Python Django'
        ];

        foreach ($category as $categorys){
            CategoryModel::create([
                'name'=>$categorys,
            ]);
        }
    }
}
