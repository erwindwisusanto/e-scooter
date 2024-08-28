<x-master-layout>
    <section class="jarallax">
        <img src="{{ asset('images/background/gradient-1.webp') }}" class="jarallax-img" alt="" />
        <div class="container">
            <div class="row g-4 gx-5 align-items-center">
                <div class="spacer-single d-lg-none d-sm-block"></div>
                <div class="col-lg-6">
                    <div class="relative">
                        <img src="{{ asset('images/misc/4.webp') }}" class="img-fluid relative z-index-1 rounded-20px wow fadeInUp"
                            alt="" />
                    </div>
                </div>

                <div class="col-lg-6 relative">
                    <div class="relative z-index-1000">
                        <div class="spacer-20"></div>
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">
                            eScooter - Your Trusted Motorcycle Rental Service in Bali
                        </h1>
                        <div class="col-lg-10">
                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                Enjoy Your Ride with Top-Quality Motorcycles and the Best
                                Service!
                            </p>
                        </div>
                        <div class="spacer-10"></div>
                        <a class="btn-main wow fadeIn" data-wow-delay=".8s" style="cursor: pointer;" onclick="buttonAvailability()">
                            Ask Availability
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="variant">
        <div class="container">
            <div class="row align-items-center g-4 gx-5">
                <div class="col-lg-8">
                    <div class="subtitle bg-grey text-dark wow fadeInUp mb-3">
                        Choose
                    </div>
                    <h2 class="wow fadeInUp">Variant & Price</h2>
                </div>
            </div>
            <div class="row g-4 align-items-stretch" style="background-size: cover; background-repeat: no-repeat">
                <div class="col-lg-4 col-sm-6 card-promo" style="background-size: cover; background-repeat: no-repeat"
                    data-label="Promo">
                    <div class="relative bg-grey p-4 rounded-20px hover h-100"
                        style="background-size: cover; background-repeat: no-repeat">
                        <div class="bg-grey p-4 rounded-20px relative hover text-center"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                            <a href="##">
                                <img src="{{ asset('images/misc/escooter01.png') }}" class="w-100 relative z-1000 hover-scale-1-2"
                                    alt="" />
                                <img src="{{ asset('images/misc/10.webp') }}" class="absolute start-10 top-10 w-20" alt="" />
                            </a>

                            <div class="row mt-3 g-2 relative z-1000"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            70 KM
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Range
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            70 Km/h
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Top Speed
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute w-100 h-100 start-0 top-0 rounded-10px hover-bg-color"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <span class="bg-color me-2 fs-16 px-2 rounded-5px text-uppercase anim-op-blink-to-light">
                                e-Scooter
                            </span>
                            <h4 class="mb-1">Uwinfly T3S Pro</h4>
                            <p class="text-decoration-line-through mt-3 mb-0">
                                Rp170.000/Day
                            </p>
                            <p class="fs-24 mb-3 fw-600 text-dark">Rp150.000/Day</p>

                            <a class="btn-main" style="cursor: pointer;" onclick="booking('Uwinfly T3S Pro')">
                                Book Now
                            </a>
                        </div>

                        <div class="spacer-20"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 card-promo" style="background-size: cover; background-repeat: no-repeat"
                    data-label="Promo">
                    <div class="relative bg-grey p-4 rounded-20px hover h-100"
                        style="background-size: cover; background-repeat: no-repeat">
                        <div class="bg-grey p-4 rounded-20px relative hover text-center"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                            <a href="##">
                                <img src="{{ asset('images/misc/escooter02.png') }}" class="w-100 relative z-1000 hover-scale-1-2"
                                    alt="" />
                                <img src="{{ asset('images/misc/10.webp') }}" class="absolute start-10 top-10 w-20" alt="" />
                            </a>

                            <div class="row mt-3 g-2 relative z-1000"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            100 KM
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Range
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            70 Km/h
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Top Speed
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute w-100 h-100 start-0 top-0 rounded-10px hover-bg-color"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <span class="bg-color me-2 fs-16 px-2 rounded-5px text-uppercase anim-op-blink-to-light">
                                e-Scooter
                            </span>
                            <h4 class="mb-1">GT META</h4>
                            <p class="text-decoration-line-through mt-3 mb-0">
                                Rp170.000/Day
                            </p>
                            <p class="fs-24 mb-3 fw-600 text-dark">Rp150.000/Day</p>

                            <a class="btn-main" style="cursor: pointer;" onclick="booking('GT META')">
                                Book Now
                            </a>
                        </div>

                        <div class="spacer-20"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" style="background-size: cover; background-repeat: no-repeat">
                    <div class="relative bg-grey p-4 rounded-20px hover h-100"
                        style="background-size: cover; background-repeat: no-repeat">
                        <div class="bg-grey p-4 rounded-20px relative hover text-center"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                            <a href="##">
                                <img src="{{ asset('images/misc/escooter03.png') }}" class="w-100 relative z-1000 hover-scale-1-2"
                                    alt="" />
                                <img src="{{ asset('images/misc/10.webp') }}" class="absolute start-10 top-10 w-20"
                                    alt="" />
                            </a>

                            <div class="row mt-3 g-2 relative z-1000"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            100 KM
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Range
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            60 Km/h
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Top Speed
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute w-100 h-100 start-0 top-0 rounded-10px hover-bg-color"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <span class="bg-color me-2 fs-16 px-2 rounded-5px text-uppercase anim-op-blink-to-light">
                                e-Scooter
                            </span>
                            <h4 class="mb-1">Yadea E8S Pro</h4>
                            <p class="fs-24 mb-3 fw-600 text-dark mt-3">
                                Rp170.000/Day
                            </p>

                            <a class="btn-main" style="cursor: pointer;" onclick="booking('Yadea E8S Pro')">
                                Book Now
                            </a>
                        </div>

                        <div class="spacer-20"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" style="background-size: cover; background-repeat: no-repeat">
                    <div class="relative bg-grey p-4 rounded-20px hover h-100"
                        style="background-size: cover; background-repeat: no-repeat">
                        <div class="bg-grey p-4 rounded-20px relative hover text-center"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                            <a href="##">
                                <img src="{{ asset('images/misc/escooter04.png') }}" class="w-100 relative z-1000 hover-scale-1-2"
                                    alt="" />
                                <img src="{{ asset('images/misc/10.webp') }}" class="absolute start-10 top-10 w-20"
                                    alt="" />
                            </a>

                            <div class="row mt-3 g-2 relative z-1000"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            70 KM
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Range
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            80 Km/h
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Top Speed
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute w-100 h-100 start-0 top-0 rounded-10px hover-bg-color"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <span class="bg-color me-2 fs-16 px-2 rounded-5px text-uppercase anim-op-blink-to-light">
                                e-Scooter
                            </span>
                            <h4 class="mb-1">POLYTRON Fox S</h4>
                            <p class="fs-24 mb-3 fw-600 text-dark mt-3">
                                Rp270.000/Day
                            </p>

                            <a class="btn-main" style="cursor: pointer;" onclick="booking('POLYTRON Fox S')">
                                Book Now
                            </a>
                        </div>

                        <div class="spacer-20"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" style="background-size: cover; background-repeat: no-repeat">
                    <div class="relative bg-grey p-4 rounded-20px hover h-100"
                        style="background-size: cover; background-repeat: no-repeat">
                        <div class="bg-grey p-4 rounded-20px relative hover text-center"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                            <a href="##">
                                <img src="{{ asset('images/misc/escooter05.png') }}" class="w-100 relative z-1000 hover-scale-1-2"
                                    alt="" />
                                <img src="{{ asset('images/misc/10.webp') }}" class="absolute start-10 top-10 w-20"
                                    alt="" />
                            </a>

                            <div class="row mt-3 g-2 relative z-1000"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            125 KM
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Range
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            103 Km/h
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Top Speed
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute w-100 h-100 start-0 top-0 rounded-10px hover-bg-color"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <span class="bg-color me-2 fs-16 px-2 rounded-5px text-uppercase anim-op-blink-to-light">
                                e-Scooter
                            </span>
                            <h4 class="mb-1">ALVA Cervo 2</h4>
                            <p class="fs-24 mb-3 fw-600 text-dark mt-3">
                                Rp270.000/Day
                            </p>

                            <a class="btn-main" style="cursor: pointer;" onclick="booking('ALVA Cervo 2')">
                                Book Now
                            </a>
                        </div>

                        <div class="spacer-20"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 card-promo" style="background-size: cover; background-repeat: no-repeat"
                    data-label="Promo">
                    <div class="relative bg-grey p-4 rounded-20px hover h-100"
                        style="background-size: cover; background-repeat: no-repeat">
                        <div class="bg-grey p-4 rounded-20px relative hover text-center"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                            <a href="##">
                                <img src="{{ asset('images/misc/escooter06.png') }}" class="w-100 relative z-1000 hover-scale-1-2"
                                    alt="" />
                                <img src="{{ asset('images/misc/10.webp') }}" class="absolute start-10 top-10 w-20"
                                    alt="" />
                            </a>

                            <div class="row mt-3 g-2 relative z-1000"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            70 KM
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Range
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6"
                                    style="
                        background-size: cover;
                        background-repeat: no-repeat;
                      ">
                                    <div class="bg-white rounded-5px lh-1-2em py-2"
                                        style="
                          background-size: cover;
                          background-repeat: no-repeat;
                        ">
                                        <div class="fw-bold text-dark"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            90 Km/h
                                        </div>
                                        <div class="fs-14"
                                            style="
                            background-size: cover;
                            background-repeat: no-repeat;
                          ">
                                            Top Speed
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute w-100 h-100 start-0 top-0 rounded-10px hover-bg-color"
                                style="
                      background-size: cover;
                      background-repeat: no-repeat;
                    ">
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <span class="bg-color me-2 fs-16 px-2 rounded-5px text-uppercase anim-op-blink-to-light">
                                e-Scooter
                            </span>
                            <h4 class="mb-1">ALVA One</h4>
                            <p class="text-decoration-line-through mt-3 mb-0">
                                Rp270.000/Day
                            </p>
                            <p class="fs-24 mb-3 fw-600 text-dark">Rp250.000/Day</p>

                            <a class="btn-main" style="cursor: pointer;" onclick="booking('ALVA One')">
                                Book Now
                            </a>
                        </div>

                        <div class="spacer-20"
                            style="
                    background-size: cover;
                    background-repeat: no-repeat;
                  ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="jarallax text-light pt30 pb30">
        <img src="{{ asset('images/background/gradient-3.webp') }}" class="jarallax-img" alt="" />
        <div class="wow fadeInRight d-flex">
            <div class="de-marquee-list wow">
                <div class="d-item">
                    <span class="d-item-txt">Maintained Motorcycles</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                    <span class="d-item-txt">Wide Selection</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                    <span class="d-item-txt">Affordable Rates</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                    <span class="d-item-txt">Professional Customer Service</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                    <span class="d-item-txt">Simple and Fast</span>
                    <span class="d-item-display">
                        <i class="d-item-block"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section id="how" style="background-size: cover; background-repeat: no-repeat">
        <div class="container" style="background-size: cover; background-repeat: no-repeat">
            <div class="row align-items-center g-4 gx-5" style="background-size: cover; background-repeat: no-repeat">
                <div class="col-lg-12" style="background-size: cover; background-repeat: no-repeat">
                    <div class="subtitle bg-grey text-dark wow fadeInUp mb-3 animated"
                        style="
                  background-size: cover;
                  background-repeat: no-repeat;
                  visibility: visible;
                  animation-name: fadeInUp;
                ">
                        How
                    </div>
                    <h2 class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp">
                        How to Rent a Motorcycle
                    </h2>
                </div>
                <div class="col-lg-3 wow fadeInRight animated" data-wow-delay=".2s"
                    style="
                background-size: cover;
                background-repeat: no-repeat;
                visibility: visible;
                animation-delay: 0.2s;
                animation-name: fadeInRight;
              ">
                    <div class="relative" style="background-size: cover; background-repeat: no-repeat">
                        <a href="##">
                            <i class="bg-color text-light p-3 rounded-20px fs-56 mb-4 icofont-read-book"></i>
                            <h4>Choose Your Motorcycle</h4>
                        </a>
                        <p>
                            Browse our catalog and select the motorcycle that fits your
                            needs.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInRight animated" data-wow-delay=".4s"
                    style="
                background-size: cover;
                background-repeat: no-repeat;
                visibility: visible;
                animation-delay: 0.4s;
                animation-name: fadeInRight;
              ">
                    <div class="relative" style="background-size: cover; background-repeat: no-repeat">
                        <a href="##">
                            <i class="bg-color text-light p-3 rounded-20px fs-56 mb-4 icofont-phone"></i>
                            <h4>Check availability</h4>
                        </a>
                        <p>Make sure you book according to what you want</p>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInRight animated" data-wow-delay=".6s"
                    style="
                background-size: cover;
                background-repeat: no-repeat;
                visibility: visible;
                animation-delay: 0.6s;
                animation-name: fadeInRight;
              ">
                    <div class="relative" style="background-size: cover; background-repeat: no-repeat">
                        <a href="##">
                            <i class="bg-color text-light p-3 rounded-20px fs-56 mb-4 icofont-ui-timer"></i>
                            <h4>Select Rental Duration</h4>
                        </a>
                        <p>Choose the rental period from daily to monthly.</p>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInRight animated" data-wow-delay=".6s"
                    style="
                background-size: cover;
                background-repeat: no-repeat;
                visibility: visible;
                animation-delay: 0.6s;
                animation-name: fadeInRight;
              ">
                    <div class="relative" style="background-size: cover; background-repeat: no-repeat">
                        <a href="##">
                            <i class="bg-color text-light p-3 rounded-20px fs-56 mb-4 icofont-check-circled"></i>
                            <h4>Book Now</h4>
                        </a>
                        <p>
                            Fill out the booking form or contact us via phone/WhatsApp
                            for a faster process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden mh-500px jarallax">
        <img src="{{ asset('images/background/gradient-1.webp') }}" class="jarallax-img" alt="" />
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="ps-lg-5 ps-0">
                        <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                        <h3 class="mb-4 wow fadeInUp">
                            Welcome to eScooter, your premier destination for
                            high-quality motorcycle rentals in Bali! We are dedicated to
                            providing you with a safe, comfortable, and enjoyable riding
                            experience.
                        </h3>
                        <span class="wow fadeInUp">eScooter, Bali Indonesia</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 absolute h-100 mh-500px top-0 bg-dark" data-bgimage="url('images/misc/bali-img.webp')">
        </div>
    </section>

    <section id="testimonial">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="subtitle wow fadeInUp mb-3">Testimonials</div>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                        Our Happy Customers
                    </h2>
                    <div class="spacer-single"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                    <div class="item">
                        <div class="de_testi s2">
                            <blockquote>
                                <div class="de-rating-ext absolute top-20px end-30px">
                                    <span class="d-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <div class="de_testi_by">
                                    <img class="circle" alt="" src="{{ asset('images/testimonial/1.webp') }}" />
                                    <div>Michael S.</div>
                                </div>
                                <p>
                                    "Switching to an electric vehicle has been a
                                    game-changer for me. Not only am I saving money on fuel,
                                    but the smooth and silent ride has made commuting a
                                    pleasure."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="de_testi s2">
                            <blockquote>
                                <div class="de-rating-ext absolute top-20px end-30px">
                                    <span class="d-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <div class="de_testi_by">
                                    <img class="circle" alt="" src="{{ asset('images/testimonial/2.webp') }}" />
                                    <div>Robert L.</div>
                                </div>
                                <p>
                                    "I was skeptical at first, but after driving my electric
                                    car for a few months, I'm amazed by its performance and
                                    efficiency. Plus, knowing I'm reducing my carbon
                                    footprint feels great!"
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="de_testi s2">
                            <blockquote>
                                <div class="de-rating-ext absolute top-20px end-30px">
                                    <span class="d-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <div class="de_testi_by">
                                    <img class="circle" alt="" src="{{ asset('images/testimonial/3.webp') }}" />
                                    <div>Jake M.</div>
                                </div>
                                <p>
                                    "As a busy professional, convenience is key for me. With
                                    an electric vehicle, I can charge at home overnight and
                                    wake up to a full battery every morning. It's saves me
                                    time."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="de_testi s2">
                            <blockquote>
                                <div class="de-rating-ext absolute top-20px end-30px">
                                    <span class="d-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <div class="de_testi_by">
                                    <img class="circle" alt="" src="{{ asset('images/testimonial/4.webp') }}" />
                                    <div>Alex P.</div>
                                </div>
                                <p>
                                    "One of the best decisions I've made for my family's
                                    future is investing in an electric SUV. It's spacious,
                                    safe, and environmentally friendly. We love taking road
                                    trips."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="de_testi s2">
                            <blockquote>
                                <div class="de-rating-ext absolute top-20px end-30px">
                                    <span class="d-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <div class="de_testi_by">
                                    <img class="circle" alt="" src="{{ asset('images/testimonial/5.webp') }}" />
                                    <div>Carlos R.</div>
                                </div>
                                <p>
                                    "Being an early adopter of electric vehicles, I've seen
                                    the technology evolve rapidly. Today's electric cars are
                                    more advanced, affordable, and accessible than ever
                                    before."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="de_testi s2">
                            <blockquote>
                                <div class="de-rating-ext absolute top-20px end-30px">
                                    <span class="d-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <div class="de_testi_by">
                                    <img class="circle" alt="" src="{{ asset('images/testimonial/6.webp') }}" />
                                    <div>Edward B.</div>
                                </div>
                                <p>
                                    "Living in a city with strict emissions regulations,
                                    owning an electric vehicle has been a lifesaver. No more
                                    worrying about fines or restrictions, just clean and
                                    worry-free driving."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="de_testi s2">
                            <blockquote>
                                <div class="de-rating-ext absolute top-20px end-30px">
                                    <span class="d-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <div class="de_testi_by">
                                    <img class="circle" alt="" src="{{ asset('images/testimonial/7.webp') }}" />
                                    <div>Daniel H.</div>
                                </div>
                                <p>
                                    "I used to dread long drives because of frequent stops
                                    for gas, but with my electric vehicle, I can travel
                                    farther with fewer breaks. It's redefined road trips for
                                    me."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="item">
                        <div class="de_testi s2">
                            <blockquote>
                                <div class="de-rating-ext absolute top-20px end-30px">
                                    <span class="d-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <div class="de_testi_by">
                                    <img class="circle" alt="" src="{{ asset('images/testimonial/8.webp') }}" />
                                    <div>Bryan G.</div>
                                </div>
                                <p>
                                    "Being able to charge my electric vehicle at home has
                                    been a game-changer. It's incredibly convenient and fits
                                    seamlessly into my daily routine."
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-master-layout>
<script>
    "use strict";

    const WA_NUMBER = '628121333064';

    const buttonAvailability = () => {
        const textMessageAvailability = `Hi, E-Scooter! 🛵 Word on the street is that your motorcycle rentals are top-notch in Bali. Can you fill me in on what’s available? Thanks! 🌞✨`;
        window.open(`https://api.whatsapp.com/send/?phone=${encodeURIComponent(WA_NUMBER)}&text=${encodeURIComponent(textMessageAvailability)}`, '_blank');
    }

    const booking = (eScooterName) => {
        const textMessage = `Hello e-scooter!🛵 I would like to order ${eScooterName}`;
        window.open(`https://api.whatsapp.com/send/?phone=${encodeURIComponent(WA_NUMBER)}&text=${encodeURIComponent(textMessage)}`, '_blank');
    }
</script>
