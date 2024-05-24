<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();

        if ($user->role == 'teacher') {
            $subjects = Subject::where('teacher_id', $user->id)->get();

            $reports = collect();
            foreach ($subjects as $subject) {
                $reports = $reports->merge($subject->reports);
            }
        }
        else if ($user->role == 'student') {
            $subjects = $user->subjects;

            $reports = $user->reports;
        }

        return view('profile.show', [
            'profile' => $request->user(),
            'subjects' => $subjects,
            'reports' => $reports
            ]);
    }
    public  function findReports($studentId)
    {
        $student = User::find($studentId);

        $studentReports = $student->reports;

        return $studentReports;
    }
}
