<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Models\Group;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        $groups = Group::all();

        return view('subjects.index', compact('subjects', 'groups'));
    }

    public function create()
    {
        $groups = Group::all();

        return view('subjects.create', compact('groups'));
    }

    public function store(StoreSubjectRequest $request)
    {
        Subject::create($request->validated());

        return redirect()->route('subjects.index');
    }

    public function show($subjectsId)
    {
        $subjects = Subject::findOrFail($subjectsId);

        return view('subjects.show', compact('subjects'));
    }

    public function saveGrade(Request $request, $subjectId)
    {
        $request->validate([
            'grade' => 'required|integer|between:2,5'
        ]);
        $user = Auth::user();
        $user->subjects()->syncWithoutDetaching([$subjectId => ['grade' => $request->input('grade')]]);

        return redirect()->back();
    }
}
