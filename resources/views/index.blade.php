@extends('layouts.app')

@section('content')
    <section class="mb-4 mt-5 text-center">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 id="typing-text" class="fw-light text-light">Welcome to GameStore</h1>
                    <p class="lead text-light">
                        Level up your gaming experience with us! At GameStore, we're more than just a store; we're
                        your ultimate destination for all things gaming. Whether you're a hardcore gamer, a casual player,
                        or
                        shopping for the perfect gift, we've got you covered!
                    </p>
                    <p>
                        <a href="{{ url('shop') }}" class="btn fs-5 fw-bold btn-primary my-2 me-2 text-white">
                            Webshop</a>
                        <a href="{{ url('contact') }}" class="btn fs-5 btn-outline-primary my-2 text-white">Contact</a>
                    </p>
                </div>
                <div>

                </div>
            </div>
        </div>
    </section>

    <div class="mb-5 bg-none py-5">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h2 class="text-light">Games Catalogus</h2>
                <a href="{{ '/shop' }}">
                    <button type="button" class="btn text-light">See all games
                        <i class="fa fa-arrow-right"></i>
                    </button>
                </a>
            </div>
            <hr class="text-light" />
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                <div class="col">
                    <div class="card h-100 bg-secondary d-flex flex-column align-items-stretch text-light shadow-sm">
                        <a href="{{ url('/shop/1') }}" class="stretched-link">
                            <img class="bd-placeholder-img card-img-top game-image" width="100%" height="225"
                                alt="The legend of zelda image"
                                src="{{ asset('img/thelegendofzeldabreathofthewild.webp') }}" />
                        </a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold pb-1">The Legends of Zelda: Breath of the Wild</h5>
                            <p class="card-text flex-grow-1">Embark on an epic journey and explore a vast, breathtaking
                                world, solve
                                puzzles, and face formidable foes in a quest to
                                save Hyrule. Unleash your inner hero and dive into the adventure of a lifetime.</p>
                            <div
                                class="card-footer d-flex justify-content-between align-items-center border-0 bg-transparent p-0">
                                <span class="fs-4 fw-bold">&euro; 39,99</span>
                                <button type="button" class="btn btn-outline-primary">
                                    <span class="fw-bold fs-5 text-white">+ </span>
                                    <i class="fa fa-shopping-basket fa-lg me-2 text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary h-100 d-flex flex-column align-items-stretch text-light shadow-sm">
                        <a href="{{ url('/shop/1') }}" class="stretched-link">
                            <img class="bd-placeholder-img card-img-top game-image" width="100%" height="225"
                                alt="Mario kaart" src="{{ asset('img/mario_kaart.png') }}" />
                        </a>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold pb-1">Mario Kaart</h5>
                            <p class="card-text flex-grow-1">Experience the excitement of "Mario Kart." Race as beloved
                                characters,
                                master gravity-defying tracks, and use whimsical power-ups for a fun and competitive gaming
                                experience. Join the karting action and let the race begin!</p>
                            <div class="card-footer d-flex justify-content-between border-0 bg-transparent p-0">
                                <span class="fs-4 fw-bold">&euro; 29,99</span>
                                <button type="button" class="btn btn-outline-primary">
                                    <span class="fw-bold fs-5 text-white">+ </span>
                                    <i class="fa fa-shopping-basket fa-lg me-2 text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary h-100 d-flex flex-column align-items-stretch text-light shadow-sm">
                        <a href="{{ url('/shop/1') }}" class="stretched-link">
                            <img class="bd-placeholder-img card-img-top game-image" width="100%" height="225"
                                alt="Grand theft auto" src="{{ asset('img/grand_theft_auto.png') }}" />
                        </a>


                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold pb-1">Grand Theft Auto</h5>
                            <p class="card-text flex-grow-1">Step into the dynamic world of "Grand Theft Auto." It's your
                                playground of
                                adventure, mischief, and mayhem in sprawling urban landscapes. Embrace your inner renegade,
                                create chaos, and embark on an unforgettable gaming journey! Are you ready for the ride?
                            </p>
                            <div
                                class="card-footer d-flex justify-content-between align-items-center border-0 bg-transparent p-0">
                                <span class="fs-4 fw-bold">&euro; 35,99</span>
                                <button type="button" class="btn btn-outline-primary">
                                    <span class="fw-bold fs-5 text-white">+ </span>
                                    <i class="fa fa-shopping-basket fa-lg me-2 text-white"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="coming-soon py-3">
        <div class="container">
            <div class="row py-4">
                <div class="d-flex justify-content-between">
                    <h2 class="text-light">Coming soon</h2>
                    <a href="{{ route('coming-soon') }}">
                        <button type="button" class="btn text-light">Explore more
                            <i class="fa fa-arrow-right"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="coming-soon-feature bg-secondary rounded-3 mb-4 p-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <a href="{{ route('coming-soon') }}">
                                <img src="{{ asset('img/tears_of_kingdom.jpeg') }}"
                                    class="img-fluid coming-soon-img rounded" />
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-8 py-sm-4">
                        <div class="d-flex flex-column text-light text-sm-center text-xs-center text-lg-start ms-2">
                            <span class="text-uppercase mb-3">Coming soon
                                <i class="fa fa-fire text-warning ms-1" aria-hidden="true"></i>
                            </span>
                            <h4 class="uppercase">The New Legend of Zelda</h4>
                            <p>The new legend of zelda, <span class="fw-bolder text-white">Tears of the
                                    kingdom</span> is coming
                                soon!</p>
                            <div class="v-stack gap-3 text-start">
                                <p> <i class="fa fa-circle text-warning me-2" aria-hidden="true"></i>
                                    <span class="fw-bold">Expanded Open World:</span>
                                    In "Tears of the Kingdom," the addition of the Great Sky and the Depths introduces new,
                                    diverse areas for players to explore, expanding the vertical dimension of the gameplay
                                    in Hyrule.
                                </p>
                                <p> <i class="fa fa-circle text-warning me-2" aria-hidden="true"></i>
                                    <span class="fw-bold">Innovative Gameplay Mechanics:</span>
                                    The introduction of Zonai devices and five new abilities, like Ultrahand, Fuse, Ascend,
                                    Recall, and Autobuild, enriches the gameplay with creativity and experimentation.
                                </p>
                                <p> <i class="fa fa-circle text-warning me-2" aria-hidden="true"></i>
                                    <span class="fw-bold">Rich and Engaging Storyline:</span>
                                    In "Tears of the Kingdom," Link and Zelda delve into Hyrule's history, uncovering the
                                    secrets of the Imprisoning War and the "Demon King," weaving a captivating narrative
                                    with new characters and intriguing twists.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
