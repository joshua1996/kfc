<html>

<head>
    <scirpt src="{{ URL::asset('js/jquery-3.2.1.js') }}"></scirpt>
    <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/common-background-images.css') }}" rel="stylesheet">
</head>

<body>
<div id="main" data-guest="1" data-email="" data-uid="10809424" data-locale="en" data-fbid="1061678997264701"
     data-maps="AIzaSyCpsAzhlFe87KyOdqcPsMhchaUanI135tA"
     class="">
    <div id="nav">
        <button id="nav-toggle" class="navbtn">
            <span></span>
        </button>
        <div id="login-bar">
            <div class="container clearafter">
                <div class="profile-container">
                    <div id="language" class="switch-language">
                        <a href="/" class="active">EN</a>
                        <a href="/bm/">BM</a>
                    </div>
                    <button id="login">Log In</button>
                    <div id="profile-navigation">
                        <a id="username" href="/dashboard">
                            <!---->
                        </a>
                        <div class="navlist">
                            <a href="/dashboard/profile">
                                <img src="https://static.kfc.com.my/images/rewards/icon-profile-on.png?v1.8.62">
                                <img src="https://static.kfc.com.my/images/rewards/icon-profile-off.png?v1.8.62">
                                <span>Profile</span>
                            </a>
                            <a href="/dashboard/order">
                                <img src="https://static.kfc.com.my/images/rewards/icon-history-on.png?v1.8.62">
                                <img src="https://static.kfc.com.my/images/rewards/icon-history-off.png?v1.8.62">
                                <span>Order History</span>
                            </a>
                            <a href="/dashboard/address">
                                <img src="https://static.kfc.com.my/images/rewards/icon-address-on.png?v1.8.62">
                                <img src="https://static.kfc.com.my/images/rewards/icon-address-off.png?v1.8.62">
                                <span>Addresses</span>
                            </a>
                            <a href="/dashboard/rewards">
                                <img src="https://static.kfc.com.my/images/rewards/icon-rewards-on.png?v1.8.62">
                                <img src="https://static.kfc.com.my/images/rewards/icon-rewards-off.png?v1.8.62">
                                <span>Rewards</span>
                                <!---->
                            </a>
                            <form data-tab="profile" method="POST" action="api/user/logout">
                                <input type="hidden" name="redirect" value="/">
                                <button>
                                    <img src="https://static.kfc.com.my/images/rewards/icon-logout-red.png?v1.8.62">
                                    <img src="https://static.kfc.com.my/images/rewards/icon-logout-white.png?v1.8.62">
                                    <span>Log Out</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mainmenu" class="container">
            <a id="nav-logo" href="/"></a>
            <div id="navigation-bar" class="clearafter">
                <a href="/delivery/menu/favourites">Menu</a>
                <a href="/promotions">Promotions</a>
                <a id="nav-find-kfc" href="/find-a-kfc">Locate Us</a>
                <button id="nav-order-now">Order Now</button>
            </div>
            <button id="nav-change-location"></button>
            <button id="nav-cart" data-total="0"></button>
        </div>
    </div>

    <div id="content">
        <div id="hero-banner" data-index="3" data-max="4" class="section transition">
            <div class="banners" style="transform: translateX(-3621px);">
                <div class="banner"><a href="/2kakilagibest#about-us" data-track-label="sliding-banner-kaki2"><img
                                data-src="https://static.kfc.com.my/images/landing/banners/kaki2.jpg?v1.8.62"
                                data-srcmobile="https://static.kfc.com.my/images/landing/banners/kaki2-mobile.jpg?v1.8.62"
                                alt="The KFC Kakis are Back with special combos &amp; exclusive rewards!"
                                src="https://static.kfc.com.my/images/landing/banners/kaki2.jpg?v1.8.62"></a></div>
                <div class="banner"><a href="/delivery" data-track-label="sliding-bannerchewy-cheese"><img
                                data-src="https://static.kfc.com.my/images/landing/banners/chewy-cheese-en.jpg?v1.8.62"
                                data-srcmobile="https://static.kfc.com.my/images/landing/banners/chewy-cheese-en-mobile.jpg?v1.8.62"
                                alt="Cheesy goodness in every bite."
                                src="https://static.kfc.com.my/images/landing/banners/chewy-cheese-en.jpg?v1.8.62"></a>
                </div>
                <div class="banner"><a href="/promotions/bucket-berbaloi"
                                       data-track-label="sliding-banner-bucket-berbaloi"><img
                                data-src="https://static.kfc.com.my/images/landing/banners/bucket-berbaloi-en.jpg?v1.8.62"
                                data-srcmobile="https://static.kfc.com.my/images/landing/banners/bucket-berbaloi-en-mobile.jpg?v1.8.62"
                                alt="The eipc bargain returns! Try it today!"
                                src="https://static.kfc.com.my/images/landing/banners/bucket-berbaloi-en.jpg?v1.8.62"></a>
                </div>
                <div class="banner"><a href="http://breakfast.kfc.com.my"
                                       data-track-label="sliding-banner-breakfast-sambalbowl"><img
                                data-src="https://static.kfc.com.my/images/landing/banners/sambalbowl-en.jpg?v1.8.62"
                                data-srcmobile="https://static.kfc.com.my/images/landing/banners/sambalbowl-en-mobile.jpg?v1.8.62"
                                alt="Sambal Rice Bowl - A Breakfast Made for Malaysians"
                                src="https://static.kfc.com.my/images/landing/banners/sambalbowl-en.jpg?v1.8.62"></a>
                </div>
                <div id="banner-delivery" data-animate="" class="banner"><a href="/delivery"
                                                                            data-track-label="sliding-banner-animate-delivery"><img
                                data-src="https://static.kfc.com.my/images/landing/banners/delivery/individual-bg-en.jpg?v1.8.62"
                                data-srcmobile="https://static.kfc.com.my/images/landing/banners/delivery/individual-bg-mobile-en.jpg?v1.8.62"
                                alt="Can't go out? We'll come to you! Just get KFC Delivery."
                                src="https://static.kfc.com.my/images/landing/banners/delivery/individual-bg-en.jpg?v1.8.62">
                        <div class="content"><img
                                    data-src="https://static.kfc.com.my/images/landing/banners/delivery/burger.png?v1.8.62"
                                    data-srcmobile="https://static.kfc.com.my/images/landing/banners/delivery/burger-mobile.png?v1.8.62"
                                    class="burger"
                                    src="https://static.kfc.com.my/images/landing/banners/delivery/burger.png?v1.8.62"><img
                                    data-src="https://static.kfc.com.my/images/landing/banners/delivery/chicken.png?v1.8.62"
                                    data-srcmobile="https://static.kfc.com.my/images/landing/banners/delivery/chicken-mobile.png?v1.8.62"
                                    class="chicken"
                                    src="https://static.kfc.com.my/images/landing/banners/delivery/chicken.png?v1.8.62">
                        </div>
                    </a></div>
            </div>
            <div class="banner-dots clearafter">
                <button></button>
                <button></button>
                <button></button>
                <button></button>
            </div>
            <div class="slidernav next"></div>
            <div class="slidernav prev"></div>
        </div>
    </div>
</div>
</body>


</html>