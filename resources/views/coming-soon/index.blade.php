@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-4 mt-5">
            <div class="d-flex">
                <h1 class="text-light">Coming soon</h1>
                <i class="bi bi-fire text-warning ms-1" aria-hidden="true"></i>
                <i class="bi-alarm text-warning"></i>
            </div>
        </div>
        <div class="coming-soon-feature bg-secondary rounded-3 mb-5 p-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('img/tears_of_kingdom.jpeg') }}" class="img-fluid coming-soon-img rounded" />
                    </div>
                </div>
                <div class="col-lg-8 py-sm-4">
                    <div class="d-flex flex-column text-light text-sm-center text-xs-center text-lg-start ms-2">
                        <span class="text-uppercase mb-3">Coming soon
                            <i class="fa fa-fire text-warning ms-1" aria-hidden="true"></i>
                        </span>
                        <h4 class="uppercase">The new Legend of Zelda</h4>
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
        <div class="coming-soon-list">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card align-items-stretch bg-secondary card-coming-soon rounded-3 text-light mb-4">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ asset('img/star_ocean_the_second_story_r.webp') }}"
                                    class="img-fluid img-coming-soon rounded-start" alt="Star Ocean: The Second Story R">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span
                                        class="text-uppercase text-sm-center text-xs-center text-lg-start my-2 mb-3 ms-2">Coming
                                        soon
                                        <i class="fa fa-fire text-warning ms-1" aria-hidden="true"></i>
                                    </span>
                                    <h5 class="card-title lh-base py-3">Star Ocean: The Second Story R</h5>
                                    <p class="card-text">Fantasy and Science Fiction collide in a unique visual style!
                                        Experience a story with dual protagonists.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card align-items-stretch bg-secondary card-coming-soon rounded-3 text-light mb-4">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ asset('img/avatar_frontiers_of_pandora.jpeg') }}"
                                    class="img-fluid img-coming-soon rounded-start" alt="Star Ocean: The Second Story R">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span
                                        class="text-uppercase text-sm-center text-xs-center text-lg-start my-2 mb-3 ms-2">Coming
                                        soon
                                        <i class="fa fa-fire text-warning ms-1" aria-hidden="true"></i>
                                    </span>
                                    <h5 class="card-title lh-base py-3">Avatar: Frontiers of Pandora</h5>
                                    <p class="card-text">Pre-order Avatar: Frontiers of Pandora to receive the Child of Two
                                        Worlds Pack
                                        including a character cosmetic set and a weapon skin!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card align-items-stretch bg-secondary card-coming-soon rounded-3 text-light mb-4">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ asset('img/prince_of_persia_the_lost_crown.jpeg') }}"
                                    class="img-fluid img-coming-soon rounded-start" alt="Prince of Persia: The Lost Crown">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span
                                        class="text-uppercase text-sm-center text-xs-center text-lg-start my-2 mb-3 ms-2">Coming
                                        soon
                                        <i class="fa fa-fire text-warning ms-1" aria-hidden="true"></i>
                                    </span>
                                    <h5 class="card-title lh-base py-3">Prince of Persia: The Lost Crown</h5>
                                    <p class="card-text">Use your Time Powers, combat, and platforming skills to perform
                                        deadly combos and
                                        defeat time-corrupted enemies and mythological creatures.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card align-items-stretch bg-secondary card-coming-soon rounded-3 text-light mb-4">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ asset('img/final_fantasy.jpg') }}"
                                    class="img-fluid img-coming-soon rounded-start"
                                    alt="Final Fantasy VII Rebirth - Deluxe">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span
                                        class="text-uppercase text-sm-center text-xs-center text-lg-start my-2 mb-3 ms-2">Coming
                                        soon
                                        <i class="fa fa-fire text-warning ms-1" aria-hidden="true"></i>
                                    </span>
                                    <h5 class="card-title lh-base py-3">Final Fantasy VII Rebirth - Deluxe</h5>
                                    <p class="card-text">The Unknown Journey
                                        Continues. After
                                        escaping from
                                        the dystopian city of Midgar, Cloud and his friends set out on a journey across
                                        the planet. New
                                        adventure await in a vibrant and vast world – sprint across grassy plains on a
                                        Chocobo
                                        and explore expansive environments
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card align-items-stretch bg-secondary card-coming-soon rounded-3 text-light mb-4">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ asset('img/spider_man_2_a.jpg') }}"
                                    class="img-fluid rounded-start img-coming-soon" alt="Marvel’s Spider-Man 2">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span
                                        class="text-uppercase text-sm-center text-xs-center text-lg-start my-2 mb-3 ms-2">Coming
                                        soon
                                        <i class="fa fa-fire text-warning ms-1" aria-hidden="true"></i>
                                    </span>
                                    <h5 class="card-title lh-base py-3">Marvel’s Spider-Man 2</h5>
                                    <p class="card-text">Experience an original Marvel’s Spider-Man single player
                                        story. Feel the true power of Spider-Man in your hands with deeply immersive
                                        adaptive triggers and haptic feedback features
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card align-items-stretch bg-secondary card-coming-soon rounded-3 text-light mb-4">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ asset('img/robocop.jpeg') }}" class="img-fluid rounded-start img-coming-soon"
                                    alt="RoboCop Rogue City">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span
                                        class="text-uppercase text-sm-center text-xs-center text-lg-start my-2 mb-3 ms-2">Coming
                                        soon
                                        <i class="fa fa-fire text-warning ms-1" aria-hidden="true"></i>
                                    </span>
                                    <h5 class="card-title lh-base py-3">RoboCop Rogue City</h5>

                                    <p class="card-text">Armed with your trusty Auto-9,
                                        factory-built strength, years
                                        of experience on the force and a variety of tools at your disposal, you will
                                        fight forces seeking to destroy the city you call home in an all new
                                        first-person, explosive hunt for the truth</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card align-items-stretch bg-secondary card-coming-soon rounded-3 text-light mb-5">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ asset('img/yohanne.webp') }}" class="img-fluid rounded-start img-coming-soon"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span
                                        class="text-uppercase text-sm-center text-xs-center text-lg-start my-2 mb-3 ms-2">Coming
                                        soon
                                        <i class="fa fa-fire text-warning ms-1" aria-hidden="true"></i>
                                    </span>
                                    <h5 class="card-title lh-base py-3">Yohane the Parhelion: Blaze in the Deepblue</h5>
                                    <p class="card-text">Yohane the Parhelion is an official spin-off of "Love Live!
                                        Sunshine". Yohane's fantasy world sets the stage for a 2D metroidvania in
                                        "Yohane
                                        the Parhelion: Blaze in the Deepblue"!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card align-items-stretch bg-secondary card-coming-soon rounded-3 text-light mb-5">
                        <div class="row g-0 h-100">
                            <div class="col-md-4">
                                <img src="{{ asset('img/city_skylines.jpeg') }}"
                                    class="img-fluid img-coming-soon rounded-start"
                                    alt="Cities: Skylines II - Day 1 Edition">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <span
                                        class="text-uppercase text-sm-center text-xs-center text-lg-start my-2 mb-3 ms-2">Coming
                                        soon
                                        <i class="fa fa-fire text-warning ms-1" aria-hidden="true"></i>
                                    </span>
                                    <h5 class="card-title lh-base py-3">Cities: Skylines II - Day 1 Edition</h5>
                                    <p class="card-text">Pre-order today and set your City apart with 9
                                        Unique
                                        Buildings
                                        based on famous
                                        landmarks from around the world. Included is also a map based on the geography
                                        of
                                        Tampere, Finland, home of Colossal Order.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
