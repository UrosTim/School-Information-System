<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Report;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::students()->get();

        return view('students.index', [
            'students' => $students
        ]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StoreStudentRequest $request)
    {

        $student = new User();

        $student->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::ROLE_STUDENT,
        ]);
        $student->save();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student created successfully');
    }

    public function show(User $student)
    {
        $subjects = $student->subjects;

        $reports = Report::with('subject')->get();


        return view('students.show', [
            'student' => $student,
            'subjects' => $subjects,
            'reports' => $reports,
        ]);
    }

    public function edit(User $student)
    {
        return view('students.edit', [
            'student' => $student,
        ]);
    }

    public function update(UpdateStudentRequest $request, User $student)
    {
        $student->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => User::ROLE_STUDENT,
        ]);
        $student->save();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student updated successfully');
    }

    public function destroy(User $student)
    {
        $student->delete();
        return redirect('/students')
            ->with('success', 'Student deleted successfully');
    }
}
