<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="/home">WebsiteTugas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Biodata") ? 'active' : '' }}" href="/biodata">Biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Comment") ? 'active' : '' }}" href="/komentar">Comment</a>
                </li>
            </ul>
            @auth
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="/dashboard">Dashboard</a>
                    </li>
                </ul>
            @else
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login">Login</a>
                    </li>
                </ul>
            @endauth
        </div>
        </div>
    </nav>