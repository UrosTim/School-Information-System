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
        $teachers = User::teachers()->get();

        return view('teacher.index', [
            'teachers' => $teachers
        ]);
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store(StoreTeacherRequest $request)
    {
        $teacher = new User();

        $teacher->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::ROLE_TEACHER,
        ]);
        $teacher->save();

        return redirect()
            ->route('teachers.index')
            ->with('success', 'Teacher created successfully');
    }

    public function show(User $teacher)
    {
        $subjects = Subject::with('teacher')->where('teacher_id', $teacher->id)->get();
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
        $teacher->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'teacher',
        ]);
        $teacher->save();

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
