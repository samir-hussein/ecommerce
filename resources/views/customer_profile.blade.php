@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/customer_profile.css') }}">
@endsection

@section('content')

    <div id="tabs" class="uk-box-shadow-small">
        @include('layouts.customer_profile_tabs')


        <section id="profile" class="mt-3">
            <form action="" id="edit-customer-profile">
                <div class="mb-3 text-end">
                    <button class="btn btn-success" id="edit">Edit</button>
                </div>
                <div class="mb-3">
                    <label class="form-label" id="complete" style="color: red; display: none">* Please Complete Your
                        Info</label>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email : </label>
                    <input class="form-control form-control-lg" type="email" disabled id="email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="country" name="country">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="city" name="city">
                </div>
                <div class="mb-3">
                    <label for="address1" class="form-label">Address 1 : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="address1" name="address_1">
                </div>
                <div class="mb-3">
                    <label for="address2" class="form-label">Address 2 : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="address2" name="address_2">
                </div>
                <div class="mb-3">
                    <label for="zip" class="form-label">ZIP : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="zip" name="zip">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" id="save" disabled>Save</button>
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
        url = url.replace("#", "");
        $("#" + url).addClass("active");

        $("#edit").click(function() {
            $(".form-control").removeAttr("disabled");
            $("#save").removeAttr("disabled");
            $(this).attr("disabled", '');
            $("#email").attr("disabled", '');
        })

        function getInfo() {
            $.ajax({
                type: "get",
                url: '/api/customer/info',
                success: function(data) {
                    $("#name").val(data.name);
                    $("#email").val(data.email);
                    $("#phone").val(data.phone);
                    $("#country").val(data.country);
                    $("#city").val(data.city);
                    $("#address1").val(data.address_1);
                    $("#address2").val(data.address_2);
                    $("#zip").val(data.zip);

                    for (info in data) {
                        if (data[info] == null) {
                            $("#complete").css('display', 'block');
                            break;
                        } else {
                            $("#complete").css('display', 'none');
                        }
                    }
                }
            });
        }
        getInfo();

        $("#edit-customer-profile").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: '/api/customer/edit',
                data: {
                    name: $("#name").val(),
                    phone: $("#phone").val(),
                    country: $("#country").val(),
                    city: $("#city").val(),
                    address_1: $("#address1").val(),
                    address_2: $("#address2").val(),
                    zip: $("#zip").val(),
                },
                success: function(data) {
                    getInfo();
                    $(".form-control").attr("disabled", "");
                    $("#edit").removeAttr("disabled");
                    $("#save").attr("disabled", '');
                }
            });
        });
    </script>
@endsection
