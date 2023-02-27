<div class="navbar navbar-expand-lg px-5 py-4">
    <div class="container-fluid">
        <div class="d-flex">
            <a href="/" class="navbar-brand">PPL</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ $title == "Home" ? "active" : "" }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/item" class="nav-link {{ $title == "Item" ? "active" : ""}}">Item</a>
                </li>
            </ul>
        </div>
        @auth
        <div class="d-flex">
            <nav class="nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('logout') }}" class="dropdown-item">Logout</a></li>
                    </ul>
                </li>
            </nav>
        </div>
        @endauth
        @guest
        <div class="d-flex">
            <nav class="nav">
                <a href="/login" class="nav-link {{ $title == "Login" ? "" : "text-dark" }}">Login</a>
                <a href="/register" class="nav-link {{ $title == "Register" ? "" : "text-dark"}}">Register</a>
            </nav>
        </div>
        @endguest
    </div>
</div>