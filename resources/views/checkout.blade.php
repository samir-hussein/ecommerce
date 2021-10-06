@extends('layouts.main')

@section('style')
    <style>
        section {
            width: 90%;
            margin: auto;
            background-color: #ffffff;
            padding: 2%;
            border-radius: 5px;
        }

        .btn-primary a,
        .btn-primary a:hover {
            text-decoration: none;
            color: snow;
        }

        .uk-heading-bullet::before {
            border-color: #7fad39;
        }

        .billing-info {
            width: 80%;
            padding-left: 2%;
        }

        .billing-info .fullname input {
            display: inline;
            width: 49.7%;
        }

        @media (max-width: 575.98px) {
            .billing-info .fullname input {
                width: 100%;
            }

            .billing-info {
                width: 95%;
                margin: auto;
            }

            #checkout {
                width: 90% !important;
            }
        }

    </style>
@endsection

@section('content')
    <section class="mt-5 mb-3 uk-box-shadow-small">
        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="billing-info">
                    <h2 class="uk-heading-bullet mb-5">Billing details</h2>
                    <div class="fullname">
                        <input class="form-control mb-3" type="text" placeholder="First Name">
                        <input class="form-control mb-3" type="text" placeholder="Last Name">
                    </div>

                    <input class="form-control mb-3" type="text" placeholder="Company Name (optional)">

                    <select class="form-select mb-3">
                        <option selected>Select Country</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <input class="form-control mb-3" type="text" placeholder="Town / city">

                    <input class="form-control mb-3" type="text" placeholder="House number and street name">

                    <input class="form-control mb-3" type="text" placeholder="Apartment, suite, unit etc. (optional)">

                    <input class="form-control mb-3" type="text" placeholder="Postcode / ZIP">

                    <input class="form-control mb-3" type="text" placeholder="Phone">

                    <input class="form-control mb-3" type="text" placeholder="Email address">

                    <textarea class="form-control mb-3" rows="3" placeholder="Additional information"></textarea>

                    <div class="mb-3 mt-3">
                        <label for="discount" class="mb-2">Add a discount code (optional)</label>
                        <input class="form-control" type="text" placeholder="Enter discount code" id="discount">
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="w-75 m-auto" id="checkout">
                    <h3>The total amount of</h3>
                    <p>Temporary amount <span class="float-right">53.98</span></p>
                    <p>Shipping <span class="float-right">Gratis</span></p>
                    <hr class="uk-divider">
                    <p><b>The total amount of</b> <span class="float-right"><b>53.98</b></span></p>
                    <button class="btn btn-primary w-100"><a href="#" class="d-block">MAKE PURCHASE</a></button>
                </div>
            </div>
        </div>
    </section>
@endsection
