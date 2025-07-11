<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="{{ '/' }}">
            <img src="{{ asset('images/edu-x white.png') }}" alt="Edu-X Logo" height="70" width="70">
            <div>Edu-X Services</div>
        </a>

        <!-- Toggle button for mobile screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links and buttons -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('partner') }}">Recruitment Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('institutions') }}">Institutions</a>
                </li>
                <!-- Hover Dropdown -->
              <li class="nav-item dropdown-hover">
    <a class="nav-link dropdown-toggle" href="#">
        Discover
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('student') }}">Student Services</a></li>
        <li><a class="dropdown-item" href="{{ route('events') }}">Events</a></li>
        <li><a class="dropdown-item" href="{{ route('blogs-pages') }}">Blog</a></li>
    </ul>
</li>

            </ul>
            <div class="d-flex">
                <a href="{{ route('student-login') }}" class="btn btn-custom me-2">Login</a>
                <a href="{{ route('student-register') }}" class="btn btn-custom">Register</a>
            </div>
        </div>
    </div>
</nav>


