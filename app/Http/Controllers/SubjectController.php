<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Models\Group;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('users')->get();
//        $groups = $subjects->groups();

        return view('subjects.index', compact('subjects'));
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
        $group = Group::with('creator')->get();

        return view('subjects.show', compact('subjects', 'group'));
    }

    public function saveGrade(Request $request, $subjectId)
    {
        $request->validate([
            'grade' => 'required|integer|between:2,5',
            'is_completed' => 'boolean',
        ]);
        $user = Auth::user();
        $user->subjects()->syncWithoutDetaching([$subjectId => ['grade' => $request->input('grade')]]);

        return redirect()->route('subjects.index');
    }
}
