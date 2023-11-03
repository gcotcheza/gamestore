@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-5 py-5">
            <div class="col-md-6 mb-3">
                <div class="card h-100 me-2 rounded border-0">
                    <div class="carousel carousel-dark slide" data-bs-ride="carousel" id="slider">
                        <div class="carousel-indicators">
                            <button class="active" data-bs-slide-to="0" data-bs-target="#slider"></button>
                            <button class="active" data-bs-slide-to="1" data-bs-target="#slider"></button>
                            <button class="active" data-bs-slide-to="2" data-bs-target="#slider"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active game-detail-image">
                                <img src="{{ asset('img/mario_kaart.png') }}" alt="Mario kaart images"
                                    class="game-image game-detail-image d-block w-100 img-fluid rounded">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/mario_kaart_3.webp') }}" alt="Mario kaart images"
                                    class="game-image game-detail-image d-block w-100 rounded">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/mariokart8.jpeg') }}" alt="Mario kaart images"
                                    class="game-image game-detail-image d-block w-100 rounded">
                            </div>
                        </div>
                        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slider">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slider">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 bg-secondary text-light p-4 text-center">
                    <div class="d-flex justify-content-between mt-3">
                        <h2>Mario Kaart 8</h2>
                        <h2 class="fs-4 fw-bolder me-2 text-white">&euro; 39,99</h2>
                    </div>
                    <p class="fs-5 game-description mt-4 text-start">
                        Mario Kart 8 is the ultimate adrenaline-fueled racing experience! In this high-octane game, players
                        get to burn rubber as iconic Mario characters on gravity-defying tracks filled with breathtaking
                        loops, insane jumps, and a barrage of wacky power-ups. It's the perfect recipe for heart-pounding,
                        action-packed, and wildly entertaining multiplayer mayhem!
                    </p>
                    <div class="text-light text-gray mb-3 text-start">
                        <i class="fa fa-square text-success me-2"></i>
                        <span class="fw-bold fs-6">Publisher: </span>
                        <span>Nintendo</span>
                    </div>
                    <div class="text-light text-gray mb-3 text-start">
                        <i class="fa fa-square text-success me-2"></i>
                        <span class="fw-boldtext-gray">Release date: 10 February, 2023</span>
                    </div>
                    <div class="text-light text-gray mb-3 text-start">
                        <i class="fa fa-square text-success me-2"></i>
                        <span class="fw-bold fs-6">Mode: </span>
                        <span>Single-player</span>
                    </div>
                    <div id="developer" class="accordion info mb-2 px-2 py-2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-medium fs-5 text-light" data-bs-toggle="collapse"
                                    data-bs-target="#developers">
                                    Developer(s)
                                </button>
                            </h2>
                            <div class="accordion-collapse show collapse" id="developers" data-bs-parent="#developer">
                                <div class="accordion-body bg-secondary">
                                    <ul class="list-group list-group-flush d-flex flex-row text-start">
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Nintendo Entertainment Analysis &
                                            Development (EAD)
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Nintendo Entertainment Planning &
                                            Development (EPD)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="platform" class="accordion info mb-2 rounded px-2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-5 fw-medium text-light" data-bs-toggle="collapse"
                                    data-bs-target="#platforms">
                                    Platform(s)
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="platforms" data-bs-parent="#platform">
                                <div class="accordion-body bg-secondary">
                                    <ul class="list-group list-group-flush d-flex flex-row flex-wrap">
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>SNES
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Nintendo 64
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Game Boy Advance
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>GameCube
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>DS
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>3DS
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Wii
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Wii U
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Nintendo Switch
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Android
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="genre" class="accordion info mb-2 px-2 py-2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-medium fs-5 text-light" data-bs-toggle="collapse"
                                    data-bs-target="#genres">
                                    Genre(s)
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="genres" data-bs-parent="#genre">
                                <div class="accordion-body bg-secondary">
                                    <ul class="list-group list-group-flush d-flex flex-row">
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Racing video games
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Action game
                                        </li>
                                        <li class="list-group-item bg-secondary text-gray border-0">
                                            <i class="fa fa-square text-warning me-1"></i>Multiplayer
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary m-3 mb-2">
                        <span class="fw-bold fs-5 text-white">+ Add to basket</span>
                        {{-- <i class="fa fa-shopping-basket fa-lg me-2 text-white"></i> --}}
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
