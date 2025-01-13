<?php

namespace App\Http\Controllers;

use App\Models\Vacancies;
use App\Models\Application;
use Illuminate\Http\Request;

class DashOrgController extends Controller
{
    public function index()
    {
        $organizerId = auth('organizer')->id();

        $workers = Application::with(['user', 'vacancy'])
            ->whereHas('vacancy', function ($query) use ($organizerId) {
                $query->where('organizer_id', $organizerId)
                    ->where('status', 0); // Lowongan sudah inactive
            })
            ->where('status', 'accepted') // Aplikasi diterima
            ->get();
        // Ambil data lowongan berdasarkan status
        $activeVacancies = Vacancies::with(['category', 'type', 'applications'])
            ->where('status', 1) // Hanya lowongan aktif
            ->where('organizer_id', auth('organizer')->id())
            ->get();

        $inactiveVacancies = Vacancies::with(['category', 'type', 'applications'])
            ->where('status', 0) // Hanya lowongan tidak aktif
            ->where('organizer_id', auth('organizer')->id())
            ->get();

        // Kirim data ke view
        return view('dashorg.dashorg', compact('activeVacancies', 'inactiveVacancies', 'workers'));
    }

    public function destroyVacancy($id)
    {
        $vacancy = Vacancies::findOrFail($id);
        $vacancy->delete();

        return redirect('/dashorg')->with('success', 'Vacancy berhasil dihapus.');
    }

    public function seeApplicants(Vacancies $vacancy)
    {
        // Ambil semua pelamar berdasarkan lowongan
        $applicants = $vacancy->applications()->with('user')->get(); // Pastikan ada relasi applications dan user di model Vacancies

        return view('dashorg.see-aplicants', [
            'vacancy' => $vacancy,
            'applicants' => $applicants
        ]);
    }

    public function workers()
    {
        $organizerId = auth('organizer')->id();

        // Mengambil pekerja yang diterima (status = 'accepted') dan lowongan sudah inactive (status = 0)
        $workers = Application::with(['user', 'vacancy'])
            ->whereHas('vacancy', function ($query) use ($organizerId) {
                $query->where('organizer_id', $organizerId)
                    ->where('status', 0);
            })
            ->where('status', 'accepted')
            ->get();

        return view('dashorg.dashorg', compact('workers'));
    }

    public function fireWorker($id)
    {
        $application = Application::findOrFail($id);
        $application->update(['status' => 'fired']);

        return redirect()->back()->with('success', 'Worker has been fired.');
    }
}
