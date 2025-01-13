<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vacancies;
use App\Models\Application;

class CareerController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            return view('career.career')->with('authError', true);
        }

        // Fetch data based on status
        $myCareer = Vacancies::whereHas('applications', function ($query) use ($user) {
            $query->where('user_id', $user->id)
                ->where('status', 'accepted');
        })->where('status', 0)
            ->get();

        $waiting = Vacancies::with(['applications' => function ($query) use ($user) {
            $query->where('user_id', $user->id)
                ->whereIn('status', ['pending', 'interview', 'accepted'])
                ->select('id', 'vacancy_id', 'user_id', 'status');
        }])
            ->where('status', 1) 
            ->whereHas('applications', function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->whereIn('status', ['pending', 'interview', 'accepted']);
            })->get();

        $history = Vacancies::whereHas('applications', function ($query) use ($user) {
            $query->where('user_id', $user->id)
                ->where('status', 'rejected');
        })->get();

        return view('career.careers', compact('myCareer', 'waiting', 'history', 'user'));
    }
    public function show($id)
    {
        $application = Application::with('vacancy.organizer', 'vacancy.category', 'vacancy.type')->findOrFail($id);

        return view('career.career', compact('application'));
    }
}
