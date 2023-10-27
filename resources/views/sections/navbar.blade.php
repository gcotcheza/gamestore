<nav class="navbar navbar-sticky navbar-expand-md nav-brand sticky-top text-white">
    <div class="container">
        <div class="d-flex justify-content-between w-100">
            <div class="navigation d-flex justify-content-start">
                <div>
                    <button type="button" class="navbar-toggler bg-outline-transparent me-2 mt-2 p-1"
                        data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon text-white"></span>
                    </button>
                </div>
                <a href="{{ url('/') }}" class="navbar-brand me-md-3 text-light fw-bold me-0 mt-2">
                    <img class="logo" src="{{ asset('img/logo.svg') }}" alt="Gamestore logo">
                </a>
                <div class="mt-2">
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
                </div>
            </div>
            <div class="nav-search d-flex">
                <form class="d-flex d-none d-md-block ms-lg-auto me-md-3 me-0 mt-2">
                    <input class="form-control me-2 bg-white" type="search" placeholder="Search" aria-label="Search">
                </form>
                <div class="cart">
                    <div class="d-flex align-items-center position-relative cart-icon-container pr-1">
                        <i class="fa fa-shopping-basket fa-2x me-2 py-2"></i>
                        <span class="cart-counter badge fw-bold py-2">0</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>
