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
        $user = auth()->user();

        $subjects = [];
        $reports = [];

        if ($user->role === User::ROLE_TEACHER) {
            $subjects = Subject::with('reports')
                ->where('teacher_id', $user->id)->get();

            $reports = $subjects->pluck('reports')->flatten();
        }
        else if ($user->role === User::ROLE_STUDENT) {
            $subjects = $user->subjects()->with('reports')->get();

            $reports = $user->reports;
        }

        return view('profile.show', [
            'profile' => $request->user(),
            'subjects' => $subjects,
            'reports' => $reports
            ]);
    }
}
