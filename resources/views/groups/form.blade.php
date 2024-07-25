@extends('layouts.app')
@section('content')
    <form action="{{ $action }}" method="POST" class="border w-50 p-4 m-auto">
        @csrf
        @method($method)
        <h2 class="justify-content-center text-center text-white">Enter a Group Name</h2>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <button type="submit" class="btn btn-success mt-2">Submit</button>
    </form>
@endsection
