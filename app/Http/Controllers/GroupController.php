<?php

namespace App\Http\Controllers;

use App\Enums\LevelEnum;
use App\Http\Requests\StoreGroupRequest;
use App\Models\Group;
use App\Models\Subject;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monolog\Level;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::with('creator')->get();
        $subjects = Subject::all();

        return view('groups.index', compact('groups', 'subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $levels = LevelEnum::list();
        $subjects = Subject::pluck('title', 'description', 'id');

        return view('groups.create', compact('levels', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        Auth::user()->groups()->create($request->validated());

        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subjects = Subject::all();

        return view('groups.show', compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
