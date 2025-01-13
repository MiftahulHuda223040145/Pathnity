<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Vacancies;
use App\Models\User;
use Illuminate\Database\Seeder;

class ApplicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengambil semua vacancy yang sudah ada
        $vacancies = Vacancies::all();

        // Mengambil user dengan ID 1-10
        $users = User::whereIn('id', range(1, 10))->get();

        // Membuat aplikasi untuk setiap vacancy dan user
        foreach ($vacancies as $vacancy) {
            foreach ($users as $user) {
                // Generate status aplikasi yang acak
                $status = ['pending', 'interview', 'accepted', 'rejected'][array_rand(['pending', 'interview', 'accepted', 'rejected'])];

                Application::create([
                    'user_id' => $user->id,
                    'vacancy_id' => $vacancy->id,
                    'status' => $status, // Status acak
                    'cover_letter' => 'Cover letter for ' . $user->name . ' for the position of ' . $vacancy->title,
                    'resume' => 'resume.pdf', // Sesuaikan dengan file upload
                ]);
            }
        }
    }
}
