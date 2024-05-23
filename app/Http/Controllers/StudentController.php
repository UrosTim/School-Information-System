<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role', 'student')->get();

        return view('students.index', compact('students'));
    }

    public function show(User $student)
    {
        $subjects = $student->subjects;

        return view('students.show', [
            'student' => $student,
            'subjects' => $subjects
        ]);
    }
}
