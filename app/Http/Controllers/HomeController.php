<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Vacancies;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data vacancies dengan tipe volunteer (types_id = 4)
        $volunteers = Vacancies::with(['category', 'type', 'organizer'])
            ->where('types_id', 4) // Filter to only include volunteers
            ->get()
            ->map(function ($vacancy) {
                // Check for specific IDs and set a custom logo
                if ($vacancy->id == 86) {
                    $vacancy->logo = 'img/community.png';
                } elseif ($vacancy->id == 87) {
                    $vacancy->logo = 'img/clean.png';
                } elseif ($vacancy->id == 88) {
                    $vacancy->logo = 'img/education.png';
                } else {
                    // Default logo for other vacancies
                    $vacancy->logo = 'img/defender.png';
                }

                return $vacancy;
            });
        $jobs = Vacancies::with(['category', 'type', 'organizer'])
            ->where('types_id', '!=', 4)
            ->take(3)
            ->get();


        // $jobs = [
        //     [
        //         'title' => 'Fullstack Developer',
        //         'company_name' => 'PT. Pertahanan Jaya',
        //         'location' => 'Jakarta, Indonesia',
        //         'status' => 'Online',
        //         'salary' => 20000000,
        //         'logo' => 'img/defender.png',
        //     ],
        //     [
        //         'title' => 'Pramuniaga/SPG',
        //         'company_name' => 'PT. Alihkan',
        //         'location' => 'Jakarta, Indonesia',
        //         'status' => 'Online',
        //         'salary' => 2000000,
        //         'logo' => 'img/compass.png',
        //     ],
        //     [
        //         'title' => 'Product Developer',
        //         'company_name' => 'PT. Pertama',
        //         'location' => 'Jakarta, Indonesia',
        //         'status' => 'Online',
        //         'salary' => 2000000,
        //         'logo' => 'img/gas.png',
        //     ],
        // ];
        $logos = [
            'cooking.png',
            'defender.png',
            'compass.png',
            'gas.png',
            'tea.png',
            'clean.png',
            'apple.png',
            'brand-image.png',
            'netflix.png',
            'cooking.png',
            'defender.png',
            'compass.png',
            'gas.png',
            'tea.png',
            'clean.png',
            'apple.png',
            'brand-image.png',
            'netflix.png',
            'cooking.png',
            'defender.png',
            'compass.png',
            'gas.png',
            'tea.png',
            'clean.png',
            'apple.png',
            'brand-image.png',
            'netflix.png',
            'gas.png',
            'tea.png',
        ];
        $blogs = Blog::latest()->take(4)->get();

        // Kirim data ke view
        return view('home', compact('jobs', 'volunteers', 'logos', 'blogs'));
    }
}
