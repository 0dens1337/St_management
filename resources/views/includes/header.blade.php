@guest()
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Student Management</a>
        <input class="form-control form-control-dark bg-dark text-white w-100" type="text" placeholder="Search"
               aria-label="Search">
        <ul class="navbar-nav px-3">
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-info" href="{{ route('register') }}">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Sign in</a>
            </li>
        </ul>

        @endguest
    </nav>
