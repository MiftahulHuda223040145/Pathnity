<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Technology', 'slug' => 'technology'],
            ['name' => 'Politics', 'slug' => 'politics'],
            ['name' => 'Work', 'slug' => 'work'],
            ['name' => 'Sosial', 'slug' => 'sosial'],
            ['name' => 'Lingkungan', 'slug' => 'lingkungan'],
            ['name' => 'Pendidikan', 'slug' => 'pendidikan'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
