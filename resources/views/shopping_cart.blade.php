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
                <div class="col-12 col-xl-7" id="all_cards">
                    {{-- show cards here --}}
                </div>
                <div class="col-12 col-xl-5 m-0">
                    <div class="w-75 m-auto" id="checkout">
                        <p><b>The total amount of</b> <span class="float-right"><b id="total_amount">0.0</b></span></p>
                        <button class="btn btn-primary w-100"><a href="/checkout" class="d-block">GO TO
                                CHECKOUT</a></button>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('script')
    <script>
        function getCards() {
            $.ajax({
                type: "get",
                url: '/api/cart/read',
                success: function(data) {
                    if (data.message == 'success') {
                        $("#total_amount").text(data.total_price + " EGP");
                        let cards = "";
                        let img_name;

                        data.items.forEach((key, index) => {

                            img_name = key['img_name'];
                            cards += `<div class="cart row">
                        <div class="col-12 col-xl-4">
                            <img src="{{ asset('images/`+img_name+`') }}" alt="...." class="uk-box-shadow-small">
                        </div>
                        <div class="col-12 col-xl-8 cart-body">
                            <div class="row">
                                <div class="col-8">
                                    <h4>` + key['product_name'] + `</h4>
                                    <p>` + key['desc'] + `</p>
                                </div>
                                <div class="col-4">
                                    <div class="buttons">
                                        <button class="border-left remove-item" data-id="` + key['product_id'] + `">-</button>
                                        <input type="text" value="` + key['quantity'] + `">
                                        <button class="border-right add-item" data-id="` + key['product_id'] + `">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-9 actions">
                                    <a data-id="` + key['product_id'] + `" href="/api/cart/remove-item/` + key[
                                'product_id'] + `/all" class="nav-icon remove-button">
                                        <i class="fas fa-trash icon-color"></i>REMOVE ITEM
                                    </a>
                                    <a href="/api/wishlist/add-item/` + key['product_id'] + `" class="nav-icon ml-5 add-wishlist">
                                        <i class="fas fa-heart icon-color"></i>MOVE TO WISH LIST
                                    </a>
                                </div>
                                <div class="col-3">
                                    <p class="text-end m-0 price">` + key['total_price'] + ` EGP</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="uk-divider">`;
                        });

                        $("#all_cards").html(cards);
                    } else {
                        $("#total_amount").text("0.0 EGP");
                        $("#all_cards").html("<p class='text-center fs-4'>" + data.message +
                            " <a href='/products'>Shop Now</a></p>");
                    }
                }
            });
        }
        getCards();

        $(document).on('click', '.add-item', function() {
            $.ajax({
                type: "get",
                url: '/api/cart/add-item/' + $(this).attr('data-id'),
                success: function(data) {
                    getCards();
                    countCartItems();
                }
            });
        });

        $(document).on('click', '.remove-item', function() {
            $.ajax({
                type: "get",
                url: '/api/cart/remove-item/' + $(this).attr('data-id'),
                success: function(data) {
                    getCards();
                    countCartItems();
                }
            });
        });

        $(document).on('click', '.remove-button', function(e) {
            e.preventDefault();
            $.ajax({
                type: "get",
                url: $(this).attr('href'),
                success: function(data) {
                    getCards();
                    countCartItems();
                }
            });
        });

        $(document).on('click', '.add-wishlist', function(e) {
            e.preventDefault();
            $.ajax({
                type: "get",
                url: $(this).attr('href'),
                success: function(data) {
                    countWishlistItems();
                    UIkit.notification({
                        message: data.message,
                        status: 'primary',
                        pos: 'top-right',
                        timeout: 3000,
                        pos: "top-center"
                    });
                }
            });
        });
    </script>
@endsection
