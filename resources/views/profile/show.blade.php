@extends('layouts.app')
@section('content')
    <section class="w-100 px-4 py-5 bg-light" style=" border-radius: .5rem .5rem 0 0;">
        <div class="row d-flex justify-content-center">
            <div class="col col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="https://wallpapers.com/images/hd/dark-humor-pictures-1349-x-900-93iw5unqqmuuqnra.jpg"
                                     alt="Generic placeholder image" class="img-fluid" style="width: 180px; border-radius: 10px;">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">{{ $user->name }}</h5>
                                <p class="mb-2 pb-1">Role: {{ $user->role_name }}</p>
                                <p class="mb-2 pb-1">Description: </p> {{--Need To FIXXXXXX--}}
                                <div class="d-flex justify-content-center text-center rounded-3 p-2 mb-2 bg-body-tertiary">
                                    <div>
                                        <p class="small text-muted mb-1">Groups</p>
                                        <p class="mb-0 text-center">{{ $groupsCount }}</p>
                                    </div>
                                    <div class="px-3">
                                        <p class="small text-muted mb-1">Level</p>
                                        <p class="mb-0 text-center"> {{ $user->level_name }}</p>
                                    </div>
                                    <div>
                                        <p class="small text-muted mb-1">Grade AVG</p>
                                        <p class="mb-0 text-center">8.5</p>
                                    </div>
                                </div>
                                <div class="d-flex pt-1">
                                    <a href="{{ route('profile.edit') }}" type="button" class="btn btn-warning flex-grow-1">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
