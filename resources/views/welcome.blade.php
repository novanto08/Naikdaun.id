<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    {{-- title --}}
    <title>Naikdaun</title>

    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icons/apple-icon-180x180-dunplab-manifest-54122.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/icons/apple-icon-32x32-dunplab-manifest-54122.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/icons/apple-icon-16x16-dunplab-manifest-54122.png">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="manifest" href="/manifest.json">

    {{-- google font --}}
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    {{-- css --}}
    <link href="/assets/css/theme.css" rel="stylesheet" />
</head>

<body>

    {{-- Main Content --}}
    <main class="main" id="top">

        {{-- nav bar --}}
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <a class="navbar-brand d-inline-flex" href="index.html">
                    <img class="d-inline-block" src="assets/img/gallery/logo.png" alt="logo" />
                    <span class="text-1000 fs-0 fw-bold ms-2">Majestic</span>
                </a>
                <button
                    class="navbar-toggler collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-2">
                            <a class="nav-link fw-medium {{ Request::is('/') ? 'active' : '' }} " aria-current="page" href="/">Women</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-medium" href="#header">Men</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-medium" href="#collection">Collection</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link fw-medium" href="#outlet">Outlet</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- end nav bar --}}




        {{-- landing --}}
        <section class="py-11 bg-light-gradient border-bottom border-white border-5">
            <div class="bg-holder overlay overlay-light" style="background-image:url(assets/img/gallery/header-bg.png);background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row flex-center">
                <div class="col-12 mb-10">
                    <div class="d-flex align-items-center flex-column">
                    <h1 class="fw-normal"> With an outstanding style, only for you</h1>
                    <h1 class="fs-4 fs-lg-8 fs-md-6 fw-bold">Exclusively designed for you</h1>
                    </div>
                </div>
                </div>
            </div>
        </section>
        {{-- end landing --}}



        {{-- <section> begin --}}
        <section>
            <div class="container">
                <div class="row h-100 g-0">
                    <div class="col-md-6">
                        <div class="bg-300 p-4 h-100 d-flex flex-column justify-content-center">
                            <h4 class="text-800">Exclusive collection 2021</h4>
                            <h1 class="fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Be exclusive</h1>
                            <p class="mb-5 fs-1">
                                The best everyday option in a Super Saver range within a reasonable price. It is our responsibility to keep you 100 percent stylish. Be smart &amp; , trendy with us.
                            </p>
                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-lg btn-dark" href="#" role="button">Explore</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-span h-100 text-white">
                            <img class="card-img h-100" src="assets/img/gallery/outfit.png" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient">
                                <div class="d-flex align-items-end justify-content-center h-100">
                                    <a class="btn btn-lg text-light fs-1" href="#!" role="button">
                                        Outfit
                                        <svg
                                            class="bi bi-arrow-right-short"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="23"
                                            height="23"
                                            fill="currentColor"
                                            viewBox="0 0 16 16"
                                        >
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row h-100 g-2 py-1">
                    <div class="col-md-4">
                        <div class="card card-span h-100 text-white">
                            <img class="card-img h-100" src="assets/img/gallery/vanity-bag.png" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient">
                                <div class="d-flex align-items-end justify-content-center h-100">
                                    <a class="btn btn-lg text-light fs-1" href="#!" role="button">
                                        Vanity Bags
                                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-span h-100 text-white">
                            <img class="card-img h-100" src="assets/img/gallery/hat.png" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient">
                                <div class="d-flex align-items-end justify-content-center h-100">
                                    <a class="btn btn-lg text-light fs-1" href="#!" role="button">
                                        Hats
                                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-span h-100 text-white">
                            <img class="card-img h-100" src="assets/img/gallery/high-heels.png" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient">
                                <div class="d-flex align-items-end justify-content-center h-100">
                                    <a class="btn btn-lg text-light fs-1" href="#!" role="button">
                                        High Heels
                                        <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"> </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end of .container --}}

        </section>
        {{-- <section> close --}}



        {{-- our teams --}}
        <section class="py-0">
            <div class="container">
                <div class="row h-100">
                    <div class="col-lg-7 mx-auto text-center mb-6">
                        <h5 class="fs-3 fs-lg-5 lh-sm mb-3">Checkout New Arrivals</h5>
                    </div>

                    <div class="col-12">
                        <div class="carousel slide" id="carouselNewArrivals" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 align-items-center g-2">
                                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white">
                                                <img class="card-img h-100" src="assets/img/gallery/full-body.png" alt="..." />
                                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                                    <h6 class="text-primary">$175</h6>
                                                    <p class="text-400 fs-1">Jumper set for Women</p>
                                                    <h4 class="text-light">Flat Hill Slingback</h4>
                                                </div>
                                                <a class="stretched-link" href="#"></a>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white">
                                                <img class="card-img h-100" src="assets/img/gallery/formal-coat.png" alt="..." />
                                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                                    <h6 class="text-primary">$175</h6>
                                                    <p class="text-400 fs-1">Jumper set for Women</p>
                                                    <h4 class="text-light">Ocean Blue Ring</h4>
                                                </div>
                                                <a class="stretched-link" href="#"></a>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white">
                                                <img class="card-img h-100" src="assets/img/gallery/ocean-blue.png" alt="..." />
                                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                                    <h6 class="text-primary">$175</h6>
                                                    <p class="text-400 fs-1">Jumper set for Women</p>
                                                    <h4 class="text-light">Brown Leathered Wallet</h4>
                                                </div>
                                                <a class="stretched-link" href="#"></a>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white">
                                                <img class="card-img h-100" src="assets/img/gallery/sweater.png" alt="..." />
                                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                                    <h6 class="text-primary">$175</h6>
                                                    <p class="text-400 fs-1">Jumper set for Women</p>
                                                    <h4 class="text-light">Silverside Wristwatch</h4>
                                                </div>
                                                <a class="stretched-link" href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item" data-bs-interval="5000">
                                    <div class="row h-100 align-items-center g-2">
                                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white">
                                                <img class="card-img h-100" src="assets/img/gallery/full-body.png" alt="..." />
                                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                                    <h6 class="text-primary">$175</h6>
                                                    <p class="text-400 fs-1">Jumper set for Women</p>
                                                    <h4 class="text-light">Flat Hill Slingback</h4>
                                                </div>
                                                <a class="stretched-link" href="#"></a>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white">
                                                <img class="card-img h-100" src="assets/img/gallery/formal-coat.png" alt="..." />
                                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                                    <h6 class="text-primary">$175</h6>
                                                    <p class="text-400 fs-1">Jumper set for Women</p>
                                                    <h4 class="text-light">Ocean Blue Ring</h4>
                                                </div>
                                                <a class="stretched-link" href="#"></a>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white">
                                                <img class="card-img h-100" src="assets/img/gallery/ocean-blue.png" alt="..." />
                                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                                    <h6 class="text-primary">$175</h6>
                                                    <p class="text-400 fs-1">Jumper set for Women</p>
                                                    <h4 class="text-light">Brown Leathered Wallet</h4>
                                                </div>
                                                <a class="stretched-link" href="#"></a>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                            <div class="card card-span h-100 text-white">
                                                <img class="card-img h-100" src="assets/img/gallery/sweater.png" alt="..." />
                                                <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse">
                                                    <h6 class="text-primary">$175</h6>
                                                    <p class="text-400 fs-1">Jumper set for Women</p>
                                                    <h4 class="text-light">Silverside Wristwatch</h4>
                                                </div>
                                                <a class="stretched-link" href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselNewArrivals" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselNewArrivals" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end our teams --}}

        {{-- <section> begin --}}
        <section class="py-10" id="collection">
            <div class="container">
                <div class="row h-100 gx-2">
                    <div class="col-md-6">
                        <div class="card card-span h-100 text-white">
                            <img class="card-img h-100" src="assets/img/gallery/urban.png" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient">
                                <div class="p-5 p-md-2 p-xl-5">
                                    <h1 class="fs-md-4 fs-lg-7 text-light">Urban Stories </h1>
                                    <h5 class="fs-2 text-light">collection</h5>
                                </div>
                            </div>
                            <a class="stretched-link" href="#!"></a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card card-span h-100 text-white">
                            <img class="card-img h-100" src="assets/img/gallery/country.png" alt="..." />
                            <div class="card-img-overlay bg-dark-gradient">
                                <div class="p-5 p-md-2 p-xl-5 d-flex flex-column flex-end-center align-items-baseline h-100">
                                    <h1 class="fs-md-4 fs-lg-7 text-light">Urban Stories </h1>
                                    <h5 class="fs-2 text-light">collection</h5>
                                </div>
                            </div>
                            <a class="stretched-link" href="#!"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section> close --}}



        {{-- <section> begin --}}
        <section class="py-0 pt-7">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-2 mb-3">
                        <h5 class="lh-lg fw-bold text-1000">Company Info</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">About Us</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Affiliate</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Fashion Blogger</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-lg-2 mb-3">
                        <h5 class="lh-lg fw-bold text-1000">Help &amp; Support</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Shipping Info</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Refunds</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">How to Order</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">How to Track</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Size Guides</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-lg-2 mb-3">
                        <h5 class="lh-lg fw-bold text-1000">Customer Care</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Contact Us</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Payment Methods</a></li>
                            <li class="lh-lg"><a class="text-800 text-decoration-none" href="#!">Bonus Point</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-auto ms-auto">
                        <p class="text-800">
                            <svg class="feather feather-phone me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <span class="text-800">+3930219390</span>
                        </p>

                        <p class="text-800">
                            <svg class="feather feather-mail me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span class="text-800">something@gmail.com</span>
                        </p>
                    </div>
                </div>

                <div class="border-bottom border-3"></div>

                <div class="row flex-center my-3">
                    <div class="col-md-6 order-1 order-md-0">
                        <p class="my-2 text-1000 text-center text-md-start"> Made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#EB6453" viewBox="0 0 16 16">
                                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                            </svg>
                            &nbsp;by&nbsp;
                            <a class="text-800" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center text-md-end">
                            <a href="#!">
                                <span class="me-4" data-feather="facebook"></span>
                            </a>
                            <a href="#!">
                                <span class="me-4" data-feather="instagram"></span>
                            </a>
                            <a href="#!">
                                <span class="me-4" data-feather="youtube"></span>
                            </a>
                            <a href="#!">
                                <span class="me-4" data-feather="twitter"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section> close --}}

    </main>
    {{-- End of Main Content --}}


    {{-- JavaScripts --}}
    <script src="/assets/vendors/@popperjs/popper.min.js"></script>
    <script src="/assets/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>

    <script src="/assets/vendors/feather-icons/feather.min.js"></script>
    <script>
        feather.replace();
    </script>

    <script src="assets/js/theme.js"></script>
</body>

</html>
