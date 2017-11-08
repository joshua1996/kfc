@extends('header')

@section('header')

    <link href="{{ URL::asset('css/delivery.css') }}" rel="stylesheet">
@endsection

@section('content')

    <style>
        .card-content.special {
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            background-color: transparent;
        }
    </style>

    <div id="delivery" class="section">
        <div class="menu-type">
            <div class="float-container">
                <ul>
                    <li><a href="/delivery/menu/promotion" class="active">Delivery Menu</a></li>
                    <li><a href="/menu/in-store">In-store Menu</a></li>
                </ul>
            </div>
        </div>
        <div id="delivery-tab" data-tab="favourites" data-subtab="all" data-initial-tab="favourites" class="container">
            <div id="delivery-tabnav-group">
                <div id="delivery-tabnav"><a data-tab="favourites" data-href="/delivery/menu/favourites"
                                             data-pagetitle="Our latest delivery promos | KFC Malaysia">Favourites</a><a
                            data-tab="combo" data-href="/delivery/menu/combo"
                            data-pagetitle="Exclusive delivery combos | KFC Malaysia">Combo</a><a data-tab="alacarte"
                                                                                                  data-href="/delivery/menu/alacarte"
                                                                                                  data-pagetitle="KFC Delivery a la carte menu | KFC Malaysia">A'La
                        Carte</a></div>
                <div id="delivery-subnav">
                    <div data-tab="favourites" class="category"></div>
                    <div data-tab="combo" class="category">
                        <button data-subtab="all">All</button>
                        <button data-subtab="family">Family</button>
                        <button data-subtab="individual">Individual</button>
                    </div>
                    <div data-tab="alacarte" class="category">
                        <button data-subtab="all">All</button>
                        <button data-subtab="chickenburgers">Chicken/Burgers</button>
                        <button data-subtab="addons">Add-Ons</button>
                        <br class="hide-in-desktop">
                        <button data-subtab="sidesbeverages">Desserts &amp; Beverages</button>
                    </div>
                </div>
            </div>
            <div id="delivery-menu-loading" style="display: none;">
                <div class="loading-screen">
                    <div class="modal-content">
                        <div class="header"><img
                                    src="https://static.kfc.com.my/images/general/loading/loading-03.png?v1.8.62"></div>
                        <p>Loading</p></div>
                </div>
            </div>
            <div id="delivery-tabcontent">
                <div data-tab="favourites" class="float-container">
                    <div class="card-container clearafter">
                        @foreach($deliveryFood as $value)
                            <div data-id="{{ $value->foodID }}"
                                 class="card is-recommended {{ $value->special == 1 ? 'is-new' : '' }}">
                                <div data-cart="{{ $value->name }}"
                                     class="card-content {{ $value->special == 2 ? 'special' : '' }}"
                                     style="background-image: url('{{ $value->special == 2 ? URL::asset('img/delivery food/special').'/'.$value->backgroundImg : '' }}');">
                                    <button class="toggle-info"></button>
                                    <div class="info">
                                        <ul class="details">
                                            @php

                                                $detail = $value->detail;
                                                $detailArr = explode(',', $detail);

                                            @endphp
                                            @foreach($detailArr as $detailValue)
                                                <li>{{ $detailValue }}</li>
                                            @endforeach
                                        </ul>
                                        <div class="image"><img
                                                    src="https://static.kfc.com.my/images/menu/delivery-kakiv2-combo2.png?v1.8.62"
                                                    alt="Original Cheezy Combo"></div>
                                    </div>
                                    <div class="meta"><h3>{{ $value->name }}</h3><h4>RM {{ $value->price }}</h4>
                                        <button data-count="0" class="add-cart">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div><!----><!----></div>
        </div>
    </div>
@section('script')

    <script !src="">
        $(document).ready(function () {
            $('a[data-tab="combo"]').on('click', function () {
            });

            $('a[data-tab="alacarte"]').on('click', function () {
            });

            $('a[data-tab="favourites"]').on('click', function () {
            });
        });
    </script>

    <script type="application/json">
        {!! $df !!}
    </script>
@endsection

@endsection