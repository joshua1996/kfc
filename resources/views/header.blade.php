<html>

<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KFC Delivery. Right to your doorstep. | KFC Malaysia</title>
    <script src="{{ URL::asset('js/jquery-3.2.1.js') }}"></script>
    <script src="{{ URL::asset('js/jssor.slider.min.js') }}"></script>
    <script src="{{ URL::asset('js/home.js') }}"></script>
    <script src="{{ URL::asset('js/handlebars-v4.0.11.js') }}"></script>
    <script src="{{ URL::asset('js/underscore.js') }}"></script>

    <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/common-background-images.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/modal.css') }}" rel="stylesheet">
    @if(Route::current()->getName() == 'home')
        <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">
    @endif

    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
    @section('header') @show
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });
    </script>
</head>

<body>

<div id="app">
    <div id="main" data-guest="{{ Auth::guard()->check() ? '0':'1' }}" data-email="" data-uid="10809424" data-locale="en" data-fbid="1061678997264701"
         data-maps="AIzaSyCpsAzhlFe87KyOdqcPsMhchaUanI135tA"
         class="">
        {{--has-location--}}
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
                                @if(Auth::guard()->check()) {{ Auth::guard()->user()->firstName}} @endif
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
                                <form data-tab="profile" method="POST" action="{{ route('logout') }}">
                                    {{ csrf_field() }}
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
                    p
                </div>
            </div>
            <div id="mainmenu" class="container">
                <a id="nav-logo" href="/"></a>
                <div id="navigation-bar" class="clearafter">
                    <a href="/delivery/menu/favourites">Home</a>
                    <a href="/promotions">Promotions</a>
                    <a id="nav-find-kfc" href="/find-a-kfc">Locate Us</a>
                    <button id="nav-order-now">Order Now</button>
                </div>
                <button id="nav-change-location"></button>
                <button id="nav-cart" data-total="{{ count(session('cartItemID')) - 1 }}"></button>
            </div>
        </div>

        <div id="content">
            @section('content')  @show
        </div>

        <div id="footer" class="footer">
            <div class="footer-buttons">
                <div class="container">
                    <div class="footer-buttons-container">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="social-icons hide-in-mobile"><a
                                                href="https://www.facebook.com/KFCMalaysia"
                                                data-track-label="footer-social-facebook"
                                                target="_blank"><img
                                                    src="https://static.kfc.com.my/images/general/social-logo-fb-web.png?v1.8.62"
                                                    class="icon facebook"></a><a
                                                href="https://www.instagram.com/kfcmalaysia/"
                                                data-track-label="footer-social-instagram" target="_blank"><img
                                                    src="https://static.kfc.com.my/images/general/social-logo-insta-web.png?v1.8.62"
                                                    class="icon instagram"></a><a
                                                href="https://www.youtube.com/user/kfcmalaysia"
                                                data-track-label="footer-social-youtube" target="_blank"><img
                                                    src="https://static.kfc.com.my/images/general/social-logo-youtube-web.png?v1.8.62"
                                                    class="icon youtube"></a><a href="https://twitter.com/KFCmalaysia"
                                                                                data-track-label="footer-social-twitter"
                                                                                target="_blank"><img
                                                    src="https://static.kfc.com.my/images/general/social-logo-twitter-web.png?v1.8.62"
                                                    class="icon twitter"></a></div>
                                </td>
                                <td>
                                    <form class="input-container subscribe-form">
                                        <div class="input subscribe-input"><input
                                                    placeholder="Get latest promotions and news." type="email"></div>
                                        <button id="subscribe-btn" type="submit">Subscribe</button>
                                    </form>
                                    <div class="input-container" style="display: none;"><p>You have subscribed.</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="social-icons hide-in-desktop">
                                        <div><a href="https://www.facebook.com/KFCMalaysia"
                                                data-track-label="footer-social-facebook"><img
                                                        src="https://static.kfc.com.my/images/general/social-logo-fb-web.png?v1.8.62"
                                                        alt="Facebook" class="icon facebook"></a></div>
                                        <div><a href="https://www.instagram.com/kfcmalaysia/"
                                                data-track-label="footer-social-instagram"><img
                                                        src="https://static.kfc.com.my/images/general/social-logo-insta-web.png?v1.8.62"
                                                        alt="Instagram" class="icon instagram"></a></div>
                                        <div><a href="https://www.youtube.com/user/kfcmalaysia"
                                                data-track-label="footer-social-youtube"><img
                                                        src="https://static.kfc.com.my/images/general/social-logo-youtube-web.png?v1.8.62"
                                                        alt="Youtube" class="icon youtube"></a></div>
                                        <div><a href="https://twitter.com/KFCmalaysia"
                                                data-track-label="footer-social-twitter"><img
                                                        src="https://static.kfc.com.my/images/general/social-logo-twitter-web.png?v1.8.62"
                                                        alt="Twitter" class="icon twitter"></a></div>
                                    </div>
                                    <div class="hotline"><p><label>KFC Delivery Hotline</label><br><a
                                                    href="tel:1300-222-888" data-track-label="footer-phone"><span
                                                        class="phone">1300-222-888</span></a></p></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mobile-input">
                <div class="container">
                    <form class="input-container subscribe-form">
                        <div>Get latest promotions and news.</div>
                        <div class="input"><input placeholder="Enter your email address" type="email"></div>
                        <button id="mobile-input-subscribe-btn" type="submit" data-track-label="footer-subscribe">
                            Subscribe
                        </button>
                    </form>
                    <div class="input-container" style="display: none;"><p>You have subscribed.</p></div>
                </div>
            </div>
            <div class="footer-links">
                <div class="container">
                    <div class="footer-list-container">
                        <div class="footer-list"><h4 class="title">KFC Malaysia</h4>
                            <ul>
                                <li><a href="/promotions">Promotions</a></li>
                                <li><a href="/kfc-malaysia">About Us</a></li>
                                <li><a href="/colonel-story">The Colonel's Story</a></li>
                                <li><a href="/quality-assurance">Quality Assurance</a></li>
                                <li><a href="/halal-policy">Halal Policy</a></li>
                                <li><a href="/milestones">Milestones and Achievements</a></li>
                                <li><a href="/csr">CSR</a></li>
                                <li><a href="/csr-addhope">Add Hope</a></li>
                                <li><a href="/nutritional-facts">Nutritional Facts</a></li>
                                <li><a href="/news">News</a></li>
                                <li><a href="/join-us">Join Us</a></li>
                                <li><a href="/support">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="footer-list hide-in-mobile"><h4 class="title">KFC Delivery</h4>
                            <ul>
                                <li><a href="/delivery/menu/promotion">Our Menu</a></li>
                                <li><a href="/delivery/faq">FAQ</a></li>
                                <li><a href="/terms-and-condition">Terms and Conditions</a></li>
                                <li><a href="/2kakilagibest">KFC 2 Kaki Lagi Best</a></li>
                            </ul>
                        </div>
                        <div class="footer-list hide-in-mobile"><h4 class="title">Services</h4>
                            <ul>
                                <li><a href="/vouchers">Gift Vouchers</a></li>
                                <li><a href="/event/catering">Catering</a></li>
                                <li><a href="/chicky-birthday">Chicky Birthday</a></li>
                            </ul>
                        </div>
                        <div class="tagline"><img
                                    src="https://static.kfc.com.my/images/general/footer-colonel-en.png?v1.8.62"
                                    alt="Colonel"></div>
                        <div class="halal-logo"></div>
                    </div>
                    <hr>
                    <div class="copyright-container">
                        <div class="copyright"><p>© Copyright 2017 QSR Stores Sdn. Bhd. (1098054-H)</p></div>
                        <ul class="terms">
                            <li><a>Terms of Use</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-cart" style="display: none;">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="header">My Cart
                    <button class="button-close">Back to Menu</button>
                </div>
                <div class="modal-content empty">
                    <ul id="cart-item-container"
                        style="display: {{ count(session('cartItemID')) > 0 ? 'block': 'none'  }};"><!---->
                        <li class="special-request" style="display: none;">
                            <div class="choice clearafter">
                                <div class="label">Condiments</div>
                                <div class="select"><select>
                                        <option value="0">--</option>
                                        <option value="601">More Chilli Sauce</option>
                                        <option value="603">More Tomato Sauce</option>
                                    </select></div>
                            </div>
                        </li>
                    </ul>
                    <div class="recommendation" style="display: none;"><p>You may also like:</p>
                        <div class="float-container">
                            <div class="card-container">
                                <div data-id="86" class="card is-recommended is-new">
                                    <div data-cart="5-pc Chewy Cheese Sour Cream &amp; Onion" class="card-content">
                                        <button class="toggle-info"></button>
                                        <div class="info">
                                            <ul class="details">
                                                <li>5-pc Chewy Cheese Sour Cream &amp; Onion</li>
                                            </ul>
                                            <div class="image"><img
                                                        src="https://static.kfc.com.my/images/menu/delivery-chewy-cheese-sour-creamball.png?v1.8.62"
                                                        alt="5-pc Chewy Cheese Sour Cream &amp; Onion"></div>
                                        </div>
                                        <div class="meta"><h3>5-pc Chewy Cheese Sour Cream &amp; Onion</h3><h4>RM
                                                6.90</h4>
                                            <button data-count="0" class="add-cart">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div data-id="74" class="card is-recommended">
                                    <div data-cart="Original Cheezy Combo" class="card-content">
                                        <button class="toggle-info"></button>
                                        <div class="info">
                                            <ul class="details">
                                                <li>2-pc Chicken</li>
                                                <li>1 Whipped Potato (R)</li>
                                                <li>1 Coleslaw (R)</li>
                                                <li>1 Cheezy Wedges (L)</li>
                                                <li>1 Can Drink (Pepsi/7-UP)</li>
                                            </ul>
                                            <div class="image"><img
                                                        src="https://static.kfc.com.my/images/menu/delivery-kakiv2-combo2.png?v1.8.62"
                                                        alt="Original Cheezy Combo"></div>
                                        </div>
                                        <div class="meta"><h3>Original Cheezy Combo</h3><h4>RM 19.90</h4>
                                            <button data-count="0" class="add-cart">Add to Cart</button>
                                        </div>
                                    </div>
                                </div><!----></div>
                        </div>
                    </div>

                    <div id="cart-empty-content"
                         style="display: {{ count(session('cartItemID')) ==0 ? 'block': 'none' }}"><img
                                src="https://static.kfc.com.my/images/delivery/icon-empty-cart.png?v1.8.62">
                        <p>Your Cart is Empty.</p>
                        <div class="actions">
                            <button>Order Now</button>
                        </div>
                    </div>


                </div>
                <div id="cart-footer" class="fixed-container" style="display: none;">
                    <div id="cart-rewards" data-show="">
                        <div class="buttons noRewards">
                            <button class="select">Select Reward</button>
                            <button class="vouchercode">Use Voucher Code</button>
                        </div>
                        <div class="sections">
                            <div class="section section-selection" style="display: none;">
                                <div class="reward clearafter"><img
                                            src="https://static.kfc.com.my/images/rewards/icon-giftbox.png?v1.8.62"><span
                                            style="display: none;"></span>
                                    <div class="delete"><img
                                                src="https://static.kfc.com.my/images/delivery/btn-dustbin.png?v1.8.62">
                                    </div>
                                </div>
                            </div>
                            <div class="section section-code clearafter">
                                <div class="input"><input type="text">
                                    <button class="enter"><img
                                                src="https://static.kfc.com.my/images/general/icon-arrow-enter.png?v1.8.62">
                                    </button>
                                </div>
                                <button class="cancel" style="display: none;">Cancel</button>
                                <div class="error-message" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="price" style="">
                        <table>
                            <tbody>
                            <tr style="display: none;">
                                <td>Discount</td>
                                <td>- RM</td>
                            </tr>
                            <tr style="display: none;">
                                <td>Subtotal<span>(Inclusive of 6% GST)</span></td>
                                <td>RM 0.00</td>
                            </tr>
                            <tr style="display: none;">
                                <td>Delivery Charges</td>
                                <td>RM 3.15</td>
                            </tr>
                            <tr style="display: none;">
                                <td>GST</td>
                                <td>RM 0.18</td>
                            </tr>
                            <tr class="subtotal">
                                <td>
                                    <div>Total</div>
                                </td>
                                <td>RM 3.15</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <button class="checkout-button" style=""><span>Checkout</span></button>
                </div>
            </div>
        </div>
    </div>

    <div id="modals ">
        <div id="modal-address" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <form method="POST" action="" class="modal-content"><input type="hidden" name="redirect" value="/">
                    <div class="header"><img src="https://static.kfc.com.my/images/delivery/icon-sign-up.png?v1.8.62">
                        <p>Fill in the Delivery Address</p></div>
                    <div class="field">
                        <div class="input"><label>Unit/Level/Block/Building*</label><textarea
                                    placeholder="Eg. F-13-01 Menara Indah" name="form.unit" maxlength="80"></textarea>
                        </div>
                    </div>
                    <div class="filled-field"><p>, </p>
                        <p></p>
                        <p></p></div>
                    <p class="actions clearafter">
                        <button type="button">Back</button>
                        <button id="button-add-address">Add</button>
                    </p>
                </form>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
        </div>
        <div id="modal-advance-order" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-advance-order.png?v1.8.62">
                            <p class="error-message" style="display: none;">Due to unforeseen circumstances, <br>we are
                                not
                                able to deliver . Try another time instead.</p>
                            <h3>Advance Order</h3></div>
                        <div class="form clearafter">
                            <div class="field"><label>Date</label>
                                <div class="select advance-day"><select><!---->
                                        <option value="2017-11-08">8 Nov 2017 (Wed)</option>
                                        <option value="2017-11-09">9 Nov 2017 (Thurs)</option>
                                    </select></div>
                            </div>
                            <div class="field"><label>Time</label>
                                <div class="select advance-hour"><select>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">1</option>
                                        <option value="14">2</option>
                                        <option value="15">3</option>
                                        <option value="16">4</option>
                                        <option value="17">5</option>
                                        <option value="18">6</option>
                                        <option value="19">7</option>
                                        <option value="20">8</option>
                                    </select></div>
                                <div class="select advance-minute"><select>
                                        <option value="0">00</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>
                                    </select></div>
                                <div class="meridiem">am</div>
                            </div>
                        </div>
                        <button><span>Start Order</span></button>
                    </div>
                </div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
        </div>
        <div id="modal-check-location" data-content="check-location" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper check-location">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-location.png?v1.8.62">
                            <h3>Check Delivery Coverage</h3></div>
                        <div class="search-location">
                            <form class="search-bar">
                                <div class="input"><input type="text" placeholder="Enter your Address" name="street"
                                                          autocomplete="off">
                                    <button>Search</button>
                                </div>
                                <p class="error" style="display: none;"></p></form>
                            <div id="searchlist-loading" style="display: none;"><p>Searching</p></div>
                            <ul id="searchlist-result" style="display: none;"><img
                                        src="https://maps.gstatic.com/mapfiles/api-3/images/powered-by-google-on-white3.png"
                                        class="google-image"></ul>
                            <p class="error" style="display: none;">No address found.</p></div>
                        <div class="seperator">
                            <div class="line"></div>
                            <p>or</p>
                            <div class="line"></div>
                        </div>
                        <button class="currentlocation">Use My Current Location</button>
                        <div class="seperator" style="display: none;">
                            <div class="line"></div>
                            <p>or</p>
                            <div class="line"></div>
                        </div>
                        <button class="anchor-button" style="display: none;">Use My Saved Address</button>
                    </div>
                    <div class="content-wrapper delivery-location" style="display: none;">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-location.png?v1.8.62"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-tracking.png?v1.8.62">
                            <h3>Delivery Location:</h3></div>
                        {{--<div id="user-location-map" data-text="Loading" class="" style="display: none;"></div>--}}

                        <div id="map"></div>
                        <p class="placename"></p>
                        <p style="display: none;">Getting address...</p>
                        <button>Confirm</button>
                        <button class="anchor-button">Change Location</button>
                    </div>
                </div>
                <div class="alert">*Delivery time varies based on stores (between 10.00am - 10.30pm).</div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Detecting location...</p></div>
                </div>
            </div>
        </div>
        <div id="modal-customize-item" class="modal">
            <div class="overlay"></div>
            <form class="modal-content-box">
                <div class="close-nav"><h3>Edit</h3>
                    <button type="button" class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="overflow-container">
                        <div class="content-wrapper">
                            <div class="meal">
                                <div class="image"><img src="https://static.kfc.com.my/images/menu/undefined?v1.8.62">
                                </div>
                                <div class="details"><h6></h6>
                                    <ul></ul>
                                    <h6>RM </h6></div>
                            </div>
                            <div class="customization"><h4>Customize Your Meal</h4>
                                <ul class="customize-section"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="quantity">
                            <button type="button" class="quantityminus">−</button>
                            <p>1</p>
                            <button type="button " class="quantityadd">+</button>
                        </div>
                        <button id="add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </form>
        </div>
        <div id="modal-delivery-address" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-location.png?v1.8.62">
                            <p>Hi , Welcome Back!</p>
                            <h3></h3></div>
                    </div>
                </div>
                <div class="address-list">
                    <table>
                        <tbody></tbody>
                    </table>
                </div>
                <p class="error" style="display: none;">Please select an address for delivery.</p>
                <button>Proceed</button>
                <a>Deliver to Another Address</a>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
        </div>
        <div id="modal-delivery-eta" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-tracked-location.png?v1.8.62">
                            <!----><p>Delivery will take approximately<br><b><span id="delivery-eta"></span> minutes</b>.
                            </p>
                            <p class="warning" style="display: none;">Your delivery location has been updated. Please
                                note
                                that menu prices may vary by location.</p></div>
                        <button>Order Now</button>
                        <div class="seperator">
                            <div class="line"></div>
                            <p>or</p>
                            <div class="line"></div>
                        </div>
                        <button class="button-advance-order">Advance Order</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-delivery-unavailable" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-store-busy.png?v1.8.62"><!---->
                        </div>
                        <p>Your location is within our coverage area for delivery. However, the store is not able to
                            process
                            your order right now due to unforeseen circumstances. We apologize for the inconvenience
                            caused.</p>
                        <div class="line"></div>
                        <button>Order In Advance</button>
                        <div class="seperator"><p>or</p></div>
                        <button data-track-label="delivery-unavailable-use-another-location">Use Another Location
                        </button>
                        <div class="seperator">
                            <div class="line"></div>
                            <p>or</p>
                            <div class="line"></div>
                        </div>
                        <p>Please come back again later or call our KFC Delivery Hotline:</p><a href="tel:1300-222-888"
                                                                                                data-track-label="delivery-unavailable-phone"
                                                                                                class="phone">1300-222-888</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-forgot-password" data-content="forgot-password" class="login-modal modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                    <button class="button-back"></button>
                </div>
                <div class="modal-content">
                    <form method="POST" action="/api/user/forgotPassword" class="content-wrapper forgot-password"><input
                                type="hidden" name="redirect" value="/">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/login/icon-forgot-password.png?v1.8.62">
                            <h3>Forgot Password</h3></div>
                        <p>Enter your email address and we'll send you a link to reset your password.</p>
                        <div class="input"><input type="email" placeholder="Email Address" name="email"></div>
                        <button>Submit</button>
                    </form>
                    <div class="content-wrapper email-sent">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/login/icon-email-sent.png?v1.8.62">
                            <h3>Email Sent</h3></div>
                        <p>We've sent an email to</p>
                        <p id="email-sent"><b></b></p>
                        <p>with a link to reset your password. Please check your spam box if you haven't received
                            it.</p>
                        <button>Okay</button>
                    </div>
                </div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
        </div>
        <div id="modal-login" class="login-modal modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <form method="POST" action="{{ route('login') }}" class="content-wrapper"><input type="hidden"
                                                                                                name="redirect"
                                                                                                value="/">
                        {{ csrf_field() }}
                        <div class="header"><img src="https://static.kfc.com.my/images/delivery/icon-login.png?v1.8.62">
                            <h3>Log In</h3></div>
                        <button id="fblogin" type="button">Log In With Facebook</button>
                        <div class="seperator">
                            <div class="line"></div>
                            <p>or</p>
                            <div class="line"></div>
                        </div>
                        <div class="input"><input type="email" placeholder="Email Address" name="email"></div>
                        <div class="input"><input type="password" placeholder="Password" name="password">
                            <button type="button" class="forgot">Forgot?</button>
                        </div>
                        <button class="loginButton">Submit</button>
                    </form>
                    <div class="signuphere"><p>Don't have an account?</p>
                        <button>Sign Up</button>
                    </div>
                </div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Logging you in...</p></div>
                </div>
            </div>
        </div>
        <div id="modal-member-checkout" class="modal login-modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <form method="POST" action="/api/user/login" class="content-wrapper"><input type="hidden"
                                                                                                name="redirect"
                                                                                                value="/">
                        <div class="header"><img src="https://static.kfc.com.my/images/delivery/icon-login.png?v1.8.62">
                            <h3>Member Checkout</h3></div>
                        <button id="fblogin" type="button">Log In With Facebook</button>
                        <div class="seperator">
                            <div class="line"></div>
                            <p>or</p>
                            <div class="line"></div>
                        </div>
                        <div class="input"><input type="email" placeholder="Email Address" name="email"></div>
                        <div class="input"><input type="password" placeholder="Password" name="password">
                            <button type="button" class="forgot">Forgot?</button>
                        </div>
                        <button>Submit</button>
                    </form>
                    <div class="signuphere"><p>Don't have an account?</p>
                        <button>Sign Up</button>
                        <button class="link">Checkout as Guest</button>
                    </div>
                </div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
        </div>
        <div id="modal-payment-unsuccessful" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-payment-fail.png?v1.8.62">
                            <h3>Payment Unsuccessful</h3></div>
                        <p class="error" style="display: none;"></p>
                        <p style="display: none;">We can’t seem to process your payment. Call us at <a
                                    href="tel:1300-222-888"><span class="phone">1300-222-888</span></a> for further
                            assistance.</p>
                        <p style="display: none;">An error occurred while processing your payment. Please call KFC
                            Delivery
                            Hotline for more details. <br> <a href="tel:1300-222-888"><span
                                        class="phone">1300-222-888</span></a></p>
                        <div><p>An error occurred while processing payment via your credit card. How would you like to
                                proceed with payment?</p>
                            <p style="display: none;">Alternatively, you can choose another method to complete your
                                order.</p>
                            <button>Cash-on-Delivery</button>
                            <button>Try a Different Card</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-payment-error" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-payment-fail.png?v1.8.62">
                            <h3>Oops!<img src="https://static.kfc.com.my/images/delivery/icon-shockemoji.png?v1.8.62">
                            </h3>
                        </div>
                        <p>An error occurred while processing your order and your credit card was charged.</p><br>
                        <p>Please call us at <a href="tel:1300-222-888">1300-222-888</a> and we'll assist you right
                            away.
                        </p></div>
                </div>
            </div>
        </div>
        <div id="modal-register" class="login-modal modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-sign-up.png?v1.8.62">
                            <h3>Sign Up</h3></div>
                        <div class="facebook-section">
                            <button id="fbsignup">Sign Up With Facebook</button>
                            <p>By logging in with Facebook, I have read and agree to the <a href="/terms-and-condition"
                                                                                            target="_blank">terms and
                                    conditions</a>.</p></div>
                        <div class="seperator">
                            <div class="line"></div>
                            <p>or</p>
                            <div class="line"></div>
                        </div>
                        <form method="POST" action="/api/user/register" class="form-section">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="table left">
                                <div class="input"><input type="text" placeholder="First Name" name="firstname"></div>
                                <div class="input"><input type="text" placeholder="Last Name" name="lastname" required></div>
                                <div class="input"><input type="text" placeholder="Phone Number" name="phone" required></div>
                            </div>
                            <div class="table right">
                                <div class="input"><input type="email" placeholder="Email Address" name="email" required></div>
                                <div class="input"><input type="password" maxlength="15"
                                                          placeholder="Password (6 to 15 characters)" name="password" required>
                                </div>
                                <div class="input"><input type="password" maxlength="15" placeholder="Retype Password"
                                                          name="passwordConfirm" required></div>
                            </div>
                            <div class="table left">

                                {{--<div class="g-recaptcha" data-sitekey="6LfY1DsUAAAAABqJX4a7LdwsZhrNoM1F53dmB6Et"></div>--}}
                                {!! Recaptcha::render() !!}
                            </div>
                            <div class="table right">
                                <div class="checkbox-group">
                                    <div class="checkbox"></div>
                                    <p>@if ($errors->has('firstname'))
                                            aa
                                        @endif
                                        I have read and agree to the <a href="/terms-and-condition" target="_blank">terms
                                            and
                                            conditions</a>.</p></div>
                                <div class="checkbox-group">
                                    <div data-checked="true" class="checkbox"></div>
                                    <p>I want to receive KFC offers &amp; updates.</p></div>
                                <button class="signupbutton">Submit</button>

                            </div>
                            <input type="hidden" name="redirect" value="/"></form>
                    </div>
                </div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Registering...</p></div>
                </div>
            </div>
        </div>
        <div id="modal-reset-password" data-content="reset" class="login-modal modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <form method="POST" action="/api/user/resetPassword" class="content-wrapper reset"><input
                                type="hidden"
                                name="redirect"
                                value="/"><input
                                type="hidden" name="resetkey">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/login/icon-reset-password.png?v1.8.62">
                            <h3>Reset Password</h3></div>
                        <div class="input"><input type="password" placeholder="Password (6 to 15 characters)"
                                                  name="password"></div>
                        <div class="input"><input type="password" placeholder="Retype Password" name="password-confirm">
                        </div>
                        <button>Submit</button>
                    </form>
                    <div class="content-wrapper changed">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/login/icon-reset-succesful.png?v1.8.62">
                            <p>You've successfully changed your password.</p></div>
                    </div>
                </div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
        </div>
        <div id="modal-payment-details" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div id="preferred-change"><h5>Prepare change for</h5>
                            <form method="POST" action="/api/cart/payCash">
                                <button>RM 50</button>
                                <button>RM 100</button>
                                <button>No Change Needed</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
        </div>
        <div id="modal-store-closed" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-store-close.png?v1.8.62">
                            <h3>Delivery Unavailable</h3></div>
                        <p>Our delivery service is only available from 10.00am to 10.30pm. We apologise for the
                            inconvenience caused.</p>
                        <button>Okay</button>
                    </div>
                </div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
        </div>
        <div id="modal-tnc" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="heading alternate">
                            <div class="left-line"></div>
                            <h2>Terms &amp; Conditions</h2>
                            <div class="right-line"></div>
                        </div>
                        <div class="tnc-content">
                            <ul>
                                <li>A minimum order of RM 15 and RM 3.15 delivery surcharge apply for all orders.</li>
                                <li>Limited delivery area only.</li>
                                <li>Operation hours: 10.00am to 10.30pm (May vary depending on location).</li>
                                <li>All prices are inclusive of 6% GST.</li>
                                <li>Prices of this menu are applicable for KFC Delivery only and subject to change
                                    without
                                    prior notice.
                                </li>
                                <li>For large orders exceeding RM200, the estimated delivery time is within 2 hours.
                                </li>
                                <li>All products in the promotional bundles and sets are fixed.</li>
                                <li>Meal deal for KFC Delivery and Dine In or Take Away may differ.</li>
                                <li>To ensure rider safety, KFC Delivery may be temporarily unavailable at selected
                                    areas
                                    due to weather conditions or unforeseen circumstances.
                                </li>
                                <li>Visuals shown are for illustration purposes only.</li>
                                <li>Payment can be made by cash. Alternatively we accept payment made with credit card
                                    or
                                    debit card (Visa, MasterCard) issued by banks in Malaysia.
                                </li>
                                <li>Payment by credit card or debit card shall be made at the point of order. Cash
                                    payment
                                    shall be made at the point of arrival of food.
                                </li>
                                <li>There is strictly no refund, change or cancellation once the order has been
                                    confirmed or
                                    payment has been made.
                                </li>
                                <li>In the event of any inconsistency between the English and Malay language version of
                                    the
                                    terms and conditions, the English language version shall prevail.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-success" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="modal-content"><p>Saved.</p></div>
            </div>
        </div>
        <div id="modal-rewards" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav"><h3>Rewards</h3>
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper"></div>
                </div>
            </div>
        </div>
        <div id="modal-redeem-reward" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper"><h5>Redeem Your FREE Cheezy Wedges (L)</h5><img
                                src="https://static.kfc.com.my/images/rewards/img-test-prompt.png?v1.8.62">
                        <p>Enjoy your favourites and this little treat from us.</p>
                        <button>Redeem Now</button>
                        <div class="alert"><p><b>* Valid until 31/07/2017.</b></p>
                            <p>* Terms &amp; Conditions apply</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-kaki-winner">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="character"><img class="aura"
                                                src="https://static.kfc.com.my/images/kaki/home/background-shrink.png?v1.8.62"><img
                                src="https://static.kfc.com.my/images/kaki/winner/pop-up-winner-finger.png?v1.8.62">
                    </div>
                    <div class="details">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/kaki/winner/pop-up-winner-text.png?v1.8.62">
                        </div>
                        <p>Thank you for supporting your KFC Kaki and do <br>continue voting to stand a chance to win
                            the
                            grand prize <br>of RM2,000! Check your email and we will <br>get in touch with you.</p>
                        <p class="small">If you have any enquiries, please contact us at <a href="tel:011-1028 2338">011-1028
                                2338</a> from 10am to 5pm (Monday – Friday, excluding public holidays) or email us at <a
                                    href="mailto:kfckakiunite@qsrbrands.com.my">kfckakiunite@qsrbrands.com.my</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-addhope-faq" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper"><h3>Add Hope FAQ</h3>
                        <ol class="main">
                            <li><p>What is Add Hope?</p>
                                <p><b>Add Hope:</b> Originally launched in 2007 under the banner of ‘World Hunger
                                    Relief’,
                                    <b>Add Hope</b> is KFC’s global Corporate Social Responsibility initiative. <b>Add
                                        Hope</b> aims to highlight and drive action in the movement to end world hunger
                                    by
                                    increasing money raised annually for the United Nations World Food Programme (WFP)
                                    and
                                    other hunger relief agencies around the globe.</p>
                                <p>As a global food service company, the drive to end world hunger is a natural fit for
                                    the
                                    company. KFC cares about the community in which it serves, and to date has activated
                                    more than 1.5 million employees, franchisees and volunteers to aid in hunger relief
                                    efforts in communities worldwide. The effort has raised $600 million for the United
                                    Nations World Food Programme (WFP) and other hunger relief organizations and is
                                    helping
                                    to provide 2.4 billion meals to the WFP and save the lives of millions of people in
                                    remote corners of the world.</p></li>
                            <li><p>What is Add Hope Malaysia?</p>
                                <p><b>It is the local installment of KFC’s</b> global initiative to end world hunger.
                                    The
                                    power and reach of our system of restaurants, employees and vendors enable us to
                                    reach
                                    out to millions of people who visit KFC, to join us in supporting this worthy cause.
                                    To
                                    date KFC Malaysia has raised more than RM21.3 million locally. The funds are
                                    distributed
                                    to the World Food Programme (WFP) as well as locally. Local beneficiaries include
                                    charity homes, NGOs, and underprivileged families across Malaysia.</p>
                                <p><b>Add Hope</b> is an ongoing effort that goes beyond the fund-raising period,
                                    involving
                                    on-going initiatives through the year. KFC Malaysia is committed for the long-term,
                                    recognizing that it takes concerted continued efforts to help fight hunger. To this
                                    end,
                                    the entire organization is involved, from store-level to the management team.
                                    Everyone
                                    is rallied around the belief in the power of many and the power of giving.</p>
                                <p>Every year funds are generated via donation boxes across our outlets nationwide and
                                    through the sale of KFC <b>Add Hope</b> Meals during Ramadan and Hari Raya
                                    Aidilfitri.
                                    Public may also donate via online at <a
                                            href="/csr-addhope">kfc.com.my/csr-addhope</a>
                                </p></li>
                            <li><p>What is the campaign’s goal?</p>
                                <p>Mobilize our employees, customers and their families to alleviate hunger through:</p>
                                <ul>
                                    <li><b>Raising funds</b> in order to provide food resources in hunger stricken areas
                                        both nationally throughout Malaysia and internationally via United Nations’ WFP.
                                        Since 2013 majority of the funds collected are channeled to local beneficiaries.
                                    </li>
                                    <li><b>Education and awareness</b> about hunger and its effects on people and
                                        societies,
                                        especially in communities within Malaysia.
                                    </li>
                                    <li><b>Aiding in the fight against hunger</b> in our society, especially in
                                        communities
                                        within Malaysia.
                                    </li>
                                </ul>
                            </li>
                            <li><p>What is the World Food Programme (WFP)?</p>
                                <p>WFP is the world’s largest humanitarian agency that provides food and resources to
                                    build
                                    self-sustaining communities in the most impoverished corners of the world.</p></li>
                            <li><p>How many years have KFC Malaysia supported this cause?</p>
                                <p>KFC Malaysia has supported this cause since 2007</p></li>
                            <li><p>How will KFC help raise funds in 2017?</p>
                                <p>Funds will be collected from <b>7 June</b> onwards via:</p>
                                <ul>
                                    <li>Donation boxes at cashier counters in KFC outlets nationwide</li>
                                    <li>Special Add Hope Meal promotions at KFC (all meals sold under this promotion are
                                        <b>charged
                                            an extra 50sen</b> which will go to the fund)
                                    </li>
                                    <li>Online donation via delivery orders or direct donation (<a href="/csr-addhope">kfc.com.my/csr-addhope</a>)
                                    </li>
                                </ul>
                            </li>
                            <li><p>How is the money collected locally being distributed to the needy?</p>
                                <p>All donations go directly to Add Hope Malaysia, feeding people who would otherwise be
                                    faced with the possibility of not having anything to eat. Funds donated by customers
                                    will directly support local hunger initiatives via Add Hope Distribution Programme
                                    and
                                    collaboration programmes with NGOs besides supporting the needs of WFP's food relief
                                    programmes in the least developed nations around the world.</p>
                                <p><b>NGO Tie-Ups utilizing 2016 funds:</b></p>
                                <ol>
                                    <li><p>Pertubuhan Tindakan Wanita Islam (PERTIWI)</p>
                                        <p>Help provide food to the homeless and poor through PERTIWI Soup Kitchen with
                                            basic pre-package healthy meals 4 times a week for 7 months.</p></li>
                                    <li><p>Kechara Soup Kitchen Society Malaysia (KSK)</p>
                                        <p>Help provide food to the homeless and poor through Kechara Soup Kitchen with
                                            distributing food every week for approximately 8 months as well as food bank
                                            to
                                            185 families.</p></li>
                                    <li><p>Food Aid Foundation</p>
                                        <p>Food assistance and nutrition program to children, women who are expecting as
                                            well as nursing mothers.</p></li>
                                    <li><p>Yayasan Chow Kit</p>
                                        <p>Pantry program to provide two meals a day for all children and teens from low
                                            income families who attend their three centres will have access to a basic
                                            and
                                            healthy meal.</p></li>
                                    <li><p>Hope Worldwide Malaysia</p>
                                        <p>Help to provide food assistance to several underprivileged communities in the
                                            following 5 states: Sarawak, Sabah, Kedah, Penang &amp; Perak</p></li>
                                    <li><p>Malaysia Red Crescent Community Services - JB</p>
                                        <p>To provide food assistance to the less fortunate during Ramadan via its Bubur
                                            lambuk program in: Johor, Perak, Kedah, Pahang &amp; Kelantan</p>
                                        <p>To provide food assistance to several underprivileged communities in Johor,
                                            Perak, Pahang, Kelantan, Sabah &amp; Sarawak.</p></li>
                                    <li><p>Yayasan Orang Kurang Upaya Kelantan</p>
                                        <p>To provide food assistance (lunch) for 1 school year calendar to school
                                            children
                                            in at least 3 poor areas in Kelantan. (SK Sungai Rual, SK Sungai Long, SK
                                            Bukit
                                            Awang)</p></li>
                                </ol>
                            </li>
                            <li><p>Why is KFC Malaysia working with these NGOs?</p>
                                <p>These are official bodies that have the network and responsibility to ensure the
                                    funds
                                    reach the right people - hungry, homeless, needy as well as the hardcore poor to
                                    provide
                                    much needed relief. Working closely with them ensures it reaches the needy in an
                                    efficient and effective manner.</p></li>
                            <li><p>Where can the public learn more about the Add Hope Campaign?</p>
                                <ul>
                                    <li>Facebook page: AddHopeMalaysia</li>
                                    <li>Instagram account: @addhopemalaysia</li>
                                    <li>Website: <a href="/csr-addhope">kfc.com.my/csr-addhope</a></li>
                                </ul>
                            </li>
                            <li><p>Campaign collection from 2007 – 2015:</p>
                                <ul class="collect">
                                    <li><b>2007:</b> RM731,396.</li>
                                    <li><b>2008:</b> RM1 million.</li>
                                    <li><b>2009:</b> RM1.1 million.</li>
                                    <li><b>2010:</b> RM1.5 million.</li>
                                    <li><b>2011:</b> RM2.1 million</li>
                                    <li><b>2012:</b> RM2.2 million</li>
                                    <li><b>2013:</b> RM2.5 million</li>
                                    <li><b>2014:</b> RM2.6 million</li>
                                    <li><b>2015:</b> RM3.6 million</li>
                                    <li><b>2016:</b> RM4.0 million</li>
                                </ul>
                                <p><b>TOTAL COLLECTION FROM 2007- 2016:</b></p>
                                <ul class="collect">
                                    <li>RM21, 331,396.00</li>
                                </ul>
                            </li>
                            <li><p>How do I donate to this cause?</p>
                                <p>During the month of Ramadan and Hari Raya Aidilfitri, you may donate by purchasing
                                    the
                                    Add Hope meal that is available on the menu, where 50 sen goes to the Add Hope fund.
                                    Otherwise, you may donate via online here or through collection boxes placed at KFC
                                    restaurants nationwide.</p></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-upsell" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <button class="button-close"></button>
                <div class="header">Treat yourself to a little more!</div>
                <div class="float-container">
                    <div class="card-wrapper">
                        <div class="card-container clearafter" style="transform: translateX(0px);"></div>
                    </div><!---->
                    <button class="slidernav next"></button>
                </div>
                <button id="modal-upsell-checkout">Checkout</button>
            </div>
        </div>
        <div id="modal-message" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper"><p>Message</p>
                        <p style="display: none;"></p>
                        <div class="buttons">
                            <button class="ok">Okay</button>
                            <button class="cancel">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-maximum-item" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav"></div>
                <div class="modal-content">
                    <div class="content-wrapper"><p>Maximum items reached.</p>
                        <button>Okay</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-warning" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/delivery/icon-extra-time.png?v1.8.62">
                            <p>Orders above <b>RM 0</b> will arrive in <br> approximately<b> hours.</b></p></div>
                        <button>Okay</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-minimum-order" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper">
                        <div class="header"><p>All delivery orders must be a minimum of RM15, excluding delivery
                                charges.</p></div>
                        <button>Proceed</button>
                    </div>
                </div>
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
        </div>
        <div id="modal-addedtocart" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="modal-content">
                    <div class="header"><img src="https://static.kfc.com.my/images/general/cart-icon.png?v1.8.62"
                                             alt="Added to Cart"></div>
                    <p>Added to Cart</p></div>
            </div>
        </div>
        <div id="modal-loading" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
        </div>
        <div id="modal-confirm-add-cart" class="modal">
            <div class="overlay"></div>
            <div class="modal-content-box">
                <div class="close-nav">
                    <button class="button-close"></button>
                </div>
                <div class="modal-content">
                    <div class="content-wrapper"><!----><p>Item not exist</p>
                        <div class="buttons">
                            <button class="ok">Okay</button><!----></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="popover" style="top: 395.5px; left: 420.5px; opacity: 1; display: none;"><div class="popover-content"><p></p></div></div>


