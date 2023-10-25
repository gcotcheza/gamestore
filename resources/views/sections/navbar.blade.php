<nav class="navbar navbar-expand-md nav-brand sticky-top text-white">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand me-md-3 text-light fw-bold me-0">
            <img class="logo" src="{{ asset('img/logo.svg') }}" alt="Gamestore logo">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fw-bold fs-5 text-light mr-10" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold fs-5 text-light" href="{{ url('shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold fs-5 text-light" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <form class="d-flex ms-lg-auto me-md-3 me-0">
            <input class="form-control me-2 bg-white" type="search" placeholder="Search" aria-label="Search">
        </form>
        <div class="d-flex align-items-center position-relative cart-icon-container pr-1">
            <i class="fa fa-shopping-basket fa-2x me-2 py-2"></i>
            <span class="cart-counter badge fw-bold text-dark">0</span>
        </div>
    </div>
</nav>
