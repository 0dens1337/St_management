@extends('layouts.app')
@section('content')
    <a class="btn btn-success" href="{{ route('groups.create') }}">Create Group</a>
    <table class="table table-striped mt-2">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Teacher</th>
            <th scope="col">Level</th>
            <th scope="col">Actions</th>

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
            <td><a href="{{ route('groups.show', $group->id) }}" class="btn btn-outline-primary btn-sm">View</a></td>
        </tr>
            @endforeach
        @else
            <p>No Groups Found</p>
        @endif
        </tbody>
    </table>
@endsection
