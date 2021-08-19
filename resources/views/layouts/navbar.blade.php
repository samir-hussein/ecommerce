<header class="uk-box-shadow-small">
    <nav>
        <div class="d-flex justify-content-around align-items-center flex-wrap">
            <div class="order-0 uk-margin-small-bottom align-self-center">
                <a href="/"><img id="logo" src="{{ asset('images/logo.png') }}" width="80" alt="logo"></a>
            </div>

            <div class="order-3 order-lg-1 w-50 align-self-center" id="search">
                <div class="input-group" id="div_searchbar">
                    <input type="text" class="form-control" placeholder="What are you looking for?">
                    <button><a href="" class="uk-icon-link uk-margin-small-left" uk-icon="icon: search; ratio: 2"></a></button>
                </div>
            </div>

            <div class="order-1">
                <button id="user_icon" class="uk-button uk-button-default" type="button"><a href="" class="uk-icon-link uk-margin-small-left" uk-icon="icon: user; ratio: 1.5"></a>Account</button>
                
                <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 500">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="#"><button style="background: #7fad39;color:snow" class="uk-button uk-button-default w-100">SIGN IN</button>
                        </a></li>
                        <li><a href="#"><button class="uk-button uk-button-default w-100">SIGN UP</button>
                        </a></li>
                    </ul>
                </div>
                <a href="" style="color: #7fad39;" class="uk-icon-link uk-margin-small-left" uk-icon="icon: cart; ratio: 1.5"></a><span style="color: #7fad39">Cart</span>
            </div>

            <div class="order-2">
                <button style="color: #7fad39;" class="p-0 border-0 uk-button uk-button-default uk-margin-small-left" type="button" uk-toggle="target: #offcanvas-reveal"><span uk-icon="icon: menu; ratio: 1.5"></span></button>

                <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
                    <div class="uk-offcanvas-bar">

                        <button class="uk-offcanvas-close" type="button" uk-close></button>

                        <h3>All Categories</h3>

                        <div class="dropend">
                            <button class="w-100 d-flex justify-content-between align-items-center dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropend">
                            <button class="w-100 d-flex justify-content-between align-items-center dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropend">
                            <button class="w-100 d-flex justify-content-between align-items-center dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropend">
                            <button class="w-100 d-flex justify-content-between align-items-center dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                        <div class="dropend">
                            <button class="w-100 d-flex justify-content-between align-items-center dropdown-toggle" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">
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
        </div>
    </nav>
</header>