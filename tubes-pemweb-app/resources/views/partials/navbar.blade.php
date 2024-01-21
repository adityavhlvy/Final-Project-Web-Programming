<nav class="navbar navbar-expand-lg " data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/">U-HUB</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse"
            id="navbarNavAltMarkup"
        >
            <div class="navbar-nav ms-auto ">
                <a class="nav-link text-white" href="/">Home</a>
                <a class="nav-link text-white" href="/news">Berita</a>
                <a class="nav-link text-white" href="/surat">Lainnya</a>
                @auth
                <a class="nav-link text-white" href="/laporan">Pengaduan</a>
                @endauth
                @auth
                    @if (Auth::user()->role === 'admin')
                            <a class="nav-link text-white" href="/dashboard">Dashboard</a>
                    @endif
                @endauth
                @auth
                <div class="collapse navbar-collapse account" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @endauth
                @auth
                <a type="button" class="btn btn-primary rounded-pill text-white" href="/logout">Logout</a>
                @else
                <a type="button" class="btn btn-primary rounded-pill text-white" href="/login">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
