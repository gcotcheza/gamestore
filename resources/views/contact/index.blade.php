@extends('layouts.app')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-md-6 mb-4 text-center">
                    <h2 class="text-light mt-4">Contact us</h2>
                </div>
            </div>
            <div class="card-group">
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 justify-content-center mb-5">
                                <div class="row align-items-lg-stretch gy-3">
                                    <div class="col-md-4">
                                        <div class="card h-100 bg-secondary p-3">
                                            <div class="dbox w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-map-marker fa-2x text-primary"></span>
                                                </div>
                                                <div class="text">
                                                    <p>
                                                        <span
                                                            class="d-block fw-semibold text-gray mb-2 mt-4">Address:</span>
                                                        <span class="d-block text-light mb-2">
                                                            Kooiweg 3, 7312 CA Apeldoorn
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card h-100 bg-secondary p-3">
                                            <div class="dbox w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-phone fa-2x text-primary"></span>
                                                </div>
                                                <div class="text">
                                                    <p class="text-light">
                                                        <span class="d-block fw-semibold text-gray mb-2 mt-4">Phone:</span>
                                                        <a class="text-decoration-none text-light" href="tel:0648591640">
                                                            +31 6 39 50 93 08
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card h-100 bg-secondary p-3">
                                            <div class="dbox w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-paper-plane fa-2x text-primary"></span>
                                                </div>
                                                <div class="text">
                                                    <p>
                                                        <span class="d-block fw-semibold text-gray mb-2 mt-4">Email:</span>
                                                        <a class="text-decoration-none text-light"
                                                            href="mailto:info@gamestore.nl">
                                                            info@gamestore.nl
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 my-5">
                                <div class="contact-wrap">
                                    <h3 class="text-light mb-4 text-center">Get in touch with us</h3>
                                    <div id="form-message-warning" class="w-100 mb-4 text-center"></div>
                                    <div id="form-message-success" class="d-none w-100 mb-4 text-center">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control bg-light" name="name"
                                                        id="name" required placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-control bg-light" name="email"
                                                        id="email" required placeholder="Email address">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-input bg-light"
                                                        name="subject" required id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control bg-light" id="message" cols="30" rows="8"
                                                        placeholder="Write your message..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message"
                                                        class="btn btn-primary w-100 mb-3 mt-3 text-white">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
