<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 100%;">
    <a href="{{ route('home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Home</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('groups.index') }}" class="nav-link active" aria-current="page">
                View Groups
            </a>
        </li>
        <li>
            <a href="{{ route('subjects.index') }}" class="nav-link text-white">
                Subjects
            </a>
        </li>
        <li>
            <a href="{{ route('dashboard') }}" class="nav-link text-white">
                Dashboard
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                Users
            </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link text-white">
                    Logout
                </button>
            </form>
        </li>
    </ul>
    <hr>
</div>
