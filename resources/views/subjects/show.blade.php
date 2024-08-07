@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 20rem;">
            <div class="card-header">
                Description: {{ $subjects->description }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    @if (isset($subjects))
                        <div class="mb-2 mt-2">
                            <label for="is_completed">IS Completed</label>
                            <input type="checkbox" name="is_completed" id="is_completed" value="1" {{ $subjects->is_completed ? 'checked' : '' }}>
                        </div>
                    @endif
                </li>
                <li class="list-group-item text-center">
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
                </li>
            </ul>
        </div>
    </div>
@endsection
