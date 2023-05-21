<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shoping Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('/images/icons/favicon.png') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <header class="header-v4">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        Gratis ongkir dengan minimum pembelanjaan Rp 500.000
                    </div>

                    <div class="right-top-bar flex-w h-full">
						<a href="{{ url('account-profile') }}" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>
						<a href="{{ url('index') }}" class="flex-c-m trans-04 p-lr-25">
							Log In
						</a>
					</div>
                </div>
            </div>

            <div class="wrap-menu-desktop how-shadow1">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="{{ url('home') }}" class="logo">
                        <img src="{{ asset('/images/icons/logo-01.png') }}" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="{{ url('home') }}">Home</a>
                            </li>

                            <li>
                                <a href="{{ url('product') }}">Shop</a>
                            </li>

                            <li class="active-menu">
                                <a href="{{ url('shoping-cart') }}">Cart</a>
                            </li>

                            <li>
                                <a href="{{ url('about') }}">About</a>
                            </li>

                            <li>
                                <a href="{{ url('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                            data-notify="2">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>

                        <div class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-wishlist"
                            data-notify="0" id="wishlist-btn">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="{{ url('index') }}"><img src="{{ asset('/images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                    data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-wishlist"
                    data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </div>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Gratis ongkir dengan minimum pembelanjaan Rp 500.000
                    </div>
                </li>

                <li>
                    <div class="right-top-bar flex-w h-full">
						<a href="{{ url('account-profile') }}" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>
						<a href="{{ url('index') }}" class="flex-c-m trans-04 p-lr-25">
							Log In
						</a>
					</div>
                </li>
            </ul>
            <ul class="main-menu-m">
                <li>
                    <a href="{{ url('index') }}">Home</a>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="{{ url('product') }}">Shop</a>
                </li>

                <li>
                    <a href="{{ url('shoping-cart') }}" class="label1 rs1" data-label1="hot">Features</a>
                </li>

                <li>
                    <a href="{{ url('blog') }}">Blog</a>
                </li>

                <li>
                    <a href="{{ url('about') }}">About</a>
                </li>

                <li>
                    <a href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="{{ asset('/images/icons/icon-close2.png') }}" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="{{ asset('/images/item-cart-01.jpg') }}" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="{{ url('#') }}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                White Shirt Pleat
                            </a>

                            <span class="header-cart-item-info">
                                1 x $19.00
                            </span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="{{ asset('/images/item-cart-02.jpg') }}" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="{{ url('#') }}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Converse All Star
                            </a>

                            <span class="header-cart-item-info">
                                1 x $39.00
                            </span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="{{ asset('/images/item-cart-03.jpg') }}" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="{{ url('#') }}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Nixon Porter Leather
                            </a>

                            <span class="header-cart-item-info">
                                1 x $17.00
                            </span>
                        </div>
                    </li>
                </ul>

                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: $75.00
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="{{ url('shoping-cart') }}"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Cart
                        </a>

                        <a href="{{ url('shoping-cart') }}"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Check Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- Wishlist Sidebar-->
    <div class="wrap-header-wishlist js-panel-wishlist">
        <div class="s-full js-hide-wishlist"></div>

        <div class="header-wishlist flex-col-l p-l-65 p-r-25">
            <div class="header-wishlist-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Wishlist
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-wishlist">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>
            <div class="header-wishlist-content flex-w js-pscroll">
                <ul class="header-wishlist-wrapitem w-full">
                    <li class="header-wishlist-item flex-w flex-t m-b-12">
                        <div class="header-wishlist-item-img">
                            <img src="{{ asset('/images/item-cart-01.jpg') }}" alt="IMG">
                        </div>

                        <div class="header-wishlist-item-txt p-t-8">
                            <a href="{{ url('#') }}" class="header-wishlist-item-name m-b-18 hov-cl1 trans-04">
                                White Shirt Pleat
                            </a>
                            <div class="header-wishlist-item-details">
                                <span class="header-wishlist-item-info">
                                    Rp 190.000
                                </span>

                                <button class="add-to-cart-btn" data-product-name="White Shirt Pleat"
                                    data-product-price="19.00">Add to Cart</button>
                            </div>
                        </div>
                    </li>

                    <li class="header-wishlist-item flex-w flex-t m-b-12">
                        <div class="header-wishlist-item-img">
                            <img src="{{ asset('/images/item-cart-02.jpg') }}" alt="IMG">
                        </div>

                        <div class="header-wishlist-item-txt p-t-8">
                            <a href="{{ url('#') }}" class="header-wishlist-item-name m-b-18 hov-cl1 trans-04">
                                Converse All Star
                            </a>
                            <div class="header-wishlist-item-details">
                                <span class="header-wishlist-item-info">
                                    Rp 390.000
                                </span>

                                <button class="add-to-cart-btn" data-product-name="Converse All Star"
                                    data-product-price="39.00">Add to Cart</button>
                            </div>
                        </div>
                    </li>

                    <li class="header-wishlist-item flex-w flex-t m-b-12">
                        <div class="header-wishlist-item-img">
                            <img src="{{ asset('/images/item-cart-03.jpg') }}" alt="IMG">
                        </div>

                        <div class="header-wishlist-item-txt p-t-8">
                            <a href="{{ url('#') }}" class="header-wishlist-item-name m-b-18 hov-cl1 trans-04">
                                Nixon Porter Leather
                            </a>
                            <div class="header-wishlist-item-details">
                                <span class="header-wishlist-item-info">
                                    Rp 170.000
                                </span>

                                <button class="add-to-cart-btn" data-product-name="Nixon Porter Leather"
                                    data-product-price="17.00">Add to Cart</button>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="w-full">
                    <div class="header-wish-total w-full p-tb-40">
                        5 Other Products in Wishlist
                    </div>

                    <div class="header-wish-buttons flex-w w-full">
                        <a href="{{ url('wishlist') }}"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Wishlist
                        </a>

                        <!-- <a href="{{ url('wishlist') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
								Check Out
							</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{ url('home') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
            <a href="{{ url('shoping-cart') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
            <span class="stext-109 cl4">
                Check Out
            </span>
        </div>
    </div>

    <!-- payment -->
    <form action="home"> <!--action belum diganti handler -->
        <div>
            <div class='container1'>
                <div class='window1'>
                    <div class='order-info'>
                        <div class='order-info-content'>
                            <h2>Order Summary</h2>
                            <div class='line'></div>
                            <table class='order-table'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class='full-width' src="{{ asset('/images/item-cart-04.jpg') }}" alt="IMG"></img>
                                        </td>
                                        <td>
                                            <br> <span class="thin">Fresh Strawberries</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='price'>Rp 360.000</div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                            <div class='line'></div>
                            <table class='order-table'>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class='full-width' src='images/item-cart-05.jpg'></img>
                                        </td>
                                        <td>
                                            <br> <span class='thin'>Lightweight Jacket</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class='price'>Rp 160.000</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class='line'></div>
                            <div class='total'>
                                <span style='float:left;'>
                                    <div class='thin dense'>VAT 19%</div>
                                    <div class='thin dense'>Delivery</div>
                                    TOTAL
                                </span>
                                <span style='float:right; text-align:right;'>
                                    <div class='thin dense'>Rp 520.000</div>
                                    <div class='thin dense'>Rp 0</div>
                                    Rp 520.000
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='credit-info'>
                        <div class='credit-info-content'>
                            <table class='half-input-table'>
                                <tr>
                                    <td>Please select your card: </td>
                                    <td>
                                        <div class='dropdown' id='card-dropdown'>
                                            <div class='dropdown-btn' id='current-card'>Visa</div>
                                            <div class='dropdown-select'>
                                                <ul>
                                                    <li>Master Card</li>
                                                    <li>American Express</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png'
                                height='80' class='credit-card-image' id='credit-card-image'></img>
                            Card Number
                            <input class='input-field'></input>
                            Card Holder
                            <input class='input-field'></input>
                            <table class='half-input-table'>
                                <tr>
                                    <td> Expires
                                        <input class='input-field'></input>
                                    </td>
                                    <td>CVC
                                        <input class='input-field'></input>
                                    </td>
                                </tr>
                            </table>
                            <button class='pay-btn' type="submit" data-bs-toggle="modal"
                                data-bs-target="#COModal">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <!-- <div class="modal fade" id="COModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thank You</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Your order will be processed as soon as possible
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="pay-btn">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form> -->


        <!-- end payment -->




        <!-- Footer -->
        <footer class="bg3 p-t-75 p-b-32">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Categories
                        </h4>

                        <ul>
                            <li class="p-b-10">
                                <a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
                                    Women
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
                                    Men
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
                                    Clothes
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
                                    Shoes
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
                                    Bag
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
                                    Accesories
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
                                    Sportswear
                                </a>
                            </li>

                            <li class="p-b-10">
                                <a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
                                    Sleepwear
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- <div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
								Returns
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="{{ url('#') }}" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div> -->

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            GET IN TOUCH
                        </h4>

                        <p class="stext-107 cl7 size-201">
                            Any questions? Let us know in store at CitraLand CBD Boulevard, Made, Kec. Sambikerep,
                            Surabaya, Jawa Timur or call us on (+62) 813-1234-5678
                        </p>

                        <div class="p-t-27">
                            <a href="{{ url('#') }}" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="{{ url('#') }}" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="{{ url('#') }}" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3 p-b-50">
                        <h4 class="stext-301 cl0 p-b-30">
                            Newsletter
                        </h4>

                        <form>
                            <div class="wrap-input1 w-full p-b-4">
                                <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                                    placeholder="email@example.com">
                                <div class="focus-input1 trans-04"></div>
                            </div>

                            <div class="p-t-18">
                                <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="p-t-40">
                    <div class="flex-c-m flex-w p-b-18">

                        <a href="{{ url('#') }}" class="m-all-1">
                            <img src="{{ asset('/images/icons/icon-pay-02.png') }}" alt="ICON-PAY">
                        </a>

                        <a href="{{ url('#') }}" class="m-all-1">
                            <img src="{{ asset('/images/icons/icon-pay-03.png') }}" alt="ICON-PAY">
                        </a>
                    </div>

                    <p class="stext-107 cl6 txt-center">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | Made by
                        MonoMode</a>

                    </p>
                </div>
            </div>
        </footer>


        <!-- Back to top -->
        <div class="btn-back-to-top" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="zmdi zmdi-chevron-up"></i>
            </span>
        </div>

        <!--===============================================================================================-->
        <script src="{{ asset('/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('/vendor/animsition/js/animsition.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('/vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('/vendor/select2/select2.min.js') }}"></script>
        <script>
            $(".js-select2").each(function () {
                $(this).select2({
                    minimumResultsForSearch: 20,
                    dropdownParent: $(this).next('.dropDownSelect2')
                });
            })
        </script>
        <!--===============================================================================================-->
        <script src="{{ asset('/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script>
            $('.js-pscroll').each(function () {
                $(this).css('position', 'relative');
                $(this).css('overflow', 'hidden');
                var ps = new PerfectScrollbar(this, {
                    wheelSpeed: 1,
                    scrollingThreshold: 1000,
                    wheelPropagation: false,
                });

                $(window).on('resize', function () {
                    ps.update();
                })
            });
        </script>
        <!--===============================================================================================-->
        <script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>