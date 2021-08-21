@extends('layouts.main')

@section('content')
    <main>
        <section class="row" id="sec-1">
            <div class="col-12 col-xl-10">
                <div uk-slideshow="animation: push">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3">

                        <ul class="uk-slideshow-items uk-box-shadow-small">
                            <li>
                                <img src="{{ asset('images/L_1629022378_GW-MB-OHL-Kitchen-en.jpg') }}" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="{{ asset('images/L_1629022716_GW-MB-Apparel-en.jpg') }}" alt="" uk-cover>
                            </li>
                            <li>
                                <img src="{{ asset('images/L_1629371043_GW-MB-CEWeek-Xiaomi-en.png') }}" alt="" uk-cover>
                            </li>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                            uk-slideshow-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                            uk-slideshow-item="next"></a>

                    </div>

                    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

                </div>
            </div>

            <div class="col-12 col-xl-2">
                <div class="row h-100">
                    <div class="col-4 col-xl-12">
                        <a href="#"><img class="h-75 w-100 uk-box-shadow-medium" src="{{ asset('images/218x184_EN.jpg') }}" alt=""></a>
                    </div>
                    <div class="col-4 col-xl-12">
                        <a href="#"><img class="h-75 w-100 uk-box-shadow-medium" src="{{ asset('images/5231147063618082677.png') }}"
                                alt=""></a>
                    </div>
                    <div class="col-4 col-xl-12">
                        <a href="#"><img class="h-75 w-100 uk-box-shadow-medium" src="{{ asset('images/218x184_EN (1).jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-pro">
            <div class="container uk-box-shadow-small">
                <h3 class="uk-heading-bullet">Top selling items</h3>

                <div uk-slider="sets: true;autoplay-interval: 6000;autoplay: true;pause-on-hover: true;center: true">

                    <div class="uk-position-relative">

                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m">
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/42-50inch-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_1.jpg.pagespeed.ic.jv58llKnOW.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_2.jpg.pagespeed.ic.zYGt4XwKL2.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_3.jpg.pagespeed.ic.2g0ICPmV6O.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_4.jpg.pagespeed.ic.nXVsO01FP9.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_6.jpg.pagespeed.ic.o7nMT9VPXJ.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_8.jpg.pagespeed.ic._zi5TVQkpp.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/above-10000-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/1000-2000-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct-10.jpg.pagespeed.ic.JKjq4oUn3E.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="uk-hidden@s uk-light">
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next
                                uk-slider-item="next"></a>
                        </div>

                        <div class="uk-visible@s">
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next
                                uk-slider-item="next"></a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section id="sec-seller">
            <a href="#" class="d-block uk-box-shadow-medium">
                <div class="row">
                    <h2 class="col-8 col-lg-10 m-auto">Sell To Millions Of Customers On eCommerce</h2>
                    <img class="col-4 col-lg-2" src="{{ asset('images/apple-touch-icon.png') }}" alt="logo" width="100">
                </div>
            </a>
        </section>

        <section class="sec-pro">
            <div class="container uk-box-shadow-small">
                <h3 class="uk-heading-bullet">Top selling items</h3>

                <div uk-slider="sets: true;autoplay-interval: 6000;autoplay: true;pause-on-hover: true;center: true">

                    <div class="uk-position-relative">

                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m">
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/42-50inch-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_1.jpg.pagespeed.ic.jv58llKnOW.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_2.jpg.pagespeed.ic.zYGt4XwKL2.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_3.jpg.pagespeed.ic.2g0ICPmV6O.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_4.jpg.pagespeed.ic.nXVsO01FP9.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_6.jpg.pagespeed.ic.o7nMT9VPXJ.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_8.jpg.pagespeed.ic._zi5TVQkpp.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/above-10000-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/1000-2000-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct-10.jpg.pagespeed.ic.JKjq4oUn3E.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="uk-hidden@s uk-light">
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next
                                uk-slider-item="next"></a>
                        </div>

                        <div class="uk-visible@s">
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next
                                uk-slider-item="next"></a>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <section class="sec-pro">
            <div class="container uk-box-shadow-small">
                <h3 class="uk-heading-bullet">Top selling items</h3>

                <div uk-slider="sets: true;autoplay-interval: 6000;autoplay: true;pause-on-hover: true;center: true">

                    <div class="uk-position-relative">

                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m">
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/42-50inch-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_1.jpg.pagespeed.ic.jv58llKnOW.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_2.jpg.pagespeed.ic.zYGt4XwKL2.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_3.jpg.pagespeed.ic.2g0ICPmV6O.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_4.jpg.pagespeed.ic.nXVsO01FP9.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_6.jpg.pagespeed.ic.o7nMT9VPXJ.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_8.jpg.pagespeed.ic._zi5TVQkpp.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/above-10000-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/1000-2000-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct-10.jpg.pagespeed.ic.JKjq4oUn3E.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="uk-hidden@s uk-light">
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next
                                uk-slider-item="next"></a>
                        </div>

                        <div class="uk-visible@s">
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next
                                uk-slider-item="next"></a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section id="sponsored">
            <div class="container">
                <h3 class="uk-heading-bullet">SPONSORED BY</h3>
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay-interval: 6000;autoplay: true;pause-on-hover: true">

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@s uk-grid">
                        <li>
                            <div class="uk-panel">
                                <img src="{{ asset('images/1.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="{{ asset('images/2.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="{{ asset('images/4.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="{{ asset('images/5.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="{{ asset('images/7.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="{{ asset('images/5.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="{{ asset('images/5.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="{{ asset('images/5.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="{{ asset('images/5.jpg') }}" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="uk-panel">
                                <img src="{{ asset('images/5.jpg') }}" alt="">
                            </div>
                        </li>
                    </ul>
                
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                
                </div>
            </div>
        </section>

        <section class="sec-pro">
            <div class="container uk-box-shadow-small">
                <h3 class="uk-heading-bullet">Top selling items</h3>

                <div uk-slider="sets: true;autoplay-interval: 6000;autoplay: true;pause-on-hover: true;center: true">

                    <div class="uk-position-relative">

                        <div class="uk-slider-container uk-light">
                            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m">
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/42-50inch-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_1.jpg.pagespeed.ic.jv58llKnOW.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_2.jpg.pagespeed.ic.zYGt4XwKL2.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_3.jpg.pagespeed.ic.2g0ICPmV6O.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_4.jpg.pagespeed.ic.nXVsO01FP9.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_6.jpg.pagespeed.ic.o7nMT9VPXJ.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct_8.jpg.pagespeed.ic._zi5TVQkpp.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/above-10000-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/1000-2000-en.jpg') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <div>
                                            <img src="{{ asset('images/xproduct-10.jpg.pagespeed.ic.JKjq4oUn3E.webp') }}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">adipiscing enim eu<br>50 EGP</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="uk-hidden@s uk-light">
                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next
                                uk-slider-item="next"></a>
                        </div>

                        <div class="uk-visible@s">
                            <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous
                                uk-slider-item="previous"></a>
                            <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next
                                uk-slider-item="next"></a>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
