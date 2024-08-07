@guest()
    <nav class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-dark" href="#">Student Management</a>
        <ul class="navbar-nav px-3">
            <a class="btn btn-success" href="{{ route('register') }}">Sign up</a>
            <a class="btn btn-info" href="{{ route('login') }}">Sign in</a>
        </ul>



    </nav>
@endguest

