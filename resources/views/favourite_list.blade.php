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
            <div class="row" id="all_cards">
                {{-- show cards here --}}
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        let url = window.location.href;
        url = url.split("/");
        url = url[url.length - 1];
        url = url.replace("#", "");
        $("#" + url).addClass("active");

        function getCards() {
            $.ajax({
                type: "get",
                url: '/api/wishlist/read',
                success: function(data) {
                    if (data.message == 'success') {
                        let cards = "";

                        data.items.forEach((key, index) => {
                            let price_after_discount = "";
                            let sale_badge = "";
                            let sold_badge = "";
                            let img_name = key['img_name'];
                            let addCartButton =
                                `<button class="btn btn-primary fs-6 me-2 add-cart-button" data-id="` +
                                key[
                                    "id"] + `"><i class="fas fa-shopping-cart"></i> ADD TO
                                                CART</button>`;
                            if (key['discount'] != null) {
                                price_after_discount = `<del class="fs-5">` + key[
                                    'sale_price'] + ` EGP</del>`;
                                key['sale_price'] = key['discount_price'];
                                sale_badge = `<p class="sale-badge uk-box-shadow-large">sale</p>`;
                            }

                            if (key['stock_status'] != "available") {
                                sale_badge = "";
                                sold_badge = `<p class="sold-badge uk-box-shadow-large">sold out</p>`;
                                addCartButton = "";
                            }

                            cards +=
                                `<div class="card-pro col-12 col-xl-4 mb-4">
                                        <div class="card-pro-head uk-box-shadow-small">
                                            <a href="/product-details"><img src="{{ asset('images/`+img_name+`') }}" alt="...."></a>` +
                                sale_badge + sold_badge + `
                                        </div>
                                        <div>
                                            <h3 class="text-center mt-2 mb-2">` + key['name'] + `</h3>
                                            <div class="d-flex justify-content-center mb-2">
                                                <p class="me-3 mb-0 fs-5">` + key['sale_price'] + ` EGP</p>` +
                                price_after_discount + `
                                            </div>
                                            <input class="m-auto" data-role="rating" data-value="` + key['rating'] + `" data-static="true"
                                                data-stared-color="#7fad39">
                                            <hr class="uk-divider w-75 m-auto mb-3 mt-3">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            ` + addCartButton +
                                `
                                            <button class="btn heart fs-6 remove-item" uk-tooltip="REMOVE FROM WISHLIST" data-id="` +
                                key["id"] + `"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </div>`;
                        });

                        $("#all_cards").html(cards);
                    } else {
                        $("#all_cards").html("<p class='text-center fs-4'>" + data.message +
                            " <a href='/products'>Shop Now</a></p>");
                    }
                }
            });
        }
        getCards();

        $(document).on('click', '.add-cart-button', function() {
            $.ajax({
                type: "get",
                url: '/api/cart/add-item/' + $(this).attr('data-id'),
                success: function(data) {
                    countCartItems();
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

        $(document).on('click', '.remove-item', function() {
            $.ajax({
                type: "get",
                url: '/api/wishlist/remove-item/' + $(this).attr('data-id'),
                success: function(data) {
                    getCards();
                    countWishlistItems();
                }
            });
        });
    </script>
@endsection
