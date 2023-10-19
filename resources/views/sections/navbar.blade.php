<nav class="navbar navbar-expand-md bg-light sticky-top shadow">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand me-md-3 me-0">Gamestore</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fw-bold fs-5 mr-10" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold fs-5" href="{{ url('shop') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold fs-5" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <form class="d-flex ms-lg-auto me-md-3 me-0">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
        <div class="d-flex align-items-center position-relative cart-icon-container pr-1">
            <i class="fa fa-shopping-basket h4 me-2"></i>
            <b-badge pill variant="primary" class="cart-counter badge">0</b-badge>
        </div>
    </div>
</nav>
