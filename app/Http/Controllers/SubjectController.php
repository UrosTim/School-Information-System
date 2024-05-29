<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();

        return view('subject.index', [
            'subjects' => $subjects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        $subject = new Subject();

        $subject->fill([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'teacher_id' => $request->input('teacher_id'),
            'slug' => Str::slug($request->input('title'), '-')
        ]);

        $subject->save();

        return redirect()
            ->route('subjects.index')
            ->with('success', 'Subject created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        $students = $subject->students;

        $reports = $subject->reports;

        return view('subject.show', [
            'subject' => $subject,
            'students' => $students,
            'reports' => $reports
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('subject.edit', [
            'subject' => $subject
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        $subject->fill([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'teacher_id' => $request->input('teacher_id'),
            'slug' => Str::slug($request->input('title'), '-')
        ]);

        $subject->save();

        return redirect()
            ->route('subjects.index')
            ->with('success', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect('/subjects');
    }
}
