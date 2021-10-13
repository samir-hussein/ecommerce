@extends('layouts.main_noNav_noFooter')

@section('style')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

    </style>
@endsection

@section('content')

    <div class="text-center w-100">

        <main class="form-signin">
            <form>
                <a href="/"><img class="mb-4" src="{{ asset('images/logo.png') }}" alt="logo" width="150"></a>
                <h1 class="h3 mb-3 fw-normal">Create New Account</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Your Name</label>
                </div>

                <div class="form-floating mt-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Re-enter Password">
                    <label for="floatingPassword">Re-enter Password</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label float-start" for="flexRadioDefault1">
                        Seller
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label float-start" for="flexRadioDefault2">
                        Shopper
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                <div class="mt-3">Already have an account?<a href="/sign-in"> Sign in</a></div>
                <p class="mt-5 mb-3 text-muted">&copy; 2021-Now</p>
            </form>
        </main>



    </div>
@endsection
