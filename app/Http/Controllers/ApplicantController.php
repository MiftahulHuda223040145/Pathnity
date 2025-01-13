<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function showProfile($id)
    {
        $user = User::findOrFail($id); // Find the user by ID

        return view('applicants.profile', compact('user'));
    }
    public function updateStatus(Request $request, $applicationId, $status)
    {
        $application = Application::findOrFail($applicationId);

        // Update status
        $application->status = $status;
        $application->save();

        return redirect()->back()->with('success', "Applicant status updated to {$status}.");
    }
    public function setInterview(Request $request, $id)
    {
        $application = Application::findOrFail($id);

        $request->validate([
            'interview_message' => 'required|string|max:500',
        ]);

        $application->update([
            'status' => 'interview',
            'interview_message' => $request->input('interview_message'),
        ]);

        return redirect()->back()->with('success', 'Applicant set for interview with a message.');
    }
    public function setAccept(Request $request, $id)
    {
        $application = Application::findOrFail($id);

        $request->validate([
            'accept_message' => 'required|string|max:500',
        ]);

        $application->update([
            'status' => 'accepted',
            'accept_message' => $request->input('accept_message'),
        ]);

        return redirect()->back()->with('success', 'Applicant accepted with a message.');
    }
}
