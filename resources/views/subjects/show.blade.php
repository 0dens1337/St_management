@extends('layouts.app')
@section('content')
    <p class="text-white justify-content-center text-center">Description: {{ $subjects->description }}</p>
    <form action="{{ route('subjects.saveGrade', $subjects->id) }}" method="POST" class="justify-content-center text-center">
        @csrf
        <label for="grade">Grade</label>
        <select name="grade" id="grade">
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit" class="btn btn-info">Save</button>
    </form>
@endsection
