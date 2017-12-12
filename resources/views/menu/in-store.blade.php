@extends('header')

@section('header')
    <link href="{{ URL::asset('css/in-store.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="in-store" class="section">
        <div class="menu-type">
            <div class="float-container">
                <ul>
                    <li><a href="{{ route('menuFavourites') }}" class="active">Delivery Menu</a></li>
                    <li><a href="/menu/in-store">In-store Menu</a></li>
                </ul>
            </div>
        </div>
        <div id="hero-banner">
            <video autoplay="autoplay" loop="loop">
                <source src="{{ URL::asset('video/banner/mainbanner-en.mp4') }}" type="video/mp4"
                        alt="Enjoy the Goodness - Share the Happiness">
            </video>
            <img src="https://static.kfc.com.my/images/menu-in-store/mainbanner-mobile-en.png?v1.8.65"
                 alt="Enjoy the Goodness - Share the Happiness"></div>
        <div class="container food2">
            <div class="heading alternate">
                <div class="left-line"></div>
                <h2>Our Signature Flavors</h2>
                <div class="right-line"></div>
            </div>
            <div class="float-container first">
                <div class="food-container" style="transform: translateX(0px);">
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/original.png?v1.8.65"><label>Original
                                Recipe</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/hot-spicy.png?v1.8.65"><label>Hot
                                &amp; Spicy</label></div>
                    </div>
                </div>
                <button class="slidernav prev"></button>
                <button class="slidernav next"></button>
            </div>
        </div>
        <div class="container more more3">
            <div class="heading alternate">
                <div class="left-line"></div>
                <h2>Breakfast</h2>
                <div class="right-line"></div>
            </div>
            <div data-itemperpage="3" class="float-container first">
                <div class="food-container" style="transform: translateX(0px);">
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/porridge.png?v1.8.65"><label>Zinger
                                Porridge</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/classic-rice.png?v1.8.65"><label>Classic
                                Rice</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/2-pc-classic-rice.png?v1.8.65"><label>2pc
                                Classic Rice</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/am-riser.png?v1.8.65"><label>Egg
                                Riser</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/zinger-riser.png?v1.8.65"><label>Zinger
                                Riser</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/twister-lite.png?v1.8.65"><label>Twister
                                Lite</label></div>
                    </div>
                </div>
                <button class="slidernav prev"></button>
                <button class="slidernav next"></button>
            </div>
        </div>
        <div class="container food3">
            <div class="heading alternate">
                <div class="left-line"></div>
                <h2>All-time Favourites</h2>
                <div class="right-line"></div>
            </div>
            <div class="float-container first">
                <div class="food-container" style="transform: translateX(0px);">
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/dinner-plate.png?v1.8.65"><label>Dinner
                                Plate</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/snack-plate.png?v1.8.65"><label>Snack
                                Plate</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/family-feast.png?v1.8.65"><label>Family
                                Feast</label></div>
                    </div>
                </div>
                <button class="slidernav prev"></button>
                <button class="slidernav next"></button>
            </div>
        </div>
        <div class="container food3">
            <div class="heading alternate">
                <div class="left-line"></div>
                <h2>Burgers &amp; Wraps</h2>
                <div class="right-line"></div>
            </div>
            <div class="float-container first">
                <div class="food-container" style="transform: translateX(0px);">
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/colonel-burger.png?v1.8.65"><label>Colonel
                                Burger</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/zinger-burger.png?v1.8.65"><label>Zinger
                                Burger</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/wrap-cheezy.jpg?v1.8.65"><label>Cheezy
                                Twister</label></div>
                    </div>
                </div>
                <button class="slidernav prev"></button>
                <button class="slidernav next"></button>
            </div>
        </div>
        <div class="container food6">
            <div class="heading alternate">
                <div class="left-line"></div>
                <h2>Add-Ons</h2>
                <div class="right-line"></div>
            </div>
            <div class="float-container first">
                <div class="food-container" style="transform: translateX(0px);">
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/colonel-rice.png?v1.8.65"><label>Colonel
                                Chicken Rice</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/coleslaw.png?v1.8.65"><label>Coleslaw</label>
                        </div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/whipped-potato.png?v1.8.65"><label>Whipped
                                Potato</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/cheesy-wedges.png?v1.8.65"><label>Cheezy
                                Wedges</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/wedges.png?v1.8.65"><label>Wedges</label>
                        </div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img src="https://static.kfc.com.my/images/menu-in-store/nuggets.png?v1.8.65"><label>Nuggets</label>
                        </div>
                    </div>
                </div>
                <button class="slidernav prev"></button>
                <button class="slidernav next"></button>
            </div>
        </div>
        <div class="container more more6">
            <div class="heading alternate">
                <div class="left-line"></div>
                <h2>Desserts &amp; Beverages</h2>
                <div class="right-line"></div>
            </div>
            <div data-itemperpage="6" class="float-container first">
                <div class="food-container" style="transform: translateX(0px);">
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/pudding-gulamelaka.jpg?v1.8.65"><label>Gula
                                Melaka Pudding</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/pudding-mango.jpg?v1.8.65"><label>Vanilla
                                Pudding Mango Peach</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/pudding-vanilla.jpg?v1.8.65"><label>Vanilla
                                Pudding Original</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/pepsi.png?v1.8.65"><label>Pepsi</label>
                        </div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/sjora.png?v1.8.65"><label>Sjora</label>
                        </div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/tropicana-twister.png?v1.8.65"><label>Tropicana
                                Twister</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/lipton-tea.png?v1.8.65"><label>Ice
                                Tea</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img src="https://static.kfc.com.my/images/menu-in-store/tea-hot.png?v1.8.65"><label>Hot
                                Tea</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/alta-rica-coffee.png?v1.8.65"><label>Coffee</label>
                        </div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/milo.png?v1.8.65"><label>Milo</label>
                        </div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/teh-tarik-kaw.png?v1.8.65"><label>Teh
                                Tarik</label></div>
                    </div>
                    <div class="food-box">
                        <div class="food"><img
                                    src="https://static.kfc.com.my/images/menu-in-store/white-coffee.png?v1.8.65"><label>White
                                Coffee</label></div>
                    </div>
                </div>
                <button class="slidernav prev"></button>
                <button class="slidernav next"></button>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection