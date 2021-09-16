@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/products_style.css') }}">
@endsection

@section('content')

    <section class="row" id="products">
        <button class="w-50 m-auto mt-3 mb-3" id="filter"><i class="fas fa-filter me-2"></i>Filter</button>
        <div class="col-12 col-lg-2" id="left-panel">
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
                    <h4>DISCOUNT PERCENTAGE</h4>
                    <form action="">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="DISCOUNT1">
                            <label class="form-check-label" for="DISCOUNT1">
                                80%
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="DISCOUNT2">
                            <label class="form-check-label" for="DISCOUNT2">
                                20%
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="DISCOUNT3">
                            <label class="form-check-label" for="DISCOUNT3">
                                40%
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="DISCOUNT4">
                            <label class="form-check-label" for="DISCOUNT4">
                                60%
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
        <div class="col-12 col-lg-10" id="right-panel">
            <div class="row m-0">
                <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@l m-0" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <a href="#"><img src="{{ asset('images/product2.jpg') }}" alt=""></a>
                            </div>
                            <div class="uk-card-body">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                </a>
                                <p>EGP 89 - EGP 115</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon" uk-tooltip="Add To Cart">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon" uk-tooltip="Add To Wish List">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
                                <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-body">
                                <a href="#" class="text-decoration-none">
                                    <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                </a>
                                <p>EGP 89 - EGP 115</p>
                            </div>
                            <div class="uk-card-media-bottom">
                                <a href="#"><img src="{{ asset('images/product3.jpg') }}" alt=""></a>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon" uk-tooltip="Add To Cart">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon" uk-tooltip="Add To Wish List">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
                                <input data-role="rating" data-value="2" data-static="true" data-stared-color="#7fad39">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('images/product1.jpg') }}" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                <p>EGP 89 - EGP 115</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon" uk-tooltip="Add To Cart">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
                                <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                <p>EGP 89 - EGP 115</p>
                            </div>
                            <div class="uk-card-media-bottom">
                                <img src="{{ asset('images/product4.png') }}" alt="">
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon" uk-tooltip="Add To Cart">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
                                <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('images/product2.jpg') }}" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                <p>EGP 89 - EGP 115</p>
                                <p class="m-0 buttons">
                                    <a href="#" class="me-3"><span uk-icon="icon:heart"></span>Favorite List</a>
                                    <a href="#"><span uk-icon="icon:cart"></span>Add To Cart</a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon" uk-tooltip="Add To Cart">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
                                <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                <p>EGP 89 - EGP 115</p>
                                <p class="m-0 buttons">
                                    <a href="#" class="me-3"><span uk-icon="icon:heart"></span>Favorite List</a>
                                    <a href="#"><span uk-icon="icon:cart"></span>Add To Cart</a>
                                </p>
                            </div>
                            <div class="uk-card-media-bottom">
                                <img src="{{ asset('images/product3.jpg') }}" alt="">
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
                                <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('images/product2.jpg') }}" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                <p>EGP 89 - EGP 115</p>
                                <p class="m-0 buttons">
                                    <a href="#" class="me-3"><span uk-icon="icon:heart"></span>Favorite List</a>
                                    <a href="#"><span uk-icon="icon:cart"></span>Add To Cart</a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
                                <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                <p>EGP 89 - EGP 115</p>
                                <p class="m-0 buttons">
                                    <a href="#" class="me-3"><span uk-icon="icon:heart"></span>Favorite List</a>
                                    <a href="#"><span uk-icon="icon:cart"></span>Add To Cart</a>
                                </p>
                            </div>
                            <div class="uk-card-media-bottom">
                                <img src="{{ asset('images/product3.jpg') }}" alt="">
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
                                <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="{{ asset('images/product2.jpg') }}" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                <p>EGP 89 - EGP 115</p>
                                <p class="m-0 buttons">
                                    <a href="#" class="me-3"><span uk-icon="icon:heart"></span>Favorite List</a>
                                    <a href="#"><span uk-icon="icon:cart"></span>Add To Cart</a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
                                <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                <p>EGP 89 - EGP 115</p>
                                <p class="m-0 buttons">
                                    <a href="#" class="me-3"><span uk-icon="icon:heart"></span>Favorite List</a>
                                    <a href="#"><span uk-icon="icon:cart"></span>Add To Cart</a>
                                </p>
                            </div>
                            <div class="uk-card-media-bottom">
                                <img src="{{ asset('images/product3.jpg') }}" alt="">
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
                                <input data-role="rating" data-value="3" data-static="true" data-stared-color="#7fad39">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="m-0 pagination justify-content-center">
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
            $("#left-panel").toggle(500);
        })
        $(".uk-close-large").click(function() {
            $("#left-panel").toggle(500);
        })
    </script>
@endsection
