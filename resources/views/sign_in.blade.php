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
            <form action="/api/login" method="POST" id="login-form">
                @csrf
                <a href="/"><img class="mb-4" src="{{ asset('images/logo.png') }}" alt="logo" width="150"></a>
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                <div class="alert alert-danger" role="alert" style="display: none">
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="guard" id="guard1" value="seller">
                    <label class="form-check-label float-start" for="guard1">
                        Seller
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="guard" id="guard2" value="customer">
                    <label class="form-check-label float-start" for="guard2">
                        Shopper
                    </label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <a href="/sign-up" class="d-block mt-3"><button class="w-100 btn btn-md" type="button"
                        style="background: #7fad39;color:snow">Create New Account</button></a>
                <p class="mt-5 mb-3 text-muted">&copy; 2021-Now</p>
            </form>
        </main>



    </div>
@endsection

@section('script')
    <script>
        // $("#login-form").on('submit', function(e) {
        //     e.preventDefault();
        //     var form = $(this);
        //     var url = form.attr('action');

        //     $.ajax({
        //         type: "POST",
        //         url: url,
        //         data: form.serialize(), // serializes the form's elements.
        //         success: function(data) {
        //             if (data.message != "success") {
        //                 $(".alert").text(data.message);
        //                 $(".alert").css('display', 'block');
        //             } else {
        //                 window.history.back();
        //             }
        //         }
        //     });
        // })
    </script>
@endsection
