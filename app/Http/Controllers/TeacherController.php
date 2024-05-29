<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::where('role', 'teacher')->get();

        return view('teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store(StoreTeacherRequest $request)
    {
        $teacher = new User();

        $teacher->fillAndSaveTeacher($request);

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Teacher created successfully');
    }

    public function show(User $teacher)
    {
        $subjects = Subject::where('teacher_id', $teacher->id)->get();
        return view('teacher.show', [
            'teacher' => $teacher,
            'subjects' => $subjects
        ]);
    }

    public function edit(User $teacher)
    {
        return view('teacher.edit', [
            'teacher' => $teacher
        ]);
    }

    public function update(UpdateTeacherRequest $request, User $teacher)
    {
        $teacher->fillAndSaveTeacher($request);

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Teacher updated successfully');
    }

    public function destroy(User $teacher)
    {
        $teacher->delete();
        return redirect('/teachers')
            ->with('success', 'Teacher deleted successfully');
    }
}
