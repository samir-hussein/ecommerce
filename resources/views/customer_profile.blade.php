@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/customer_profile.css') }}">
@endsection

@section('content')

    <div id="tabs" class="uk-box-shadow-small">
        @include('layouts.customer_profile_tabs')


        <section id="profile" class="mt-3">
            <form action="">
                <div class="mb-3 text-end">
                    <button class="btn btn-success" id="edit">Edit</button>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name : </label>
                    <input class="form-control form-control-lg" type="text" value="name" disabled id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email : </label>
                    <input class="form-control form-control-lg" type="email" value="email" disabled id="email">
                </div>
                <div class="mb-3">
                    <label for="old_pass" class="form-label">Old Password : </label>
                    <input class="form-control form-control-lg" type="password" disabled id="old_pass">
                </div>
                <div class="mb-3">
                    <label for="new_pass" class="form-label">New Password : </label>
                    <input class="form-control form-control-lg" type="password" disabled id="new_pass">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" id="save" disabled>Save</button>
                </div>
            </form>
        </section>
    </div>
@endsection

@section('script')
    <script>
        let url = window.location.href;
        url = url.split("/");
        url = url[url.length - 1];
        $("#" + url).addClass("active");

        $("#edit").click(function() {
            $(".form-control").removeAttr("disabled");
            $("#save").removeAttr("disabled");
            $(this).attr("disabled", '');
        })
    </script>
@endsection