</div>

<style>
    #map .centerMarker {
        position: absolute;
        /*url of the marker*/
        background: url(http://maps.gstatic.com/mapfiles/markers2/marker.png) no-repeat;
        /*center the marker*/
        top: 50%;
        left: 50%;
        z-index: 1;
        /*fix offset when needed*/
        margin-left: -10px;
        margin-top: -34px;
        /*size of the image*/
        height: 34px;
        width: 20px;
        cursor: pointer;
    }
</style>

<script>
    var map, infoWindow, setlocation;
    var headerCartItem = {!! json_encode(session('cartItemID')) !!} ;


    $(document).ready(function () {

        initHeaderCart();

        if (localStorage.getItem('address') !== null)
        {
            $('#main').addClass('has-location');
            $('#modal-customize-item').attr('data-customize', 'true');
        }

        //open order now
        $('#nav-order-now').on('click', function () {
            //check store open
            $('#modal-check-location').addClass('visible');
        });

        //change location
        $('#nav-change-location').on('click', function () {
            $('#modal-check-location').addClass('visible');
            $('.content-wrapper.check-location').css('display', 'none');
            $('.content-wrapper.delivery-location').css('display', 'block');
            $('.modal .modal-content .delivery-location .header h3').text('Drag the map to pin your location.');
            initMap();
        });

        //close order now
        $('.button-close, .overlay').on('click', function () {
            $('#modal-check-location').removeClass('visible');
            $('#modal-member-checkout').removeClass('visible');
            $('#modal-login').removeClass('visible');
            $('.content-wrapper.check-location').css('display', 'block');
            $('.content-wrapper.delivery-location').css('display', 'none');
            $('#modal-delivery-eta').removeClass('visible');
            $('#modal-register').removeClass('visible');
        });

        //use my current location
        $('.currentlocation').on('click', function () {
            $('.content-wrapper.check-location').css('display', 'none');
            $('.content-wrapper.delivery-location').css('display', 'block');
            $('.modal .modal-content .delivery-location .header h3').text('Drag the map to pin your location.');
            initMap();
        });

        //change location
        $('.anchor-button').on('click', function () {
            $('.content-wrapper.check-location').css('display', 'block');
            $('.content-wrapper.delivery-location').css('display', 'none');

        });

        //{"unit":"","building":"","street":"","area":"","city":"","state":"","zip":"","latitude":"","longitude":"","locationGroup":"","storeId":"","samplestreet":"","statecode":"","zonecode":"","corporateid":"","osid":""}
        //confirm location
        $('.modal .modal-content .delivery-location button').on('click', function () {
            var locationjson = {
                unit: setlocation[0].address_components[0].long_name,

            }
            localStorage.setItem('address', JSON.stringify(locationjson));
            $('#modal-check-location').removeClass('visible');
            $('#modal-delivery-eta').addClass('visible');
            $('#main').addClass('has-location');
        });

        //order now
        $('#modal-delivery-eta .modal-content button').on('click', function () {
            $('#modal-delivery-eta').removeClass('visible');
        });


        $('#nav-cart').on('click', function () {
//            $('.modal-content-box').animate({
//                left: 0
//            }, 1000, function(){
//
//            });

            $('#cart-item-container').empty();
            $('#modal-cart').css('display', 'block');

            var x = JSON.parse($('#deliveryfoodjson').html());
            var cartitemJson = x.filter(function (e) {
                return _.indexOf(headerCartItem, e.foodID) > -1;
            });
            var ob = [];
            for (var i = 0; i < headerCartItem.length; ++i)
            {
                ob.push({foodID: headerCartItem[i]});
            }
            if (cartitemJson.length == 0)
            {
                $('#cart-empty-content').css('display', 'block');
                $('#cart-footer').css('display', 'none');
            } else
            {
                $('#cart-empty-content').css('display', 'none');
                $('#cart-footer').css('display', 'block');
            }
            var quantity = _.countBy(ob, 'foodID');
            var wrapper = {objects: cartitemJson, quantity: quantity};
            var compiled = _.template($('#cartItemTpl').html());
            var html = compiled(wrapper);
            $('#cart-item-container').append(html);
            var subtotal = 0;
            $('.cart-item-price').each(function (i, v) {
                subtotal += parseFloat($(this).text().replace('RM', ''));
            });
            $('.subtotal td:last-child').text('RM ' + subtotal.toFixed(2));
        });

        $('.actions').on('click', function () {
            $('#modal-cart').css('display', 'none');
        });

        $(document).on('click', '.cart-discard-button', function () {
            var a = $(this).closest('.cartItemList');
            var data = {
                itemID: $(this).closest('.cartItemList').attr('itemID')
            };
            $.ajax({
                type: 'post',
                url: '{{ route('remove') }}',
                data: data,
                success: function (e) {
                    console.log(data.item);
                    console.log($('.cartItemList[itemid="' + data.itemID + '"]'));
                    if ($(a).find('.cart-item-number span').text() == 1)
                    {
                        $('.cartItemList[itemid="' + data.itemID + '"]').remove();
                        $('.card-container.clearafter').find('.card[data-id="' + data.itemID + '"] .add-cart').attr('data-count', 0);
                        var datatotal = parseInt($('#nav-cart').attr('data-total'));
                        $('#nav-cart').attr('data-total', datatotal - 1);

                    } else
                    {
                        $(a).find('.cart-item-number span').text(parseInt($(a).find('.cart-item-number span').text()) - 1);
                        var datatotal = parseInt($('#nav-cart').attr('data-total'));
                        $('#nav-cart').attr('data-total', datatotal - 1);
                        var datacount = parseInt($('.card-container.clearafter').find('.card[data-id="' + data.itemID + '"] .add-cart').attr('data-count'));
                        $('.card-container.clearafter').find('.card[data-id="' + data.itemID + '"] .add-cart').attr('data-count', datacount - 1);
                    }
                    if ($('#cart-item-container li').length > 0)
                    {
                        $('#cart-empty-content').css('display', 'none');
                    }

                }
            })
        });

        $('.price').on('click', function () {
            if ($('.subtotal').hasClass('expand'))
            {
                $('.price tbody tr:nth-child(2)').css('display', 'none');
                $('.price tbody tr:nth-child(3)').css('display', 'none');
                $('.price tbody tr:nth-child(4)').css('display', 'none');
                $('.subtotal').removeClass('expand');
            } else
            {
                $('.price tbody tr:nth-child(2)').css('display', '');
                $('.price tbody tr:nth-child(3)').css('display', '');
                $('.price tbody tr:nth-child(4)').css('display', '');
                $('.subtotal').addClass('expand');
            }

        });

        $(document).on('click', '#login', function () {
            $('#modal-login').addClass('visible');
        });

        $('.checkout-button').on('click', function () {
            $('#modal-member-checkout').addClass('visible');
        });

        $(document).on('click', '#fblogin', function (e) {
            window.location.href = '{{ route('facebookRedirect') }}'
//            $('#modal-member-checkout').removeClass('visible');
//            $('#modal-upsell').addClass('visible');
//            var x = JSON.parse($('#deliveryfoodjson').html());
//            var wrapper = {objects: x, cartItem: {}};
//            var compiled = _.template($('#tpl').html());
//            var html = compiled(wrapper);
//            $('#modal-upsell .card-container.clearafter').append(html);
        });

        $(document).on('click', '.signuphere button', function () {
            $('#modal-login').removeClass('visible');
            $('#modal-register').addClass('visible');
        });

        $('.loginButton').on('click', function (e) {
             e.preventDefault();
            var data = {
                email: $(this).closest('form').find('.input input').val(),
                password: $(this).closest('form').find('.input:eq(1) input').val()
            }
             $.ajax({
                type: 'post',
                 url: '{{ route('login') }}',
                 data: data,
                 success: function (e) {
                     location.reload();
                 },
                 error: function(data){
                     var errors = data.responseJSON;
                     if (errors != null){
                        $('#popover').css('display', 'block');
                         $('#popover .popover-content p').text('Invalid Email/Password combination.');
                         $('#modal-login .input').addClass('error');
                     }
                    // console.log(errors);
                     //这里理论上可以捕捉错误
                 }
             });
        });


    });

    function initHeaderCart() {
        var x = JSON.parse($('#deliveryfoodjson').html());
        var cartitemJson = x.filter(function (e) {
            return _.indexOf(headerCartItem, e.foodID) > -1;
        });
        console.log(headerCartItem);
        var ob = [];
        for (var i = 0; i < headerCartItem.length; ++i)
        {
            ob.push({foodID: headerCartItem[i]});
        }

        var quantity = _.countBy(ob, 'foodID');
        var wrapper = {objects: cartitemJson, quantity: quantity};
        var compiled = _.template($('#cartItemTpl').html());
        var html = compiled(wrapper);
        $('#cart-item-container').append(html);
    }


    // Note: This example requires that you consent to location sharing when
    // prompted by your browser. If you see the error "The Geolocation service
    // failed.", it means you probably did not give permission for the browser to
    // locate you.

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 15,
            draggable: true
        });


        // Try HTML5 geolocation.
        if (navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var infowindow = new google.maps.InfoWindow;
                var geocoder = new google.maps.Geocoder;
                map.setCenter(pos);

                geocoder.geocode({'location': pos}, function (results, status) {
                    if (status === 'OK')
                    {
                        //  console.log(results);
                        setlocation = results;
                        $('.placename').text(results[0].address_components[0].long_name + ", " + results[0].address_components[1].long_name);
                    } else
                    {
                        window.alert('Geocoder failed due to: ' + status);
                    }
                });

                google.maps.event.addListener(map, "dragend", function () {
                    //  console.log(map.getCenter().toUrlValue());
                    setlocation = map.getCenter().toUrlValue();
                    geocodeLatLng(geocoder, map, infowindow, map.getCenter().toUrlValue());
                });

//                markerAPosition = new google.maps.LatLng(pos),
//                    markerA = new google.maps.Marker({
//                        map: map,
//                        position: markerAPosition
//                    });

//                circle = new google.maps.Circle( {
//                    map           : map,
//                    center        : pos,
//                    radius        : 1000,
//                    strokeColor   : '#FF0099',
//                    strokeOpacity : 1,
//                    strokeWeight  : 2,
//                    fillColor     : '#009ee0',
//                    fillOpacity   : 0.2
//                } )

            }, function () {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else
        {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }

        $('<div/>').addClass('centerMarker').appendTo(map.getDiv())
        //do something onclick
            .click(function () {
                var that = $(this);
                if (!that.data('win'))
                {
                    that.data('win', new google.maps.InfoWindow({content: 'this is the center'}));
                    that.data('win').bindTo('position', map, 'center');
                }
                that.data('win').open(map);
            });


    }

    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function () {
            if (request.readyState == 4)
            {
                request.onreadystatechange = doNothing;
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }


    function geocodeLatLng(geocoder, map, infowindow, input) {
        //var input = document.getElementById('latlng').value;
        var latlngStr = input.split(',', 2);
        var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
        geocoder.geocode({'location': latlng}, function (results, status) {
            if (status === 'OK')
            {
                // console.log(results);
                $('.placename').text(results[0].address_components[0].long_name + ", " + results[0].address_components[1].long_name);
            } else
            {
                window.alert('Geocoder failed due to: ' + status);
            }
        });
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }


</script>

<script id="deliveryfoodjson" type="application/json">
    {!! $df !!}
</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvouiSxPQfhLcRwGvH_9cmFSZIo0OCnHo&callback=initMap">
</script>
<script type="text/template" id="cartItemTpl">
    <% _.each(objects, function(food) { %>

    <li class="cartItemList" itemid="<%= food.foodID %>">
        <button class="cart-discard-button"></button>
        <div class="cart-details-container">
            <div class="cart-item-detail-box">
                <div class="cart-item-image"><img
                            src="{{ url('img/delivery food/food/')  }}/<%= food.foodImg %>"
                            alt="<%= food.name %>"></div>
                <div class="cart-item-details"><h4 class="cart-item-name"><%= food.name %></h4>
                    <ul class="cart-item-description">
                        <li>1 Chizza</li>
                    </ul>
                    <p><span class="cart-item-number">Qty: <span><%= quantity[food.foodID] %></span></span> | <span class="cart-item-price">RM <%= (quantity[food.foodID]*food.price).toFixed(2) %></span></p>
                </div>
                <% if (food.type == 0) { %>
                 <button class="toggle-customize">Customise meal</button>
                <% } %>

            </div>
        </div>
        <div class="cart-customization">
            <div class="choice clearafter">
                <div class="label">Preferred Flavor</div>
                <div class="custom-dropdown single-item"><label>Original</label><select class="single-item">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
                    <div data-checked="1" class="checkbox"></div>
                </div>
                <div class="custom-dropdown single-item"><label>Hot &amp; Spicy</label><select class="">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
                    <div data-checked="0" class="checkbox"></div>
                </div>
            </div>
            <div class="choice clearafter">
                <div class="label">Preferred Drink</div>
                <div class="custom-dropdown single-item"><label><img
                                src="https://static.kfc.com.my/images/delivery/icon-pepsi.png?v1.8.84"
                                alt="Pepsi"></label><select class="single-item">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
                    <div data-checked="1" class="checkbox"></div>
                </div>
                <div class="custom-dropdown single-item"><label><img
                                src="https://static.kfc.com.my/images/delivery/icon-7up.png?v1.8.84"
                                alt="7up"></label><select class="">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
                    <div data-checked="0" class="checkbox"></div>
                </div>
            </div>
        </div>
    </li>

    <% }); %>

</script>
@section('script')
@show

</body>


</html>