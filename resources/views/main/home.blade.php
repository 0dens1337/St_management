@extends('layouts.app')
@section('content')
    <main class="px-3 h-100 justify-content-center text-center text-dark mt-5">
        <div class="h-100 m-auto d-flex flex-column flex-grow-1">
            <h1>Welcome to your best Student Management</h1>
            <p class="lead">Here you might find interested information!<br> Click the button below and start overview.</p>
            <p class="lead">
                <a href="{{ route('groups.index') }}" class="btn btn-lg btn-info">View Group</a>
                <a href="{{ route('dashboard') }}" class="btn btn-lg btn-secondary w-10">To the Dashboard</a>
            </p>
        </div>
    </main>
@endsection
