@extends('layouts.app')
@section('content')
    <a class="btn btn-success" href="{{ route('groups.create') }}">Create Group</a>
    <table class="table table-striped table-hover mt-2">
        <thead>
        <tr>
            <th scope="col" class="bg-light">#</th>
            <th scope="col" class="bg-light">Title</th>
            <th scope="col" class="bg-light">Teacher</th>
            <th scope="col" class="bg-light">Level</th>
            <th scope="col" class="bg-light">Actions</th>

        </tr>
        </thead>
        <tbody>
        @if($groups)
            @foreach($groups as $group)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $group->title }}</td>
            <td>{{ $group->creator ? $group->creator->name : 'Unknown' }}</td>
            <td>{{ $group->level }}</td>
            @dd($group->level);
            <td>
                <a href="{{ route('groups.show', $group->id) }}" class="btn btn-primary btn-sm">View</a>
                <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-info btn-sm">Edit</a>
            </td>

        </tr>
            @endforeach
        @else
            <p>No Groups Found</p>
        @endif
        </tbody>
    </table>
@endsection
