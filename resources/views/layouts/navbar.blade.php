<header class="uk-box-shadow-small">
    <nav>
        <div class="d-flex justify-content-around align-items-center flex-wrap">
            <div class="order-0 uk-margin-small-bottom">
                <a href="/"><img id="logo" src="{{ asset('images/logo.png') }}" width="80" alt="logo"></a>
            </div>

            <div class="order-3 order-lg-1 w-50" id="search">
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="button-addon2">
                    <button style="background: #7fad39;color:snow" class="btn" type="button" id="button-addon2">SEARCH</button>
                </div>
            </div>

            <div class="order-1">
                <button style="background: #7fad39;color:snow" class="uk-button uk-button-default" type="button">Account</button>
                <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 500">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="#"><button style="background: #7fad39;color:snow" class="uk-button uk-button-default w-100">SIGN IN</button>
                        </a></li>
                        <li><a href="#"><button class="uk-button uk-button-default w-100">SIGN UP</button>
                        </a></li>
                    </ul>
                </div>
                <a href="" class="uk-icon-link uk-margin-small-left" uk-icon="icon: cart; ratio: 2"></a>
            </div>

            <div class="order-2">
                <button class="p-0 border-0 uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-reveal"><span uk-icon="icon: menu; ratio: 2"></span></button>

                <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
                    <div class="uk-offcanvas-bar">

                        <button class="uk-offcanvas-close" type="button" uk-close></button>

                        <h3>Title</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>