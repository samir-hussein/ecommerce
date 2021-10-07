@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/customer_profile.css') }}">

    <style>
        .rating {
            display: block;
        }

        .rating ul.stars {
            justify-content: center;
        }

        .card-pro {}

        .card-pro .heart {
            background-color: #ff3d71;
            color: snow;
        }

        .card-pro .card-pro-head {
            position: relative;
            overflow: hidden;
            width: 90%;
            margin: auto;
            background-color: #eee;
            border-radius: 5px;
        }

        .card-pro .card-pro-head img {
            display: block;
            object-fit: contain;
            width: 100%;
            height: 350px;
            margin: auto;
            transform: scale(0.9);
            transition: transform 2s;
        }

        .card-pro .card-pro-head img:hover {
            transform: scale(1.1);
        }

        .card-pro .card-pro-head .sale-badge,
        .card-pro .card-pro-head .sold-badge {
            position: absolute;
            top: 0;
            left: 0;
            background-color: #f33a6b;
            color: snow;
            text-transform: uppercase;
            padding: 1%;
            transform: rotate(-45deg) translate(-28%, -250%);
            width: 100%;
            text-align: center;
            font-weight: 600;
            cursor: none;
        }

        .card-pro .card-pro-head .sold-badge {
            background-color: #000000;
        }

    </style>
@endsection

@section('content')

    <div id="tabs" class="uk-box-shadow-small">
        @include('layouts.customer_profile_tabs')

        <section id="profile" class="mt-3">
            <div class="row">
                <div class="card-pro col-12 col-xl-4 mb-4">
                    <div class="card-pro-head uk-box-shadow-small">
                        <a href="/product-details"><img src="{{ asset('images/product1.jpg') }}" alt="...."></a>
                        <p class="sale-badge uk-box-shadow-large">sale</p>
                    </div>
                    <div>
                        <h3 class="text-center mt-2 mb-2">Lorem ipsum</h3>
                        <div class="d-flex justify-content-center mb-2">
                            <p class="me-3 mb-0 fs-5">120 EGP</p><del class="fs-5">150 EGP</del>
                        </div>
                        <input class="m-auto" data-role="rating" data-value="3" data-static="true"
                            data-stared-color="#7fad39">
                        <hr class="uk-divider w-75 m-auto mb-3 mt-3">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary fs-6 me-2"><i class="fas fa-shopping-cart"></i> ADD TO
                            CART</button>
                        <button class="btn heart fs-6" uk-tooltip="REMOVE FROM WISHLIST"><i
                                class="fas fa-trash-alt"></i></button>
                    </div>
                </div>

                <div class="card-pro col-12 col-xl-4 mb-4">
                    <div class="card-pro-head uk-box-shadow-small">
                        <a href="/product-details"><img src="{{ asset('images/product2.jpg') }}" alt="...."></a>
                        <p class="sold-badge uk-box-shadow-large">sold out</p>
                    </div>
                    <div>
                        <h3 class="text-center mt-2 mb-2">Lorem ipsum</h3>
                        <div class="d-flex justify-content-center mb-2">
                            <p class="me-3 mb-0 fs-5">120 EGP</p>
                        </div>
                        <input class="m-auto" data-role="rating" data-value="3" data-static="true"
                            data-stared-color="#7fad39">
                        <hr class="uk-divider w-75 m-auto mb-3 mt-3">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn heart fs-6" uk-tooltip="REMOVE FROM WISHLIST"><i
                                class="fas fa-trash-alt"></i></button>
                    </div>
                </div>

                <div class="card-pro col-12 col-xl-4 mb-4">
                    <div class="card-pro-head uk-box-shadow-small">
                        <a href="/product-details"><img src="{{ asset('images/product3.jpg') }}" alt="...."></a>
                    </div>
                    <div>
                        <h3 class="text-center mt-2 mb-2">Lorem ipsum</h3>
                        <div class="d-flex justify-content-center mb-2">
                            <p class="me-3 mb-0 fs-5">120 EGP</p>
                        </div>
                        <input class="m-auto" data-role="rating" data-value="3" data-static="true"
                            data-stared-color="#7fad39">
                        <hr class="uk-divider w-75 m-auto mb-3 mt-3">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary fs-6 me-2"><i class="fas fa-shopping-cart"></i> ADD TO
                            CART</button>
                        <button class="btn heart fs-6" uk-tooltip="REMOVE FROM WISHLIST"><i
                                class="fas fa-trash-alt"></i></button>
                    </div>
                </div>

                <div class="card-pro col-12 col-xl-4 mb-4">
                    <div class="card-pro-head uk-box-shadow-small">
                        <a href="/product-details"><img src="{{ asset('images/product3.jpg') }}" alt="...."></a>
                    </div>
                    <div>
                        <h3 class="text-center mt-2 mb-2">Lorem ipsum</h3>
                        <div class="d-flex justify-content-center mb-2">
                            <p class="me-3 mb-0 fs-5">120 EGP</p>
                        </div>
                        <input class="m-auto" data-role="rating" data-value="3" data-static="true"
                            data-stared-color="#7fad39">
                        <hr class="uk-divider w-75 m-auto mb-3 mt-3">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary fs-6 me-2"><i class="fas fa-shopping-cart"></i> ADD TO
                            CART</button>
                        <button class="btn heart fs-6" uk-tooltip="REMOVE FROM WISHLIST"><i
                                class="fas fa-trash-alt"></i></button>
                    </div>
                </div>

                <div class="card-pro col-12 col-xl-4 mb-4">
                    <div class="card-pro-head uk-box-shadow-small">
                        <a href="/product-details"><img src="{{ asset('images/product3.jpg') }}" alt="...."></a>
                    </div>
                    <div>
                        <h3 class="text-center mt-2 mb-2">Lorem ipsum</h3>
                        <div class="d-flex justify-content-center mb-2">
                            <p class="me-3 mb-0 fs-5">120 EGP</p>
                        </div>
                        <input class="m-auto" data-role="rating" data-value="3" data-static="true"
                            data-stared-color="#7fad39">
                        <hr class="uk-divider w-75 m-auto mb-3 mt-3">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary fs-6 me-2"><i class="fas fa-shopping-cart"></i> ADD TO
                            CART</button>
                        <button class="btn heart fs-6" uk-tooltip="REMOVE FROM WISHLIST"><i
                                class="fas fa-trash-alt"></i></button>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        let url = window.location.href;
        url = url.split("/");
        url = url[url.length - 1];
        $("#" + url).addClass("active");
    </script>
@endsection
