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
                    <label class="form-label" id="complete" style="color: red; display: none">* Please Complete Your
                        Info</label>
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
                    <label for="phone" class="form-label">Phone : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="phone">
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="country">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="city">
                </div>
                <div class="mb-3">
                    <label for="address1" class="form-label">Address 1 : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="address1">
                </div>
                <div class="mb-3">
                    <label for="address2" class="form-label">Address 2 : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="address2">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Company (optional) : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="company">
                </div>
                <div class="mb-3">
                    <label for="zip" class="form-label">ZIP : </label>
                    <input class="form-control form-control-lg" type="text" disabled id="zip">
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
            $("#email").attr("disabled", '');
        })

        $.ajax({
            type: "post",
            url: '/api/customer-info',
            success: function(data) {
                $("#name").val(data.name);
                $("#email").val(data.email);
                $("#phone").val(data.phone);
                $("#country").val(data.country);
                $("#city").val(data.city);
                $("#address1").val(data.address_1);
                $("#address2").val(data.address_2);
                $("#company").val(data.company_name);
                $("#zip").val(data.zip);

                for (info in data) {
                    if (info == "company_name") {
                        continue;
                    }
                    if (data[info] == null) {
                        $("#complete").css('display', 'block');
                        break;
                    }
                }
            }
        });
    </script>
@endsection
