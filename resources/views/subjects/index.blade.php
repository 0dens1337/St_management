@extends('layouts.app')
@section('content')
    <a class="btn btn-success" href="{{ route('subjects.create') }}">Create Group</a>
    <table class="table table-striped mt-2">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Grade</th>

        </tr>
        </thead>
        <tbody>
            @foreach($subjects as $subject)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $subject->title }}</td>
                    <td>{{ $subject->description }}</td>
                    <td>STATUS</td>
                    <td>GRADE</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
