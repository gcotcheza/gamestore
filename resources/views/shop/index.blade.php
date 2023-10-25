@extends('layouts.app')


@section('content')
    <section class="shop py-5">
        <div class="px-lg-5 container mt-5 px-4">
            <h1 class="text-light mb-5">Games</h1>
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary shadow-sm">
                        <a href="{{ url('/shop/1') }}" class="stretched-link">
                            <img class="card-img-top" src="{{ asset('img/mario_kaart.png') }}" alt="Mario Kaart" />
                        </a>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bold text-light">Mario Kaart 8</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2 gap-1">
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                </div>
                                <span class="text-light">&euro; 39,99</span>
                            </div>
                        </div>
                        <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-primary text-white">
                                    <span class="fw-bold fs-5">+</span>
                                    <i class="fa fa-shopping-basket fa-lg me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary shadow">
                        <!-- Sale badge-->
                        <div class="badge bg-dark position-absolute text-white" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <a href="{{ url('/shop/1') }}" class="stretched-link">
                            <img class="card-img-top" src="{{ asset('img/grand_theft_auto.png') }}"
                                alt="Grand theft auto" />
                        </a>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder text-light">Grand Theft Auto</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2 gap-1">
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                </div>
                                <span class="text-light text-decoration-line-through">&euro; 49,99</span>
                                <span class="text-light"> &euro; 39,99</span>
                            </div>
                        </div>
                        <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-primary text-white">
                                    <span class="fw-bold fs-5">+</span>
                                    <i class="fa fa-shopping-basket fa-lg me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary shadow">
                        <a href="{{ url('/shop/1') }}" class="stretched-link">
                            <img class="card-img-top" src="{{ asset('img/thelegendofzeldabreathofthewild.png') }}"
                                alt="The Legend of zelda" />
                        </a>
                        <div class="card-body p-4">
                            <div class="text-light text-center">
                                <h5 class="fw-bolder">The Legend of Zelda</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2 gap-1">
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                </div>
                                <span> &euro; 39,99</span>

                            </div>
                        </div>
                        <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                            <div class="text-center"> <button type="button" class="btn btn-outline-primary text-white">
                                    <span class="fw-bold fs-5">+</span>
                                    <i class="fa fa-shopping-basket fa-lg me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary shadow">
                        <!-- Sale badge-->
                        <div class="badge bg-dark position-absolute text-white" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <img class="card-img-top" src="{{ asset('img/ocarina_of_time.png') }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-light text-center">
                                <h5 class="fw-bolder">Ocarina of Time</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2 gap-1">
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star-o"></div>
                                </div>
                                <span class="text-light text-decoration-line-through">&euro; 51,99</span>
                                <span> &euro; 41,99</span>
                            </div>
                        </div>
                        <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-primary text-white">
                                    <span class="fw-bold fs-5">+</span>
                                    <i class="fa fa-shopping-basket fa-lg me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary shadow">
                        <img class="card-img-top" src="{{ asset('img/red_dead_redemption2.png') }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-light text-center">
                                <h5 class="fw-bolder">Red Dead Redemption II</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2 gap-1">
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star-half-o"></div>
                                </div>
                                <span> &euro; 25,99</span>
                            </div>
                        </div>
                        <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-primary text-white">
                                    <span class="fw-bold fs-5">+</span>
                                    <i class="fa fa-shopping-basket fa-lg me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary shadow">
                        <!-- Sale badge-->
                        <div class="badge bg-dark position-absolute fs-5 text-white" style="top: 0.5rem; right: 0.5rem">
                            Sale
                        </div>
                        <img class="card-img-top" src="{{ asset('img/super_mario_world.png') }}"
                            alt="Super Mario World" />
                        <div class="card-body p-4">
                            <div class="text-light text-center">
                                <h5 class="fw-bolder">Super Mario World</h5>
                                <div class="d-flex justify-content-center small text-warning mb-2 gap-1">
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                </div>
                                <span class="text-decoration-line-through">&euro; 35,99</span>
                                <span> &euro; 25,99</span>
                            </div>
                        </div>
                        <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-primary text-white">
                                    <span class="fw-bold fs-5">+</span>
                                    <i class="fa fa-shopping-basket fa-lg me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary shadow">
                        <!-- Sale badge-->
                        <div class="badge bg-dark position-absolute text-white" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <img class="card-img-top" src="{{ asset('img/half_life_alynx.webp') }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-light text-center">
                                <h5 class="fw-bolder">Half life Alynx</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star-o"></div>
                                </div>
                                <span class="text-light text-decoration-line-through"> &euro; 45,99</span>
                                <span> &euro; 25,99</span>
                            </div>
                        </div>
                        <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-primary text-white">
                                    <span class="fw-bold fs-5">+</span>
                                    <i class="fa fa-shopping-basket fa-lg me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary shadow">
                        <img class="card-img-top" src="{{ asset('/img/tetris.webp') }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-light text-center">
                                <h5 class="fw-bolder">Tetris</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2 gap-1">
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                    <div class="fa fa-star"></div>
                                </div>
                                <span> &euro; 25,99</span>
                            </div>
                        </div>
                        <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                            <div class="text-center">
                                <button type="button" class="btn btn-outline-primary text-white">
                                    <span class="fw-bold fs-5">+</span>
                                    <i class="fa fa-shopping-basket fa-lg me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
