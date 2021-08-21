<header>
    <nav class="uk-box-shadow-small">
        <div id="container" class="d-flex justify-content-around align-items-center flex-wrap">

            <div class="order-0 d-flex">
                <div class="align-self-end" style="margin-right: 8%">
                    <button style="color: #7fad39;"
                        class="p-0 border-0 uk-button uk-button-default uk-margin-small-left" type="button"
                        uk-toggle="target: #offcanvas-reveal"><span uk-icon="icon: menu; ratio: 1.5"></span></button>

                    <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
                        <div class="uk-offcanvas-bar">

                            <button class="uk-offcanvas-close" type="button" uk-close></button>

                            <h3>All Categories</h3>

                            <div class="dropend">
                                <button class="w-100 d-flex justify-content-between align-items-center dropdown-toggle"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropend">
                                <button class="w-100 d-flex justify-content-between align-items-center dropdown-toggle"
                                    type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropend">
                                <button class="w-100 d-flex justify-content-between align-items-center dropdown-toggle"
                                    type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropend">
                                <button class="w-100 d-flex justify-content-between align-items-center dropdown-toggle"
                                    type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                            <div class="dropend">
                                <button class="w-100 d-flex justify-content-between align-items-center dropdown-toggle"
                                    type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown button
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="align-self-center">
                    <a href="/"><img id="logo" src="{{ asset('images/logo.png') }}" width="80" alt="logo"></a>
                </div>
            </div>

            <div class="order-3 order-md-1 w-50 align-self-center" id="search">
                <div class="input-group" id="div_searchbar">
                    <input type="text" class="form-control" placeholder="What are you looking for?">
                    <button><a href="" class="uk-icon-link uk-margin-small-left"
                            uk-icon="icon: search; ratio: 2"></a></button>
                </div>
            </div>

            <div class="order-2" style="border-left: 3px solid #7fad39">
                <button id="user_icon" class="uk-button uk-button-default" type="button"><a href=""
                        class="uk-icon-link uk-margin-small-left" uk-icon="icon: user; ratio: 1.5"></a></button>

                <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 500">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="/sign-in"><button style="background: #7fad39;color:snow"
                                    class="uk-button uk-button-default w-100">SIGN IN<span uk-icon="sign-in"></span></button>
                            </a></li>
                        <li><a href="/sign-up"><button class="uk-button uk-button-default w-100">SIGN UP<span uk-icon="sign-in"></span></button>
                            </a></li>
                        <li><a href="#"><button class="uk-button uk-button-default w-100">SIGN OUT<span uk-icon="sign-out"></span></button>
                            </a></li>
                    </ul>
                </div>
                <a href="" style="color: #7fad39;" class="uk-icon-link uk-margin-small-left"
                    uk-icon="icon: cart; ratio: 1.5"></a><span class="uk-badge">0</span>
                <a href="" style="color: #7fad39;" class="uk-icon-link uk-margin-small-left"
                    uk-icon="icon: heart; ratio: 1.5"></a><span class="uk-badge">0</span>
            </div>
        </div>
    </nav>
</header>
