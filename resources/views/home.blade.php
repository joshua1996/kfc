@extends('header')

@section('content')


    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1000px; height: 350px;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1000px; height: 350px;">
            @foreach($banner as $value)
                <div><img u="image" src="{{ URL::asset('img/banner/') }}/{{ $value->bannerImg }}"/></div>
            @endforeach

            </div>
        </div>
    </div>
    <div id="best-sellers" class="section">
        <div class="container">
            <div class="floating-header">
                <div class="heading alternate">
                    <div class="left-line"></div>
                    <h2>Delivery Menu</h2>
                    <div class="right-line"></div>
                </div>
            </div>
            <div class="float-container">
                <div class="card-container clearafter" style="transform: translateX(0px);">
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
                            <div class="meta"><h3>Original Cheezy Combo</h3><h4 style="">RM 19.90</h4>
                                <button data-count="0" class="add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div data-id="73" class="card is-recommended">
                        <div data-cart="Zinger Nuggets Combo" class="card-content">
                            <button class="toggle-info"></button>
                            <div class="info">
                                <ul class="details">
                                    <li>1 Zinger Burger</li>
                                    <li>1 Potato Wedges (R)</li>
                                    <li>6-pc Nuggets</li>
                                    <li>1 Can Drink (Pepsi/7-UP)</li>
                                </ul>
                                <div class="image"><img
                                            src="https://static.kfc.com.my/images/menu/delivery-kakiv2-combo1.png?v1.8.62"
                                            alt="Zinger Nuggets Combo"></div>
                            </div>
                            <div class="meta"><h3>Zinger Nuggets Combo</h3><h4 style="">RM 19.90</h4>
                                <button data-count="0" class="add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div data-id="75" class="card is-recommended">
                        <div data-cart="Spicy Slaw Combo" class="card-content">
                            <button class="toggle-info"></button>
                            <div class="info">
                                <ul class="details">
                                    <li>2-pc Chicken</li>
                                    <li>1 Whipped Potato (R)</li>
                                    <li>1 Coleslaw (R)</li>
                                    <li>1 Coleslaw (L)</li>
                                    <li>1 Can Drink (Pepsi/7-UP)</li>
                                </ul>
                                <div class="image"><img
                                            src="https://static.kfc.com.my/images/menu/delivery-kakiv2-combo3.png?v1.8.62"
                                            alt="Spicy Slaw Combo"></div>
                            </div>
                            <div class="meta"><h3>Spicy Slaw Combo</h3><h4 style="">RM 19.90</h4>
                                <button data-count="0" class="add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
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
                            <div class="meta"><h3>5-pc Chewy Cheese Sour Cream &amp; Onion</h3><h4 style="">RM
                                    6.90</h4>
                                <button data-count="0" class="add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div data-id="17" class="card is-recommended">
                        <div data-cart="Cheezy Wedges (L)" class="card-content">
                            <button class="toggle-info"></button>
                            <div class="info">
                                <ul class="details">
                                    <li>1 Cheezy Wedges (L)</li>
                                </ul>
                                <div class="image"><img
                                            src="https://static.kfc.com.my/images/menu/delivery-cheesy-wedges(L).png?v1.8.62"
                                            alt="Cheezy Wedges (L)"></div>
                            </div>
                            <div class="meta"><h3>Cheezy Wedges (L)</h3><h4 style="">RM 6.20</h4>
                                <button data-count="0" class="add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div data-id="4" class="card is-recommended">
                        <div data-cart="Set D - Zinger Burger Combo" class="card-content">
                            <button class="toggle-info"></button>
                            <div class="info">
                                <ul class="details">
                                    <li>1 Zinger Burger</li>
                                    <li>1 Potato Wedges (R)</li>
                                    <li>1 Can Pepsi/7UP</li>
                                </ul>
                                <div class="image"><img
                                            src="https://static.kfc.com.my/images/menu/delivery_SetD-Zinger-Combo.png?v1.8.62"
                                            alt="Set D - Zinger Burger Combo"></div>
                            </div>
                            <div class="meta"><h3>Set D - Zinger Burger Combo</h3><h4 style="">RM 14.20</h4>
                                <button data-count="0" class="add-cart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="card full-menu-card">
                        <div class="card-content"><a href="/delivery/menu/promotion/"><img
                                        src="https://static.kfc.com.my/images/landing/best-seller/view-our-delivery-menu-en-2.png?v1.8.62"
                                        alt="View Full Delivery Menu"><span>View Full Delivery Menu</span></a></div>
                    </div>
                </div>
                <button class="slidernav prev"></button>
                <button class="slidernav next"></button>
            </div>
        </div>
    </div>

    <div id="highlights" class="section">
        <div class="container">
            <div class="floating-header">
                <div class="heading alternate">
                    <div class="left-line"></div>
                    <h2>Highlights</h2>
                    <div class="right-line"></div>
                </div>
            </div>
            <div class="float-container">
                <div class="banner-container">
                    <div class="large banner"><a href="/promotions/bucket-berbaloi"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/bucket-berbaloi-en.jpg?v1.8.62"
                                    alt="The eipc bargain returns! Try it today!" class="hide-in-mobile"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/mobile/bucket-berbaloi-en.jpg?v1.8.62"
                                    alt="The eipc bargain returns! Try it today!" class="hide-in-desktop"></a></div>
                    <div class="banner middle"><a href="/promotions/value-treats"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/sub-banner-value-treat.jpg?v1.8.62"
                                    alt="Value Treats - Indulge Just A Little" class="hide-in-mobile"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/mobile/mobile-banner-value-treats.jpg?v1.8.62"
                                    alt="Value Treats - Indulge Just A Little" class="hide-in-desktop"></a></div>
                    <div class="banner middle last"><a href="/promotions/super-jimat-box"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/sub-banner-sjb-en.jpg?v1.8.62"
                                    alt="Super Jimat Box - Get More For Less" class="hide-in-mobile"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/mobile/mobile-banner-sjb-en.jpg?v1.8.62"
                                    alt="Super Jimat Box - Get More For Less" class="hide-in-desktop"></a></div>
                    <div class="large banner"><a href="http://breakfast.kfc.com.my/" target="_blank"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/sambalbowl-homepagehighlight-en.jpg?v1.8.62"
                                    alt="Sambal Rice Bowl - A Breakfast Made for Malaysians" class="hide-in-mobile"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/mobile/sambalbowl-promotions-en.jpg?v1.8.62"
                                    alt="Sambal Rice Bowl - A Breakfast Made for Malaysians"
                                    class="hide-in-desktop"></a></div>
                    <div class="banner"><a href="/vouchers"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/sub-banner-voucher-en.jpg?v1.8.62"
                                    alt="Vouchers for Every Moment" class="hide-in-mobile"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/mobile/mobile-banner-voucher-en.jpg?v1.8.62"
                                    alt="Vouchers for Every Moment" class="hide-in-desktop"></a></div>
                    <div class="banner"><a href="/promotions/desserts"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/sub-banner-pudding-en.jpg?v1.8.62"
                                    alt="A Sweet Finish To Your Meal" class="hide-in-mobile"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/mobile/mobile-banner-pudding-en.jpg?v1.8.62"
                                    alt="A Sweet Finish To Your Meal" class="hide-in-desktop"></a></div>
                    <div class="banner"><a href="/event/catering"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/sub-banner-events-en.jpg?v1.8.62"
                                    alt="Celebrate Your Events with Us" class="hide-in-mobile"><img
                                    src="https://static.kfc.com.my/images/landing/highlight/mobile/mobile-banner-events-en.jpg?v1.8.62"
                                    alt="Celebrate Your Events with Us" class="hide-in-desktop"></a></div>
                </div>
            </div>
            <div class="actions"><a href="/promotions">All Promotions</a></div>
        </div>
    </div>

    <div id="locator" class="section">
        <div class="container">
            <div class="heading">
                <div class="left-line"></div>
                <h2>Locate Us</h2>
                <div class="right-line"></div>
            </div>
            <div class="float-container">
                <div class="input-container"><input id="search-input" placeholder="Enter Area" autocomplete="off">
                    <button id="search-btn">Search</button>
                </div>
            </div>
            <a href="/find-a-kfc">Locate a Store Near Me</a></div>
    </div>
@endsection

@section('script')

    <script>

        jQuery(document).ready(function ($) {
            var options = {$AutoPlay: 1};
            var jssor_slider1 = new $JssorSlider$('slider1_container', options);

            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
//responsive code end
        });
    </script>

@endsection