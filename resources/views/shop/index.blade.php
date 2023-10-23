@extends('layouts.app')


@section('content')
    <section class="shop py-5">
        <div class="px-lg-5 container mt-5 px-4">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100 bg-secondary shadow-sm">
                        <a href="{{ url('/shop/1') }}" class="stretched-link">
                            <img class="card-img-top" src="{{ asset('img/mario_kaart.png') }}" alt="Mario Kaart" />
                        </a>
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bold text-light">Mario Kaart 8</h5>
                                <span class="text-light">$40.00 - $80.00</span>
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
                        <img class="card-img-top" src="{{ asset('img/grand_theft_auto.png') }}" alt="Grand theft auto" />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
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
                        <img class="card-img-top" src="{{ asset('img/ocarina_of_time.png') }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Sale Item</h5>
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
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
                            <div class="text-center">
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                $40.00
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
                        <img class="card-img-top" src="{{ asset('img/super_mario_world.png') }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Sale Item</h5>
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
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
                        <img class="card-img-top" src="{{ asset('img/thelegendofzeldabreathofthewild.png') }}"
                            alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder text-light">The Legend of Zelda</h5>
                                <span class="text-light">$120.00 - $280.00</span>

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
                        <img class="card-img-top" src="{{ asset('img/half_life_alynx.webp') }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
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
                            <div class="text-center">
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                $40.00
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
