<header class="top-head header-1 skew">
    <div class="container">

        <div class="logo">
            <a href="{{ route('home') }}">
                <img alt="" src="{{ asset('data/logo.png') }}" />
            </a>
        </div>

        <div class="responsive-nav">
            <nav class="top-nav">
                <ul>

                    <li>
                        <a href="{{ route('home') }}">
                            <span>
                                Home
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript::void(0)">
                            <span>
                                About Us
                            </span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('about.index') }}">
                                    <i class="fa fa-bookmark"></i>
                                    Our Company
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('ceo_message') }}">
                                    <i class="fa fa-bookmark"></i>
                                    President's Message
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('team') }}">
                                    <i class="fa fa-bookmark"></i>
                                    Professional Team
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <span>
                                Manpower Services
                            </span>
                        </a>
                        <ul>
                            @foreach ($countries as $country)
                                <li>
                                    <a href="{{ route('job.show', $country->id) }}">
                                        <i class="fa fa-bookmark"></i>
                                        {{ $country->country ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <span>
                                Gallery & Activities
                            </span>
                        </a>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('activities.show', $category->id) }}">
                                        <i class="fa fa-bookmark"></i>
                                        {{ $category->title ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="{{ Route::is('cv.index') ? 'selected' : '' }} {{ Route::is('employer.index') ? 'selected' : '' }}">
                        <a href="#">
                            <span>
                                Application
                            </span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('cv.index') }}">
                                    <i class="fa fa-bookmark"></i>
                                    Submit CV
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('employer.index') }}">
                                    <i class="fa fa-bookmark"></i>
                                    Employer Form
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ Route::is('contact.index') ? 'selected' : '' }}">
                        <a href="{{ route('contact.index') }}">
                            <span>
                                Contact Us
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- top navigation menu end -->
            <div class="f-right">
                <!-- top search start -->
                <div class="top-search">
                    <a href="#"><span class="fa fa-search"></span></a>
                    <div class="search-box">
                        <input type="text" name="t" placeHolder="Type And Hit Enter..." />
                    </div>
                </div>
                <!-- top search end -->

                <!-- cart start -->
                <div class="top-cart">
                    <a href="#"><span class="fa fa-shopping-cart"></span><i
                            class="cart-num main-bg white">3</i></a>
                    <div class="cart-box main-border">
                        <div class="empty hidden">Your shopping cart is empty!</div>
                        <div class="mini-cart">
                            <ul class="mini-cart-list">
                                <li>
                                    <a class="cart-mini-lft" href="product-left-bar.html"><img
                                            src="assets/images/shop/pro-1.jpg" alt=""></a>
                                    <div class="cart-body">
                                        <a href="product-left-bar.html">Ultimate Fashion Wear White</a>
                                        <div class="price">$150</div>
                                    </div>
                                    <a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
                                </li>
                                <li>
                                    <a class="cart-mini-lft" href="product-left-bar.html"><img
                                            src="assets/images/shop/pro-2.jpg" alt=""></a>
                                    <div class="cart-body">
                                        <a href="product-left-bar.html">Fashion Wear White</a>
                                        <div class="price">$50</div>
                                    </div>
                                    <a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
                                </li>
                                <li>
                                    <a class="cart-mini-lft" href="product-left-bar.html"><img
                                            src="assets/images/shop/pro-3.jpg" alt=""></a>
                                    <div class="cart-body">
                                        <a href="product-left-bar.html">Ultimate Fashion</a>
                                        <div class="price">$220</div>
                                    </div>
                                    <a class="remove" href="#"><i class="fa fa-times" title="Remove"></i></a>
                                </li>
                            </ul>
                            <div class="mini-cart-total">
                                <div class="clearfix">
                                    <div class="f-left">Sub-Total:</div>
                                    <div class="f-right">$230.00</div>
                                </div>
                                <div class="clearfix">
                                    <div class="f-left">Tax (-10.00):</div>
                                    <div class="f-right">$12.05</div>
                                </div>
                                <div class="clearfix total">
                                    <div class="f-left"><strong>Total:</strong></div>
                                    <div class="f-right">$200.20</div>
                                </div>
                            </div>
                            <div class="checkout">
                                <a class="btn main-bg" href="cart.html">View Cart</a><a class="btn btn-default"
                                    href="checkout.html">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- cart end -->
            </div>
        </div>
    </div>
</header>
