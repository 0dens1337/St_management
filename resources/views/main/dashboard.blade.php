@extends('layouts.app')
@section('content')
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="nav-link text-dark">
            Logout
        </button>
    </form>
@endsection
