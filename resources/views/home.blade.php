@extends('layouts.main')

@section('content')
    <main>
        <section class="row" id="sec-1">
            <div class="col-12 col-xl-10">
                <div uk-slideshow="animation: push">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3">
                
                        <ul class="uk-slideshow-items">
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
                
                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                
                    </div>
                
                    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
                
                </div>
            </div>

            <div class="col-12 col-xl-2">
                <div class="row h-100">
                    <div class="col-12">
                        <a href="#"><img class="h-75 w-100" src="{{ asset('images/218x184_EN.jpg') }}" alt=""></a>
                    </div>
                    <div class="col-12">
                        <a href="#"><img class="h-75 w-100" src="{{ asset('images/5231147063618082677.png') }}" alt=""></a>
                    </div>
                    <div class="col-12">
                        <a href="#"><img class="h-75 w-100" src="{{ asset('images/218x184_EN (1).jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection