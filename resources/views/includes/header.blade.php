<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-violet-950 mb-3">
    <a class="navbar-brand" href='/'>Student Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @guest()
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">About</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-outline-info" href="{{ route('register') }}">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Sign in</a>
            </li>
        </ul>
    </div>
    @endguest
</nav>
