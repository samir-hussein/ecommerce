@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/products_style.css') }}">
@endsection

@section('content')

    <section class="row" id="products">
        <div class="col-2" id="left-panel">
            <div>
                <div class="border-bottom-filter">
                    <h4>BRAND</h4>
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
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="DISCOUNT2">
                            <label class="form-check-label" for="DISCOUNT2">
                                Checked checkbox
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="DISCOUNT3">
                            <label class="form-check-label" for="DISCOUNT3">
                                Checked checkbox
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="DISCOUNT4">
                            <label class="form-check-label" for="DISCOUNT4">
                                Checked checkbox
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
                                <i class="fas fa-star icon-color"></i>
                                <i class="fas fa-star icon-color"></i>
                                <i class="fas fa-star icon-color"></i>
                                <i class="fas fa-star icon-color"></i>
                                <i class="fas fa-star icon-color"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="RATING4">
                            <label class="form-check-label" for="RATING4">
                                <i class="fas fa-star icon-color"></i>
                                <i class="fas fa-star icon-color"></i>
                                <i class="fas fa-star icon-color"></i>
                                <i class="fas fa-star icon-color"></i>
                                <i class="far fa-star icon-color"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="RATING3">
                            <label class="form-check-label" for="RATING3">
                                <i class="fas fa-star icon-color"></i>
                                <i class="fas fa-star icon-color"></i>
                                <i class="fas fa-star icon-color"></i>
                                <i class="far fa-star icon-color"></i>
                                <i class="far fa-star icon-color"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="RATING2">
                            <label class="form-check-label" for="RATING2">
                                <i class="fas fa-star icon-color"></i>
                                <i class="fas fa-star icon-color"></i>
                                <i class="far fa-star icon-color"></i>
                                <i class="far fa-star icon-color"></i>
                                <i class="far fa-star icon-color"></i>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" value="" id="RATING1">
                            <label class="form-check-label" for="RATING1">
                                <i class="fas fa-star icon-color"></i>
                                <i class="far fa-star icon-color"></i>
                                <i class="far fa-star icon-color"></i>
                                <i class="far fa-star icon-color"></i>
                                <i class="far fa-star icon-color"></i>
                            </label>
                        </div>
                    </form>
                </div>

                <div class="border-bottom-filter">
                    <h4>PRICE (EGP)</h4>
                    <form action="" style="margin-top: 15% !important">
                        <input data-role="doubleslider" data-min="20" data-max="1000" data-value-min="20" data-accuracy="1"
                            data-value-max="80" data-hint-always="true" data-hint-position-min="top"
                            data-hint-position-max="top" data-cls-marker="bg-green border-40 custom-marker"
                            data-cls-hint="bg-cyan custom-marker" class="ultra-thin cycle-marker">

                        <div class="d-flex">
                            <input class="form-control" type="number" placeholder="20">
                            <span class="m-2">:</span>
                            <input class="form-control" type="number" placeholder="80">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-10" id="right-panel">
            <div class="row m-0">
                <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m m-0" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <a href="#"><img src="{{ asset('images/product2.jpg') }}" alt=""></a>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Lace Up Sneakers Modern – White</h3>
                                <p>EGP 89 - EGP 115</p>
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
                            </div>
                            <div class="uk-card-media-bottom">
                                <a href="#"><img src="{{ asset('images/product3.jpg') }}" alt=""></a>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
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
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
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
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-cart-plus icon-color"></i>
                                </a>
                                <a href="#" class="nav-icon">
                                    <i class="fas fa-heart icon-color"></i>
                                </a>
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
