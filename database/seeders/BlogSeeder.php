<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Tips Interview',
                'author' => 'herdy',
                'slug' => 'tips-interview',
                'image' => 'image',
                'category_id' => '3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
            [
                'title' => 'Tips Membuat CV',
                'author' => 'herdy',
                'slug' => 'tips-membuat-cv',
                'image' => 'image',
                'category_id' => '3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
            [
                'title' => 'Tips Membuat Resume',
                'author' => 'herdy',
                'slug' => 'tips-membuat-resume',
                'image' => 'image',
                'category_id' => '3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
            [
                'title' => 'Tips Membuat Cover Letter',
                'author' => 'herdy',
                'slug' => 'tips-membuat-cover-letter',
                'image' => 'image',
                'category_id' => '3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
            [
                'title' => 'Tips Membuat CV Online',
                'author' => 'herdy',
                'slug' => 'tips-membuat-cv-online',
                'image' => 'image',
                'category_id' => '3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
            [
                'title' => 'Cara membuat Website',
                'author' => 'herdy',
                'slug' => 'cara-membuat-website',
                'image' => 'image',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
            [
                'title' => 'Apa itu HTTP?',
                'author' => 'herdy',
                'slug' => 'apa-itu-http',
                'image' => 'image',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
            [
                'title' => 'Cara Membuat Website dengan WordPress',
                'author' => 'herdy',
                'slug' => 'cara-membuat-website-dengan-wordpress',
                'image' => 'image',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
            [
                'title' => 'PPN batal 12%',
                'author' => 'herdy',
                'slug' => 'ppn-batal-12',
                'image' => 'image',
                'category_id' => '2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
            [
                'title' => 'BBM meningkat karena PPN',
                'author' => 'herdy',
                'slug' => 'bbm-meningkat-karena-ppn',
                'image' => 'image',
                'category_id' => '2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
            [
                'title' => 'Saham Anjlok',
                'author' => 'herdy',
                'slug' => 'saham-anjlok',
                'image' => 'image',
                'category_id' => '2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus debitis quos exercitationem maxime, aliquid deleniti itaque tempore vero fugit iusto. Quam nemo fugit laudantium eligendi culpa quasi commodi quo aliquid.'
            ],
        ];
        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
