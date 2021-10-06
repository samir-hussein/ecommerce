@extends('layouts.main')

@section('style')
    <style>
        #shopping-cart {
            padding: 5% 0;
        }

        #shopping-cart div.uk-box-shadow-small {
            width: 90%;
            margin: auto;
            background-color: #ffffff;
            border-radius: 5px;
            padding: 2%;
        }

        #shopping-cart div {
            margin: auto;
        }

        .uk-heading-bullet::before {
            border-color: #7fad39;
        }

        #shopping-cart .cart img {
            width: 200px;
            height: auto;
            border-radius: 5px;
            display: block;
            margin: auto;
        }

        #shopping-cart .cart div.actions {
            display: flex;
        }

        #shopping-cart .cart div.actions a {
            font-size: 15px;
            color: #000000;
            white-space: nowrap;
            display: flex;
            align-items: center;
            margin: 0;
        }

        #shopping-cart .cart div.actions a i {
            margin-right: 2%;
        }

        #shopping-cart .cart div.buttons {
            display: flex;
            width: 100%;
            float: right;
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

        #shopping-cart .cart div.buttons button {
            width: calc(100% / 3);
            border: 1px solid #b8b8b8;
            background-color: #ffffff;
        }

        #shopping-cart .cart div.buttons input {
            width: calc(100% / 3);
            text-align: center;
            border: 1px solid #b8b8b8;
        }

        .btn-primary a:hover,
        .btn-primary a {
            text-decoration: none;
            color: snow;
            font-weight: 600;
        }

        @media (max-width: 575.98px) {
            #shopping-cart .cart img {
                width: 100%;
            }

            #shopping-cart div.cart {
                padding: 0;
            }

            #shopping-cart .cart div.actions a,
            #shopping-cart .cart .price {
                font-size: 12px;
            }

            .cart-body {
                padding-left: 0;
                padding-right: 0;
            }

            #checkout {
                width: 100% !important;
                margin-top: 10% !important;
            }

            h2.uk-heading-bullet {
                margin-bottom: 3% !important;
            }
        }

    </style>
@endsection

@section('content')
    <section id="shopping-cart">
        <div class="uk-box-shadow-small">
            <h2 class="uk-heading-bullet mb-5">Shopping cart</h2>
            <div class="row">
                <div class="col-12 col-xl-7">
                    <div class="cart row">
                        <div class="col-12 col-xl-4">
                            <img src="{{ asset('images/product1.jpg') }}" alt="" class="uk-box-shadow-small">
                        </div>
                        <div class="col-12 col-xl-8 cart-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4>Lorem ipsum dolor</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut
                                        labore et dolore magna aliqua.</p>
                                </div>
                                <div class="col-4">
                                    <div class="buttons">
                                        <button class="border-left">-</button>
                                        <input type="text" value="1">
                                        <button class="border-right">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-9 actions">
                                    <a href="#" class="nav-icon">
                                        <i class="fas fa-trash icon-color"></i>REMOVE ITEM
                                    </a>
                                    <a href="#" class="nav-icon ml-5">
                                        <i class="fas fa-heart icon-color"></i>MOVE TO WISH LIST
                                    </a>
                                </div>
                                <div class="col-3">
                                    <p class="text-end m-0 price">150 EGP</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="uk-divider">

                    <div class="cart row">
                        <div class="col-12 col-xl-4">
                            <img src="{{ asset('images/product1.jpg') }}" alt="" class="uk-box-shadow-small">
                        </div>
                        <div class="col-12 col-xl-8 cart-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4>Lorem ipsum dolor</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut
                                        labore et dolore magna aliqua.</p>
                                </div>
                                <div class="col-4">
                                    <div class="buttons">
                                        <button class="border-left">-</button>
                                        <input type="text" value="1">
                                        <button class="border-right">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-9 actions">
                                    <a href="#" class="nav-icon">
                                        <i class="fas fa-trash icon-color"></i>REMOVE ITEM
                                    </a>
                                    <a href="#" class="nav-icon ml-5">
                                        <i class="fas fa-heart icon-color"></i>MOVE TO WISH LIST
                                    </a>
                                </div>
                                <div class="col-3">
                                    <p class="text-end m-0 price">150 EGP</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="uk-divider">

                </div>
                <div class="col-12 col-xl-5">
                    <div class="w-75 m-auto" id="checkout">
                        <h3>The total amount of</h3>
                        <p>Temporary amount <span class="float-right">53.98</span></p>
                        <p>Shipping <span class="float-right">Gratis</span></p>
                        <hr class="uk-divider">
                        <p><b>The total amount of</b> <span class="float-right"><b>53.98</b></span></p>
                        <button class="btn btn-primary w-100"><a href="/checkout" class="d-block">GO TO
                                CHECKOUT</a></button>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
