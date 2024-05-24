<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::where('role', 'teacher')->get();

        return view('teacher.index', compact('teachers'));
    }

    public function show(User $teacher)
    {
        $subjects = Subject::where('teacher_id', $teacher->id)->get();
        return view('teacher.show', [
            'teacher' => $teacher,
            'subjects' => $subjects
        ]);
    }
}
