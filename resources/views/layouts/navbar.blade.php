<header>
    <nav class="uk-box-shadow-small">
        <div id="container" class="d-flex justify-content-around align-items-center flex-wrap">

            <div class="order-0 d-flex">
                <div class="align-self-end" style="margin-right: 8%">
                    <button style="color: #7fad39;" class="p-0 border-0 uk-button uk-button-default uk-margin-small-left"
                        type="button" uk-toggle="target: #offcanvas-reveal"><span
                            uk-icon="icon: menu; ratio: 1.5"></span></button>

                    <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
                        <div class="uk-offcanvas-bar">

                            <button class="uk-offcanvas-close" type="button" uk-close></button>

                            <h3 class="text-center">All Categories</h3>

                            <ul data-role="treeview">
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li data-caption="test2" data-collapsed="true">
                                    <ul>
                                        <li>test</li>
                                        <li data-caption="test3">
                                            <ul>
                                                <li>team</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li data-caption="test2" data-collapsed="true">
                                    <ul>
                                        <li>test</li>
                                        <li data-caption="test3">
                                            <ul>
                                                <li>team</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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

            <div class="order-2 d-flex justify-content-center align-items-center"
                style="border-left: 3px solid #7fad39;padding-left:1%">
                <button id="user_icon"
                    class="uk-button uk-button-default d-flex justify-content-center align-items-center" type="button">
                    <i class="fas fa-user-cog nav-icon"></i>
                </button>

                <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 500">
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-active"><a href="/sign-in"><button style="background: #7fad39;color:snow"
                                    class="uk-button uk-button-default w-100">SIGN IN<span
                                        uk-icon="sign-in"></span></button>
                            </a></li>
                        <li><a href="/sign-up"><button class="uk-button uk-button-default w-100">SIGN UP<span
                                        uk-icon="sign-in"></span></button>
                            </a></li>
                        <li><a href="#"><button class="uk-button uk-button-default w-100">SIGN OUT<span
                                        uk-icon="sign-out"></span></button>
                            </a></li>
                    </ul>
                </div>
                <a href="#" class="nav-icon">
                    <i class="fas fa-shopping-cart icon-color"></i><span class="uk-badge">0</span>
                </a>
                <a href="#" class="nav-icon">
                    <i class="fas fa-heart icon-color"></i><span class="uk-badge">0</span>
                </a>
            </div>
        </div>

        <div class="m-auto" id="catigory-nav-list">
            <ul class="list-inline mb-0 mt-3">
                <li class="list-inline-item text-capitalize small-font"><a href="#" class="text-decoration-none">all</a>
                </li>
                <li class="list-inline-item text-capitalize small-font"><a href="#" class="text-decoration-none">Mobiles
                        &
                        Accessories</a></li>
                <li class="list-inline-item text-capitalize small-font"><a href="#"
                        class="text-decoration-none">Computer &
                        Accessories</a></li>
                <li class="list-inline-item text-capitalize small-font"><a href="#" class="text-decoration-none">TVs</a>
                </li>
                <li class="list-inline-item text-capitalize small-font"><a href="#"
                        class="text-decoration-none">Laptops</a></li>
                <li class="list-inline-item text-capitalize small-font"><a href="#" class="text-decoration-none">Cameras
                        &
                        Accessories</a></li>
                <li class="list-inline-item text-capitalize small-font"><a href="#"
                        class="text-decoration-none">Headphones</a>
                </li>
                <li class="list-inline-item text-capitalize small-font"><a href="#"
                        class="text-decoration-none">Speakers</a></li>
                <li class="list-inline-item text-capitalize small-font"><a href="#"
                        class="text-decoration-none">Wearable
                        Technology</a></li>
                <li class="list-inline-item text-capitalize small-font"><a href="#" class="text-decoration-none">Home
                        Entertainment
                        Systems</a></li>
            </ul>
        </div>
    </nav>
</header>
