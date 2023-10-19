@extends('layouts.app')

@section('content')
    <section class="py-5 text-center">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Gamestore</h1>
                    <p class="lead text-muted">
                        Level up your gaming experience with us! At Gamestore, we're more than just a store; we're
                        your ultimate destination for all things gaming. Whether you're a hardcore gamer, a casual player,
                        or
                        shopping for the perfect gift, we've got you covered
                    </p>
                    <p>
                        <a href="{{ url('shop') }}" class="btn fs-5 fw-bold btn-outline-primary my-2 me-2">Check our
                            webshop</a>
                        <a href="{{ url('contact') }}" class="btn fs-5 btn-outline-secondary my-2">Contact us</a>
                    </p>
                </div>
                <div>

                </div>
            </div>
        </div>
    </section>

    <div class="album bg-none py-5">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h2>Games Catalogus</h2>
                <a href="{{ '/shop' }}">
                    <button type="button" class="btn">See all games
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </a>
            </div>

            <hr />
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col">
                    <div class="card h-100 bg-light d-flex flex-column align-items-stretch shadow-sm">
                        <img class="bd-placeholder-img card-img-top game-image" width="100%" height="225"
                            alt="The legend of zelda image" src="{{ asset('img/thelegendofzeldabreathofthewild.webp') }}" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-center">The Legends of Zelda: Breath of the Wild</h5>
                            <p class="card-text flex-grow-1">Embark on an epic journey and explore a vast, breathtaking
                                world, solve
                                puzzles, and face formidable foes in a quest to
                                save Hyrule. Unleash your inner hero and dive into the adventure of a lifetime.</p>
                            <div
                                class="card-footer d-flex justify-content-between align-items-center border-0 bg-transparent p-0">
                                <span class="fs-4 fw-bold">&euro; 39,99</span>
                                <button type="button" class="btn btn-outline-primary">
                                    <span class="fw-bold h4">+</span>
                                    <i class="fa fa-shopping-basket h5 me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 bg-light d-flex flex-column align-items-stretch shadow-sm">
                        <img class="bd-placeholder-img card-img-top game-image" width="100%" height="225"
                            alt="Mario kaart" src="{{ asset('img/mario_kaart.png') }}" />

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-center">Mario Kaart</h5>
                            <p class="card-text flex-grow-1">Experience the excitement of "Mario Kart." Race as beloved
                                characters,
                                master gravity-defying tracks, and use whimsical power-ups for a fun and competitive gaming
                                experience. Join the karting action and let the race begin!</p>
                            <div class="card-footer d-flex justify-content-between border-0 bg-transparent p-0">
                                <span class="fs-4 fw-bold">&euro; 29,99</span>
                                <button type="button" class="btn btn-outline-primary">
                                    <span class="fw-bold h4">+</span>
                                    <i class="fa fa-shopping-basket h5 me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 bg-light d-flex flex-column align-items-stretch shadow-sm">
                        <img class="bd-placeholder-img card-img-top game-image" width="100%" height="225"
                            alt="Grand theft auto" src="{{ asset('img/grand_theft_auto.png') }}" />

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-center">Grand Theft Auto</h5>
                            <p class="card-text flex-grow-1">Step into the dynamic world of "Grand Theft Auto." It's your
                                playground of
                                adventure, mischief, and mayhem in sprawling urban landscapes. Embrace your inner renegade,
                                create chaos, and embark on an unforgettable gaming journey! Are you ready for the ride?
                            </p>
                            <div
                                class="card-footer d-flex justify-content-between align-items-center border-0 bg-transparent p-0">
                                <span class="fs-4 fw-bold">&euro; 35,99</span>
                                <button type="button" class="btn btn-outline-primary">
                                    <span class="fw-bold h4">+</span>
                                    <i class="fa fa-shopping-basket h5 me-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
