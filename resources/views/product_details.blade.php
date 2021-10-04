@extends('layouts.main')

@section('style')
    <style>
        section {
            padding: 5%;
            background-color: #ffffff;
            width: 95%;
            margin: auto;
            margin-top: 4%;
            margin-bottom: 3%;
            border-radius: 5px;
        }

        .uk-slideshow-items img {
            width: 100%;
            height: 100%;
            border-radius: 5px;
            object-fit: contain;
            background-color: #ececec;
        }

        .uk-thumbnav img {
            width: 100px;
            height: 100px;
        }

        .uk-visible-toggle svg {
            color: #7fad39;
        }

        div.buttons {
            display: flex;
            width: 20%;
            font-size: 22px;
        }

        .border-left {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            border-right: none;
        }

        .border-right {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            border-left: none;
        }

        div.buttons button {
            width: calc(100% / 3);
            border: 1px solid #b8b8b8;
            background-color: #ffffff;
        }

        div.buttons input {
            width: calc(100% / 3);
            text-align: center;
            border: 1px solid #b8b8b8;
        }

        .btn a:hover,
        .btn a {
            text-decoration: none;
            color: snow;
            font-weight: 600;
        }

        .actions a {
            font-size: 12px;
        }

        .actions .add-cart {
            background-color: #ececec;
        }

        .actions .add-cart:hover {
            background-color: #e6e6e6;
        }

        .actions .add-cart a {
            color: #000000;
        }

        .details {
            width: 80%;
            margin: auto;
        }

        .cards,
        .cards h4 {
            color: #000000;
            text-align: center;
        }

        .cards img {
            width: 200px;
            height: 250px;
            border-radius: 5px;
            object-fit: contain;
            background-color: #ececec;
        }

        .uk-heading-bullet::before {
            border-color: #7fad39;
        }

        @media (max-width: 575.98px) {
            .uk-thumbnav img {
                width: 70px;
                height: 70px;
            }

            .details {
                width: 95%;
            }

            div.buttons {
                width: 30%;
            }

            .cards img {
                width: 150px;
                height: 200px;
            }
        }

    </style>
@endsection

@section('content')
    <section class="uk-box-shadow-small">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="uk-position-relative" uk-slideshow="animation: fade">

                    <ul class="uk-slideshow-items uk-box-shadow-small">
                        <li>
                            <img src="{{ asset('images/product1.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/product2.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/product3.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('images/product4.jpg') }}" alt="">
                        </li>
                    </ul>

                    <div class="uk-position-bottom-center uk-position-small uk-position-relative uk-visible-toggle uk-light"
                        tabindex="-1" uk-slider>
                        <ul class="uk-thumbnav uk-slider-items uk-child-width-1-4 uk-grid">
                            <li uk-slideshow-item="0"><a href="#"><img src="{{ asset('images/product1.jpg') }}"
                                        width="100" alt=""></a></li>
                            <li uk-slideshow-item="1"><a href="#"><img src="{{ asset('images/product2.jpg') }}"
                                        width="100" alt=""></a></li>
                            <li uk-slideshow-item="2"><a href="#"><img src="{{ asset('images/product3.jpg') }}"
                                        width="100" alt=""></a></li>
                            <li uk-slideshow-item="3"><a href="#"><img src="{{ asset('images/product4.jpg') }}"
                                        width="100" alt=""></a></li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                            uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                            uk-slider-item="next"></a>
                    </div>

                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="details">
                    <h3>Lorem ipsum</h3>
                    <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                    <p>120 EGP</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit error voluptas
                        repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio, officia quis
                        dolore quos sapiente tempore alias.</p>
                    <hr class="uk-divider">

                    <div class="buttons">
                        <button class="border-left">-</button>
                        <input type="text" value="1">
                        <button class="border-right">+</button>
                    </div>

                    <div class="actions mt-4">
                        <button class="btn btn-primary uk-box-shadow-small"><a href="#">BUY NOW</a></button>
                        <button class="ml-1 btn add-cart uk-box-shadow-small"><a href="#">
                                <i class="fas fa-cart-plus"></i>ADD TO CART
                            </a></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3 mt-5">
            <h3 class="uk-heading-bullet">Related Products</h3>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                    <li>
                        <div class="cards">
                            <div>
                                <img class="uk-box-shadow-small mb-2" src="{{ asset('images/product1.jpg') }}" alt="">
                            </div>
                            <div>
                                <h4 class="mb-2">lorem ipsum</h4>
                                <input class="mb-2" data-role="rating" data-value="3" data-static="true"
                                    data-stared-color="#7fad39">
                                <p class="m-0">140 EGP</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cards">
                            <div>
                                <img class="uk-box-shadow-small mb-2" src="{{ asset('images/product2.jpg') }}" alt="">
                            </div>
                            <div>
                                <h4 class="mb-2">lorem ipsum</h4>
                                <input class="mb-2" data-role="rating" data-value="3" data-static="true"
                                    data-stared-color="#7fad39">
                                <p class="m-0">140 EGP</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cards">
                            <div>
                                <img class="uk-box-shadow-small mb-2" src="{{ asset('images/product3.jpg') }}" alt="">
                            </div>
                            <div>
                                <h4 class="mb-2">lorem ipsum</h4>
                                <input class="mb-2" data-role="rating" data-value="3" data-static="true"
                                    data-stared-color="#7fad39">
                                <p class="m-0">140 EGP</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cards">
                            <div>
                                <img class="uk-box-shadow-small mb-2" src="{{ asset('images/product4.jpg') }}" alt="">
                            </div>
                            <div>
                                <h4 class="mb-2">lorem ipsum</h4>
                                <input class="mb-2" data-role="rating" data-value="3" data-static="true"
                                    data-stared-color="#7fad39">
                                <p class="m-0">140 EGP</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="cards">
                            <div>
                                <img class="uk-box-shadow-small mb-2" src="{{ asset('images/product1.jpg') }}" alt="">
                            </div>
                            <div>
                                <h4 class="mb-2">lorem ipsum</h4>
                                <input class="mb-2" data-role="rating" data-value="3" data-static="true"
                                    data-stared-color="#7fad39">
                                <p class="m-0">140 EGP</p>
                            </div>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                    uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                    uk-slider-item="next"></a>

            </div>
        </div>
    </section>
@endsection
