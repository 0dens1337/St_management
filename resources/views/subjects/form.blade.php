@extends('layouts.app')
@section('content')
    <form action="{{ $action }}" method="POST" class="border w-50 p-4 m-auto">
        @csrf
        @method($method)
        <h2 class="justify-content-center text-center text-white">Enter a Group Name</h2>
        <div class="form-group">
            <label for="title" class="text-white">Title</label>
            <input type="text" class="form-control mb-2" id="title" name="title" required>
            <label for="description" class="text-white">Description</label>
            <input type="text" class="form-control mb-2" id="description" name="description" required>
            <p class="text-white justify-content-center text-center">Select Group</p>
            <select name="group_id" id="group_id" class="form-control w-50 justify-content-center text-center">
                @foreach($groups as $id => $group)
                    <option value="{{ $id }}">{{ $group->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-2">Submit</button>
    </form>
@endsection
