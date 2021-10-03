@extends('layouts.main')

@section('style')
    <style>
        #about-us div {
            background-color: #ffffff;
            width: 90%;
            border-radius: 5px;
        }

        #about-us div video {
            width: 80%;
            height: auto;
            display: block;
            margin: auto;
            margin-bottom: 10%;
        }

        #about-us div p {
            width: 70%;
            text-align: center;
            margin: auto;
            margin-bottom: 2%;
            font-size: 20px;
        }

        #about-us div div {
            margin: auto;
            width: 60%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 2%;
            margin-top: 5%;
        }

        #about-us div div button {
            background-color: #7fad39;
            width: 25%;
        }

        #about-us div div button a {
            color: snow;
            font-weight: 600;
            text-decoration: none;
            white-space: nowrap;
        }

        @media (max-width: 575.98px) {
            #about-us div video {
                width: 95%;
            }

            #about-us div p {
                width: 90%;
            }

            #about-us div div button {
                width: 100%;
                margin-bottom: 2%;
            }
        }

    </style>
@endsection

@section('content')
    <section class="p-2 mt-3" id="about-us">
        <div class="uk-box-shadow-small p-2 m-auto">
            <h2 class="uk-heading-line uk-text-center m-5"><span>Welcome To eCommerce</span></h2>
            <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" playsinline controls
                uk-video="autoplay: inview" class="mt-3"></video>

            <h2 class="uk-heading-line uk-text-center m-5"><span>Our History</span></h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fermentum nisi a purus feugiat consequat.
                Etiam sit amet mi et sapien porttitor feugiat. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Donec sit amet varius odio, non suscipit ipsum. Proin feugiat finibus enim,
                tristique eleifend urna. Fusce non mauris quis ante sagittis suscipit et ac libero. Donec tempor elementum
                ante, sollicitudin gravida dolor convallis a. Nulla bibendum turpis non aliquet congue. Curabitur fermentum
                blandit vulputate. Sed ac ipsum faucibus, aliquet tellus vel, volutpat orci. Aenean tellus urna,
                sollicitudin sed ligula eget, fermentum aliquam enim. Etiam quis tortor arcu. Fusce ut sem et justo aliquam
                sagittis. Aenean a condimentum eros.</p>

            <div>
                <button class="btn"><a href="/">Shop Now</a></button>
                <button class="btn"><a href="/">Sell on eCommerce</a></button>
            </div>
        </div>
    </section>
@endsection
