<div class="offcanvas offcanvas-end p-3" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <div class="date d-flex flex-column">
            <h4 id="offcanvasRightLabel" class="fw-bold fs-5 mb-2 mt-4">Expected shipping delivery</h4>
            <span class="text-gray">Friday, November 10, 2023</span>
        </div>
        <button type="button" class="btn-close text-reset text-bg-light me-2" data-bs-dismiss="offcanvas"
            aria-label="Close">
        </button>
    </div>
    <div class="offcanvas-body">
        <section class="h-100">
            <div class="container">
                <div class="row my-2">
                    <div class="card card-background mb-4 border-0 shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="item d-flex justify-content-between m-0 p-2">
                                    <div class="item-detail">
                                        <div class="col-10 mb-lg-0 d-flex mb-4">
                                            <div class="bg-image rounded">
                                                <img src="{{ asset('img/mario_thumbnail.jpg') }}"
                                                    class="img-fluid item-image" alt="Mario Kaart">
                                            </div>
                                            <div class="detail ms-4">
                                                <h5 class="text-light text-nowrap">Mario Kaart 8 </h5>
                                                <p class="text-light"><span class="fw-bold">Platform:</span> Nintendo
                                                    Switch</p>
                                                <div class="d-flex quantity justify-content-evenly">
                                                    <button class="btn btn-sm"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <i class="fa fa-minus text-light"></i>
                                                    </button>
                                                    <button class="btn btn-small text-white">1</button>
                                                    <button class="btn"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <i class="fa fa-plus text-light"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price col-2">
                                        <p class="text-light fw-bolder text-end">
                                            &euro; 39,99
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="text-dark" />
                            <div class="row">
                                <div class="item d-flex justify-content-between m-0 p-2">
                                    <div class="item-detail">
                                        <div class="col-10 mb-lg-0 d-flex mb-4">
                                            <div class="bg-image rounded">
                                                <img src="{{ asset('img/zelda_thumbnail.jpeg') }}"
                                                    class="img-fluid item-image" alt="The legend of Zelda">
                                            </div>
                                            <div class="detail ms-4">
                                                <h5 class="text-light text-nowrap">Mario Kaart 8 </h5>
                                                <p class="text-light"><span class="fw-bold">Platform: </span>Nintendo
                                                    Wii
                                                    U</p>
                                                <div class="d-flex quantity justify-content-evenly">
                                                    <button class="btn btn-sm"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <i class="fa fa-minus text-light"></i>
                                                    </button>
                                                    <button class="btn btn-small text-white">1</button>
                                                    <button class="btn"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <i class="fa fa-plus text-light"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price col-2">
                                        <p class="text-light fw-bolder text-end">
                                            &euro; 39,99
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-background mb-4 shadow">
                        <div class="card-header py-2">
                            <h5 class="fw-bold fs-5 text-light mt-2">Summary</h5>
                        </div>
                        <div class="card-body text-light">
                            <ul class="list-group list-group-flush border-0">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 bg-transparent p-0 px-0 pb-0 text-white">
                                    Products
                                    <span> 2 x &euro; 39,99 </span>
                                    <span class="text-light">&euro; 79,98</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 bg-transparent p-0 px-0 text-white">
                                    BTW 21 %
                                    <span>&euro; 16,80</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 bg-transparent px-0 pt-0 text-white">
                                    Shipping
                                    <span>Free</span>
                                </li>
                                <hr class="text-dark m-0" />
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center mb-3 border-0 bg-transparent px-0 text-white">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including BTW)</p>
                                        </strong>
                                    </div>
                                    <span><strong>&euro; 96,77</strong></span>
                                </li>
                            </ul>
                            <div class="d-grid">
                                <button type="button" class="btn btn-primary btn-lg text-white">
                                    Go to checkout
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card text-light card-background mb-4 mb-4 shadow">
                        <div class="card-body">
                            <h6 class="fw-bold fs-5 pb-2">We accept</h6>
                            <div class="hstack gap-3">
                                <a href="#" class="text-decoration-none" title="Paypal icon">
                                    <i class="fa fa-cc-paypal fs-3 me-1 text-white" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="text-decoration-none" title="Mastercard icon">
                                    <i class="fa fa-cc-mastercard fs-3 mx-1 text-white" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="text-decoration-none" title="Visa icon">
                                    <i class="fa fa-cc-visa fs-3 mx-1 text-white" aria-hidden="true"></i>
                                </a>
                                <a href="#" class="text-decoration-none" title="Google wallet icon">
                                    <i class="fa fa-google-wallet fs-3 ms-1 text-white" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
