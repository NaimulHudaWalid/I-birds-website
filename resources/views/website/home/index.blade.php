@extends('website.master')

@section('title')
    Home Page
@endsection

@section('body')
    <!-- Banner Start -->
    {{-- <section class="banner my-5">
        <div class="container-fluid">
            <div id="carouselExampleCaptions" class="carousel carousel-dark vertical" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/') }}assets/img/banner1.jpg" class="d-block w-100" alt="..."
                            height="650px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/') }}assets/img/hummingbird.jpg" class="d-block w-100" alt="..."
                            height="650px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/') }}assets/img/swan.jpg" class="d-block w-100" alt="..."
                            height="650px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </section> --}}


    <section class="my-5">
        <div class="container">
            <div class="slider mx-auto">
                <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <img src="{{ asset('/') }}assets/img/banner1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/') }}assets/img/swan.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/') }}assets/img/hummingbird.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/') }}assets/img/spraw.jpg" alt="">
                    </div>
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <!--automatic navigation end-->
                </div>
                <!--manual navigation start-->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                <!--manual navigation end-->
            </div>
            <!--image slider end-->
        </div>




        <style>
            body {
                margin: 0;
                padding: 0;
                height: 100vh;
                justify-content: center;
                align-items: center;
                background: #eef1f1;
            }

            .slider {
                width: 1110px;
                height: 500px;
                border-radius: 10px;
                overflow: hidden;
            }

            .slides {
                width: 500%;
                height: 500px;
                display: flex;
            }

            .slides input {
                display: none;
            }

            .slide {
                width: 20%;
                transition: 2s;
            }

            .slide img {
                width: 1110px;
                height: 500px;
            }

            /*css for manual slide navigation*/

            .navigation-manual {
                position: absolute;
                width: 1110px;
                margin-top: -40px;
                display: flex;
                justify-content: center;
            }

            .manual-btn {
                border: 2px solid #40D3DC;
                padding: 5px;
                border-radius: 10px;
                cursor: pointer;
                transition: 1s;
            }

            .manual-btn:not(:last-child) {
                margin-right: 40px;
            }

            .manual-btn:hover {
                background: #40D3DC;
            }

            #radio1:checked~.first {
                margin-left: 0;
            }

            #radio2:checked~.first {
                margin-left: -20%;
            }

            #radio3:checked~.first {
                margin-left: -40%;
            }

            #radio4:checked~.first {
                margin-left: -60%;
            }

            /*css for automatic navigation*/

            .navigation-auto {
                position: absolute;
                display: flex;
                width: 1110px;
                justify-content: center;
                margin-top: 460px;
            }

            .navigation-auto div {
                border: 2px solid #40D3DC;
                padding: 5px;
                border-radius: 10px;
                transition: 1s;
            }

            .navigation-auto div:not(:last-child) {
                margin-right: 40px;
            }

            #radio1:checked~.navigation-auto .auto-btn1 {
                background: #40D3DC;
            }

            #radio2:checked~.navigation-auto .auto-btn2 {
                background: #40D3DC;
            }

            #radio3:checked~.navigation-auto .auto-btn3 {
                background: #40D3DC;
            }

            #radio4:checked~.navigation-auto .auto-btn4 {
                background: #40D3DC;
            }


            @media (max-width: 820px) {
                .slider {
                    width: 700px;
                    height: 500px;
                    border-radius: 10px;
                    overflow: hidden;
                }

                .slides {
                    width: 500%;
                    height: 500px;
                    display: flex;
                }

                .slides input {
                    display: none;
                }

                .slide {
                    width: 20%;
                    transition: 2s;
                }

                .slide img {
                    width: 700px;
                    height: 500px;
                }

                .navigation-manual {
                    position: absolute;
                    width: 700px;
                    margin-top: -40px;
                    display: flex;
                    justify-content: center;
                }

                .navigation-auto {
                    position: absolute;
                    display: flex;
                    width: 700px;
                    justify-content: center;
                    margin-top: 460px;
                }
            }



            @media (max-width: 575px) {
                .slider {
                    width: 500px;
                    height: 500px;
                    border-radius: 10px;
                    overflow: hidden;
                }

                .slides {
                    width: 500%;
                    height: 500px;
                    display: flex;
                }

                .slides input {
                    display: none;
                }

                .slide {
                    width: 20%;
                    transition: 2s;
                }

                .slide img {
                    width: 500px;
                    height: 500px;
                }

                .navigation-manual {
                    position: absolute;
                    width: 500px;
                    margin-top: -40px;
                    display: flex;
                    justify-content: center;
                }

                .navigation-auto {
                    position: absolute;
                    display: flex;
                    width: 500px;
                    justify-content: center;
                    margin-top: 460px;
                }
            }

            @media (max-width: 420px) {
                .slider {
                    width: 330px;
                    height: 400px;
                    border-radius: 10px;
                    overflow: hidden;
                }

                .slides {
                    width: 500%;
                    height: 400px;
                    display: flex;
                }

                .slides input {
                    display: none;
                }

                .slide {
                    width: 20%;
                    transition: 2s;
                }

                .slide img {
                    width: 330px;
                    height: 400px;
                }

                .navigation-manual {
                    position: absolute;
                    width: 330px;
                    margin-top: -30px;
                    display: flex;
                    justify-content: center;
                }

                .navigation-auto {
                    position: absolute;
                    display: flex;
                    width: 330px;
                    justify-content: center;
                    margin-top: 370px;
                }
            }
        </style>

    </section>

    <!-- Banner End -->

    <!-- Project start -->
    <section class="portfolio ">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="btn-group btn-group-toggle " data-toggle="buttons">
                        <label class="btn active border-0">
                            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All Birds
                        </label>
                        <label class="btn border-0">
                            <input type="radio" name="shuffle-filter" value="design" />Wild Birds
                        </label>
                        <label class="btn border-0">
                            <input type="radio" name="shuffle-filter" value="branding" />Cage Birds
                        </label>
                        <label class="btn border-0">
                            <input type="radio" name="shuffle-filter" value="webDesign" />Local Birds
                        </label>
                        <label class="btn border-0">
                            <input type="radio" name="shuffle-filter" value="apps" />International Birds
                        </label>
                    </div>
                </div>
            </div>

            <div class="row shuffle-wrapper portfolio-gallery">
                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="{{ asset('/') }}assets/img/banner1.jpg" alt="portfolio-image"
                                class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">Crypto Landing Page</h5>
                                        <p>Software: Figma</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;apps&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="{{ asset('/') }}assets/img/swan.jpg" alt="portfolio-image"
                                class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">Snowmine UI app</h5>
                                        <p>Software: Figma</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;webDesign&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="{{ asset('/') }}assets/img/hummingbird.jpg" alt="portfolio-image"
                                class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">Blogger Website</h5>
                                        <p>Software: Figma</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="{{ asset('/') }}assets/img/spraw.jpg" alt="portfolio-image"
                                class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">HyperX Product Page</h5>
                                        <p>Software: Figma</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="{{ asset('/') }}assets/img/banner1.jpg" alt="portfolio-image"
                                class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">Restaurent Landing Page</h5>
                                        <p>Software: Figma</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;webDesign&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="{{ asset('/') }}assets/img/spraw.jpg" alt="portfolio-image"
                                class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">portfolio</h5>
                                        <p>Software: Figma</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;apps&quot;]">
                    <div class="position-relative inner-box">
                        <div class="image position-relative ">
                            <img src="{{ asset('/') }}assets/img/swan.jpg" alt="portfolio-image"
                                class="img-fluid w-100 d-block">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <a class="overlay-content" href="portfolio-single.html">
                                        <h5 class="mb-0">Diggie App</h5>
                                        <p>Software: Figma</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project End -->

    <!-- Service start -->
    <section class="section service-home border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mx-auto">
                    <h2 class="mb-2 ">Types of Birds</h2>
                    <p class="mb-5">Caged birds and wild birds are fundamentally different in terms of their living
                        conditions, behavior, and overall health. While caged birds may provide companionship for some
                        people, it is important to recognize the importance of wild birds and their role in the ecosystem
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 my-3">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('/') }}assets/img/cage_birds.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cage Birds</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 my-3">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('/') }}assets/img/banner1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Wild Birds</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Know More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- service end -->
@endsection
