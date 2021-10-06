@extends('layouts.main')

@section('style')
    <style>
        div.report {
            width: 90%;
            margin: auto;
            background-color: #ffffff;
            border-radius: 5px;
            margin-top: 5%;
            margin-bottom: 3%;
            padding: 2%;
        }

        .uk-heading-bullet::before {
            border-color: #7fad39;
        }

        @media (max-width: 575.98px) {
            .collect-info {
                width: 95% !important;
            }
        }

    </style>
@endsection

@section('content')
    <section>
        <div class="uk-box-shadow-small report">
            <p class="uk-heading-bullet fs-5">we aim to provide our sellers and our customers with a safe and trusted
                e-commerce
                platform.
            </p>

            <p class="uk-heading-bullet fs-5">Our dedicated team proactively review product listings, taking down counterfeit
                and
                other infringing
                products.</p>

            <p class="uk-heading-bullet fs-5">Please provide the information requested below, to enable us to address your
                report.
            </p>

            <div class="w-75 collect-info">
                <form action="">
                    <div class="mb-5">
                        <label class="uk-heading-bullet mb-2">Requester Type</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Individual
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Organization or Company
                            </label>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="uk-heading-bullet">Company or Organization's Name</label>
                        <p class="m-0 mb-2">If your report is on behalf of a company or organisation, please include
                            it's
                            full name</p>
                        <input class="form-control" type="text">
                    </div>

                    <div class="mb-5">
                        <label class="uk-heading-bullet mb-2">Reason for Reporting</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Product appears to be replica or counterfeit
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Product description contains inappropriate content
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Product description appears to be wrong or misleading information
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Product may be prohibited or banned by law
                            </label>
                        </div>

                        <label for="exampleFormControlTextarea1" class="form-label">any other reason</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="uk-heading-bullet">Product Link</label>
                        <p class="m-0 mb-2">Add the product link of Jumia website which you would like to report</p>
                        <input class="form-control" type="text">
                    </div>

                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </form>
            </div>
        </div>
    </section>
@endsection
