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

        .body-pro {
            background-color: #ffffff;
            border-radius: 5px;
        }

        .left-panel {
            padding: 2%;
            width: 90%;
            border-radius: 5px;
            border: 2px solid #e7e7e7;
            margin: auto;
        }

        .left-panel h4 {
            color: rgb(170, 170, 170);
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
            .left-panel-mobile {
                position: absolute;
                display: none;
                z-index: 999;
                height: 100%;
                background-color: #323232;
            }

            .left-panel {
                background-color: #ffffff;
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
    <section id="sec-pro">
        <div class="row uk-box-shadow-small body-pro">
            <button class="w-50 m-auto mt-3 mb-3 uk-box-shadow-small" id="filter"><i
                    class="fas fa-filter me-2"></i>Filter</button>
            <div class="col-12 col-xl-3 p-3 left-panel-mobile">
                <div class="left-panel">
                    <div>
                        <button class="uk-close-large float-right" type="button" uk-close></button>
                        <ul class="p-0 list-unstyled lineHeight">
                            <li class="caret-filter"><i class="fa-lg fas fa-caret-right icon-color"></i> <span
                                    class="fs-5">BRAND</span>
                            </li>
                            <ul class="nested list-unstyled lineHeight pl-5">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="BRAND1">
                                        <label class="form-check-label" for="BRAND1">
                                            Default checkbox
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="BRAND2">
                                        <label class="form-check-label" for="BRAND2">
                                            Checked checkbox
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </ul>
                    </div>

                    <div>
                        <ul class="p-0 list-unstyled lineHeight">
                            <li class="caret-filter"><i class="fa-lg fas fa-caret-right icon-color"></i> <span
                                    class="fs-5">PRODUCT
                                    RATING</span>
                            </li>
                            <ul class="nested active list-unstyled lineHeight pl-5">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" value=""
                                            id="RATING5">
                                        <label class="form-check-label" for="RATING5">
                                            <input data-role="rating" data-value="5" data-static="true"
                                                data-stared-color="#7fad39">
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" value=""
                                            id="RATING5">
                                        <label class="form-check-label" for="RATING5">
                                            <input data-role="rating" data-value="4" data-static="true"
                                                data-stared-color="#7fad39">
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" value=""
                                            id="RATING5">
                                        <label class="form-check-label" for="RATING5">
                                            <input data-role="rating" data-value="3" data-static="true"
                                                data-stared-color="#7fad39">
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" value=""
                                            id="RATING5">
                                        <label class="form-check-label" for="RATING5">
                                            <input data-role="rating" data-value="2" data-static="true"
                                                data-stared-color="#7fad39">
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" value=""
                                            id="RATING5">
                                        <label class="form-check-label" for="RATING5">
                                            <input data-role="rating" data-value="1" data-static="true"
                                                data-stared-color="#7fad39">
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </ul>
                    </div>

                    <div>
                        <ul class="p-0 list-unstyled lineHeight">
                            <li class="caret-filter"><i class="fa-lg fas fa-caret-right icon-color"></i> <span
                                    class="fs-5">PRICE
                                    (EGP)</span>
                            </li>
                            <ul class="pl-5 nested active list-unstyled lineHeight">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="DISCOUNT1">
                                        <label class="form-check-label" for="DISCOUNT1">
                                            On SALE
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="price" value="" id="DISCOUNT2">
                                        <label class="form-check-label" for="DISCOUNT2">
                                            From high price to low
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="price" value="" id="DISCOUNT3">
                                        <label class="form-check-label" for="DISCOUNT3">
                                            From low price to high
                                        </label>
                                    </div>
                                </li>
                                <li>
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
                                </li>
                            </ul>
                        </ul>
                    </div>

                    <div>
                        <form action="">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="DISCOUNT1">
                                <label class="form-check-label" for="DISCOUNT1">
                                    Best seller
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-9">
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

                <div class="mt-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $("#filter").click(function() {
            $(".left-panel-mobile").toggle(500);
        })
        $(".uk-close-large").click(function() {
            $(".left-panel-mobile").toggle(500);
        })

        $(document).on('click', '.caret-filter', function(e) {
            $(this).siblings(".nested").toggle("active");
        })
    </script>
@endsection
