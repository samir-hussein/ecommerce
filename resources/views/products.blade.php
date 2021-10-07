@extends('layouts.main')

@section('style')
    <style>
        #sec-pro {
            background-color: #ffffff;
            border-radius: 5px;
            margin: 3% auto 2% auto;
            width: 95%;
            position: relative;
        }

        .left-panel {
            background-color: #323232;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-right: 4px solid #7fad39;
            color: snow;
        }

        .left-panel h4 {
            color: #eee;
            font-size: 18px;
            white-space: nowrap;
        }

        .border-bottom-filter {
            border-bottom: 2px solid #7fad39;
            padding-bottom: 3%;
            margin-bottom: 5%;
        }

        #filter {
            background-color: #7fad39;
            color: #fff;
            outline: none;
            border: none;
            border-radius: 3px;
            padding: 2%;
            display: none;
        }

        .uk-close-large {
            display: none;
        }

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

        @media (max-width: 575.98px) {
            .left-panel {
                position: absolute;
                display: none;
                z-index: 999;
                height: 100%;
            }

            #filter {
                display: block;
            }

            .uk-close-large {
                display: block;
            }
        }

    </style>
@endsection

@section('content')
    <section class="uk-box-shadow-small" id="sec-pro">
        <div class="row">
            <button class="w-50 m-auto mt-3 mb-3 uk-box-shadow-small" id="filter"><i
                    class="fas fa-filter me-2"></i>Filter</button>
            <div class="col-12 col-xl-2 left-panel uk-box-shadow-small">
                <div>
                    <div class="border-bottom-filter">
                        <button class="uk-close-large float-right" type="button" uk-close></button>
                        <h4 class="mt-1">BRAND</h4>
                        <form action="">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="BRAND1">
                                <label class="form-check-label" for="BRAND1">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="BRAND2">
                                <label class="form-check-label" for="BRAND2">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="BRAND3">
                                <label class="form-check-label" for="BRAND3">
                                    Checked checkbox
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="BRAND4">
                                <label class="form-check-label" for="BRAND4">
                                    Checked checkbox
                                </label>
                            </div>
                        </form>
                    </div>

                    <div class="border-bottom-filter">
                        <form action="">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="DISCOUNT1">
                                <label class="form-check-label" for="DISCOUNT1">
                                    On SALE
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="DISCOUNT1">
                                <label class="form-check-label" for="DISCOUNT1">
                                    Best seller
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="price" value="" id="DISCOUNT2">
                                <label class="form-check-label" for="DISCOUNT2">
                                    From high price to low
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="price" value="" id="DISCOUNT3">
                                <label class="form-check-label" for="DISCOUNT3">
                                    From low price to high
                                </label>
                            </div>
                        </form>
                    </div>

                    <div class="border-bottom-filter">
                        <h4>PRODUCT RATING</h4>
                        <form action="">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="RATING5">
                                <label class="form-check-label" for="RATING5">
                                    <input data-role="rating" data-value="5" data-static="true" data-stared-color="#7fad39">
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="RATING4">
                                <label class="form-check-label" for="RATING4">
                                    <input data-role="rating" data-value="4" data-static="true" data-stared-color="#7fad39">
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="RATING3">
                                <label class="form-check-label" for="RATING3">
                                    <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="RATING2">
                                <label class="form-check-label" for="RATING2">
                                    <input data-role="rating" data-value="2" data-static="true" data-stared-color="#7fad39">
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="RATING1">
                                <label class="form-check-label" for="RATING1">
                                    <input data-role="rating" data-value="1" data-static="true" data-stared-color="#7fad39">
                                </label>
                            </div>
                        </form>
                    </div>

                    <div class="border-bottom-filter">
                        <h4>PRICE (EGP)</h4>
                        <form action="" style="margin-top: 5% !important">
                            <label class="d-block">From</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" value="20">
                                <span class="input-group-text">EGP</span>
                            </div>
                            <label class="d-block">To</label>
                            <div class="input-group">
                                <input type="number" class="form-control" value="200">
                                <span class="input-group-text">EGP</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-10">
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
                            <button class="btn heart fs-6" uk-tooltip="ADD TO WISHLIST"><i
                                    class="far fa-heart"></i></button>
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
                            <button class="btn heart fs-6" uk-tooltip="ADD TO WISHLIST"><i
                                    class="far fa-heart"></i></button>
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
                            <button class="btn heart fs-6" uk-tooltip="ADD TO WISHLIST"><i
                                    class="far fa-heart"></i></button>
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
                            <button class="btn heart fs-6" uk-tooltip="ADD TO WISHLIST"><i
                                    class="far fa-heart"></i></button>
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
                            <button class="btn heart fs-6" uk-tooltip="ADD TO WISHLIST"><i
                                    class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $("#filter").click(function() {
            $(".left-panel").toggle(500);
        })
        $(".uk-close-large").click(function() {
            $(".left-panel").toggle(500);
        })
    </script>
@endsection
