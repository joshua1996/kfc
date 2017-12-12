@extends('header')

@section('header')

    <link href="{{ URL::asset('css/delivery.css') }}" rel="stylesheet">
    <style>
        .card-content.special {
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            background-color: transparent;
        }
    </style>
@endsection

@section('content')



    <div id="delivery" class="section">
        <div class="menu-type">
            <div class="float-container">
                <ul>
                    <li><a href="{{ route('menuFavourites') }}" class="active">Delivery Menu</a></li>
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

                        @foreach($deliveryFood as $index => $value)
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
                                                $cartSession = session('cartItemID');
                                                $cartNum = 0;
                                            @endphp
                                            @foreach($detailArr as $detailValue)
                                                <li>{{ $detailValue }}</li>
                                            @endforeach
                                        </ul>
                                        <div class="image"><img
                                                    src="{{ URL::asset('img/delivery food/food/') }}/{{ $value->foodImg }}"
                                                    alt="Original Cheezy Combo"></div>
                                    </div>
                                    <div class="meta"><h3>{{ $value->name }}</h3><h4>RM {{ $value->price }}</h4>
                                        @foreach($cartSession as $i => $v)
                                            @if($v == $value->foodID)
                                                @php
                                                    $cartNum+=1
                                                @endphp
                                            @endif
                                        @endforeach
                                        <button data-count="{{ $cartNum }}" class="add-cart">Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div><!----><!----></div>
        </div>
    </div>
@section('script')

    <script>
        var sessionCartItemID = {!! json_encode(session('cartItemID')) !!};
        var afterAdditemID = [];
        $.each(sessionCartItemID, function(key, value) {
        });
        Handlebars.registerHelper('ifEquals', function (arg1, arg2, options) {
            return (arg1 == arg2) ? options.fn(this) : options.inverse(this);
        });
        Handlebars.registerHelper('split', function (arg, options) {
            var a = arg.split(',');
            $.each(a, function (i, v) {
                console.log(v);
                return '<li>' + v + '</li>';
            })

        });


        Handlebars.registerPartial('myPartial', '@{{ objects }}');

        function dataTab(type, typeEnum) {
            $('#delivery-tab').attr('data-tab', type);
            $('.float-container').attr('data-tab', type);
            $('.card-container.clearafter').empty();
            var json = [];
            var x = JSON.parse($('#deliveryfoodjson').html());
            $.each(x, function (i, v) {
                if (v.type == typeEnum)
                {
                    json.push(v);
                }
            });
            var wrapper = {objects: json, cartItem: sessionCartItemID};
            var compiled = _.template($('#tpl').html());
            var html = compiled(wrapper);
            $('.card-container.clearafter').append(html);
        }

        function dataSubTab(tag, tagEnum) {
            $('#delivery-tab').attr('data-subtab', tag);
            $('.card-container.clearafter').empty();
            var json = [];
            var x = JSON.parse($('#deliveryfoodjson').html());
            $.each(x, function (i, v) {
                if (v.tag == tagEnum)
                {
                    json.push(v);
                }
            });
            var wrapper = {objects: json, cartItem: sessionCartItemID};
            var compiled = _.template($('#tpl').html());
            var html = compiled(wrapper);
            $('.card-container.clearafter').append(html);
        }

        var card;
        var customizationIndex = 1;

        $(document).ready(function () {
            $('a[data-tab="favourites"]').on('click', function () {
                $('#delivery-tab').attr('data-tab', 'favourites');
                $('.float-container').attr('data-tab', 'favourites');
                $('.card-container.clearafter').empty();
                var x = JSON.parse($('#deliveryfoodjson').html());
                var wrapper = {objects: x, cartItem: sessionCartItemID};
                var compiled = _.template($('#tpl').html());
                var html = compiled(wrapper);
                $('.card-container.clearafter').append(html);
            });

            $('a[data-tab="combo"]').on('click', function () {
                dataTab('combo', 0);
            });

            $('a[data-tab="alacarte"]').on('click', function () {
                dataTab('alacarte', 1);
            });

            $('button[data-subtab="family"]').on('click', function () {
                dataSubTab('family', 0);
            });

            $('button[data-subtab="individual"]').on('click', function () {
                dataSubTab('individual', 1);
            });

            $('button[data-subtab="chickenburgers"]').on('click', function () {
                dataSubTab('chickenburgers', 2);
            });

            $('button[data-subtab="addons"]').on('click', function () {
                dataSubTab('addons', 3);
            });

            $('button[data-subtab="sidesbeverages"]').on('click', function () {
                dataSubTab('sidesbeverages', 4);
            });

            $('div[data-tab="combo"] button[data-subtab="all"]').on('click', function () {
                dataTab('combo', 0);
                $('#delivery-tab').attr('data-subtab', 'all');
            });

            $('div[data-tab="alacarte"] button[data-subtab="all"]').on('click', function () {
                dataTab('alacarte', 1);
                $('#delivery-tab').attr('data-subtab', 'all');
            });


            //add cart
            $(document).on('click', '.add-cart', function () {

                $('.customize-section').empty();
                card = $(this).closest('.card').attr('data-id');

                var x = JSON.parse($('#deliveryfoodjson').html());

                var a = _.find(x, function (x) {
                    return x.foodID == card;
                });

                if (a.chicken == 0 && a.drink == 0)
                {
                    var thiss = $(this);

                    var data = {
                        itemID: $(this).closest('.card').attr('data-id')
                    };
                    $.ajax({
                        type: 'post',
                        url: '{{ route('addItem') }}',
                        data: data,
                        success: function () {
                            var dataCount = $(thiss).attr('data-count');
                            var totalCount = $('#nav-cart').attr('data-total');
                            $(thiss).attr('data-count', parseInt(dataCount) + 1);
                            $('#modal-addedtocart').toggleClass('visible');
                            $('#nav-cart').attr('data-total', parseInt(totalCount) + 1);
                            setTimeout(function () {
                                $('#modal-addedtocart').toggleClass('visible');
                            }, 1000);

                            sessionCartItemID.push(data.itemID);
                            afterAdditemID.push(data.itemID);
                            headerCartItem.push(data.itemID);
                        }
                    })
                } else
                {
                    $('#modal-customize-item').addClass('visible');
                    $('#modal-customize-item .meal .image img').attr('src', $('.card[data-id="' + card + '"] .image img').attr('src'));
                    $('#modal-customize-item .details').children().eq(0).text($('.card[data-id="' + card + '"] .card-content').attr('data-cart'));
                    $('#modal-customize-item .details').children().eq(2).text($('.card[data-id="' + card + '"] .card-content .meta').children().eq(1).text());
                    $('#modal-customize-item .details ul').html($('.card[data-id="' + card + '"] .details').html());
                    $('#add-to-cart').attr('itemid', card);


                    var wrapper = {objects: x, chicken: a, customizationIndex: customizationIndex};
                    var compiled = _.template($('#customizationTpl').html());
                    var html = compiled(wrapper);
                    $('.customize-section').append(html);
                }


            });

            $('.button-close, .overlay').on('click', function () {
                $('#modal-customize-item').removeClass('visible');
            });

            //original & spicy dropdown
            $(document).on('change', '.original', function () {
                var index = $(this).attr('customizationIndex');
                var max = $('.original option:last-child').val()
                var remain = max - $(this).prop('selectedIndex');
                $('.hotspicy[customizationIndex="' + index + '"]').val(remain);
                console.log(max - $(this).prop('selectedIndex'));
            });
            $(document).on('change', '.hotspicy', function () {
                var index = $(this).attr('customizationIndex');
                var max = $('.hotspicy option:last-child').val()
                var remain = max - $(this).prop('selectedIndex');
                $('.original[customizationIndex="' + index + '"]').val(remain);
                console.log(max - $(this).prop('selectedIndex'));
            });

            //pepsi & 7up dropdown
            $(document).on('change', '.pepsi', function () {
                var index = $(this).attr('customizationIndex');
                var max = $('.pepsi option:last-child').val()
                var remain = max - $(this).prop('selectedIndex');
                $('.sevenup[customizationIndex="' + index + '"]').val(remain);
                console.log(max - $(this).prop('selectedIndex'));
            });
            $(document).on('change', '.sevenup', function () {
                var index = $(this).attr('customizationIndex');
                var max = $('.sevenup option:last-child').val()
                var remain = max - $(this).prop('selectedIndex');
                $('.pepsi[customizationIndex="' + index + '"]').val(remain);
                console.log(max - $(this).prop('selectedIndex'));
            });

            //original & spicy checkbox
            $(document).on('click', '.oricheck', function () {
                $(this).attr('data-checked', '1');
                $('.spicycheck').attr('data-checked', '0');
            });
            $(document).on('click', '.spicycheck', function () {
                $(this).attr('data-checked', '1');
                $('.oricheck').attr('data-checked', '0');
            });

            //pepsi & 7up checkbox
            $(document).on('click', '.pepsicheck', function () {
                var index = $(this).closest('li').attr('customizationIndex');
                $(this).attr('data-checked', '1');
                $(this).closest('li[customizationindex="' + index + '"]').find('.sevenupcheck').attr('data-checked', '0');
            });
            $(document).on('click', '.sevenupcheck', function () {
                var index = $(this).closest('li').attr('customizationIndex');
                $(this).attr('data-checked', '1');
                $(this).closest('li[customizationindex="' + index + '"]').find('.pepsicheck').attr('data-checked', '0');
            });

            //add combo
            $('.quantityadd').on('click', function (e) {
                e.preventDefault();
                var quantity = parseInt($('.quantity p').text());
                quantity += 1;
                customizationIndex += 1;
                $('.quantity p').text(quantity);

                var x = JSON.parse($('#deliveryfoodjson').html());

                var a = _.find(x, function (x) {
                    return x.foodID == card;
                });
                var wrapper = {objects: x, chicken: a, customizationIndex: customizationIndex};
                var compiled = _.template($('#customizationTpl').html());
                var html = compiled(wrapper);
                $('.customize-section').append(html);
            });

            $('.quantityminus').on('click', function (e) {
                e.preventDefault();
                var quantity = $('.quantity p').text();
                if (quantity > 1)
                {
                    quantity -= 1;
                    customizationIndex -= 1;
                    $('.quantity p').text(quantity++);
                    $('.customize-section li:last').remove();
                }
            });

            $(document).on('click', '#add-to-cart', function (e) {
                var thiss = $(this);
                var dataArr = [];
                var itemID = $(this).attr('itemid');
                var sectionList = 0;
                e.preventDefault();
                $('.customize-section li').each(function () {
                    sectionList += 1;
                    dataArr.push({
                        itemId: itemID,
                        chicken_original: $(this).find('.original').val(),
                        chicken_spicy: $(this).find('.hotspicy').val(),
                        drink_pepsi: $(this).find('.pepsi').val(),
                        drink_sevenup: $(this).find('.sevenup').val()
                    })
                });
                $('#modal-customize-item').removeClass('visible');
                $('#modal-customize-item').addClass('visible');
                $.ajax({
                    type: 'post',
                    url: '{{ route('addItems') }}',
                    dataType: 'json',
                    data: JSON.stringify({items: dataArr}),
                    contentType: "application/json; charset=utf-8",
                    success: function (e) {
                        $('#modal-customize-item').removeClass('visible');
                        $('#modal-addedtocart').toggleClass('visible');
                        setTimeout(function () {
                            $('#modal-addedtocart').toggleClass('visible');
                        }, 1000);
                        var datacount = parseInt($('.card.is-recommended[data-id="'+ $(thiss).attr('itemid') +'"] .add-cart').attr('data-count'));
                        var datatotal = parseInt($('#nav-cart').attr('data-total'));
                        $('.card.is-recommended[data-id="'+ $(thiss).attr('itemid') +'"] .add-cart').attr('data-count', datacount +=sectionList );
                        $('#nav-cart').attr('data-total', datatotal += sectionList);
                        var dataCount = $(thiss).attr('data-count');
                        $(thiss).attr('data-count', parseInt(dataCount) + 1);
                        sessionCartItemID.push(dataArr[0].itemId);
                        afterAdditemID.push(dataArr[0].itemId);
                        headerCartItem.push(dataArr[0].itemId);
                    }
                })
            });

            //Apply to all items below.
            $(document).on('click', '.choice.choice-apply-all.clearafter .checkbox', function () {
                if ($(this).attr('data-checked'))
                {
                    $(this).removeAttr('data-checked');
                } else
                {
                    $(this).attr('data-checked', 'true');
                }
            });
        });
    </script>



    <script type="text/template" id="customizationTpl">
        <li customizationIndex="<%= customizationIndex %>">
            <div class="cart-item-count">Set<span class="cart-item-number"><%= customizationIndex %></span></div>
            <% if (chicken.chicken != 0) { %>

            <div class="choice clearafter">
                <div class="label">Preferred Flavor</div>
                <div class="custom-dropdown <% if (chicken.chicken == 1) { %>
single-item
<% } %>"><label>Original</label>
                    <% if(chicken.chicken ==1){ %>

                    <% } else { %>
                     <select class="original" customizationIndex="<%= customizationIndex %>">
                        <% for (var i = 0;i < chicken.chicken + 1; i++) { %>
                        <option
                        <% if (i==chicken.chicken){ %>
    <%= 'selected' %>
<% }%> value="<%= i %>"><%= i %></option>
<% } %>

</select>
                    <% } %>

<div data-checked="0" class="checkbox oricheck" style="display: <% if (chicken.chicken == 1) { %>
block
<% } else { %>
none
<% } %>;"></div>
</div>
<div class="custom-dropdown <% if (chicken.chicken == 1) { %>
single-item
<% } %>"><label>Hot &amp; Spicy</label>
<% if(chicken.chicken ==1){ %>

<% } else { %>
<select class="hotspicy" customizationIndex="<%= customizationIndex %>">
 <% for (var i = 0;i < chicken.chicken + 1; i++) { %>
<option value="<%= i %>"><%= i %></option>
<% } %>
</select>
<% } %>
<div data-checked="0" class="checkbox spicycheck" style="display: <% if (chicken.chicken == 1) { %>
block
<% } else { %>
none
<% } %>;"></div>
</div>
</div>
<% } %>

<% if (chicken.drink != 0) { %>
<div class="choice clearafter">
<div class="label">Preferred Drink</div>
<div class="custom-dropdown <% if (chicken.drink == 1) { %>
single-item
<% } %>"><label><img
        src="https://static.kfc.com.my/images/delivery/icon-pepsi.png?v1.8.84" alt="Pepsi"></label>
        <select class="pepsi" customizationIndex="<%= customizationIndex %>">
 <% for (var i = 0;i < chicken.drink + 1; i++) { %>
<option value="<%= i %>"><%= i %></option>
<% } %>
</select>
<div data-checked="1" class="checkbox pepsicheck" style="display:<% if (chicken.drink == 1) { %>
block
<% } else { %>
none
<% } %>;"></div>
</div>
<div class="custom-dropdown <% if (chicken.drink == 1) { %>
single-item
<% } %>"><label><img
        src="https://static.kfc.com.my/images/delivery/icon-7up.png?v1.8.84"
        alt="7 Up"></label><select class="sevenup" customizationIndex="<%= customizationIndex %>">
 <% for (var i = 0;i < chicken.drink + 1; i++) { %>
<option value="<%= i %>"><%= i %></option>
<% } %>
</select>
<div data-checked="0" class="checkbox sevenupcheck" style="display:<% if (chicken.drink == 1) { %>
block
<% } else { %>
none
<% } %>;"></div>
</div>
</div>

<% } %>

<% if (customizationIndex == 1) { %>
<div class="choice choice-apply-all clearafter">
<div class="checkbox">Apply to all items below.</div>
</div>
<% } %>


</li>

</script>

<script type="text/template" id="tpl">


<% _.each(objects, function(food) { %>
<% var dataCount = _.countBy(cartItem, function(e){ return e == food.foodID ? 'a': 'b' }); %>
<div data-id="<%= food.foodID %>"
class="card is-recommended <%= food.special == 1 ? 'is-new': '' %>">
<div data-cart="<% food.name %>"
class="card-content <%= food.special == 2 ? 'special' : '' %>"
style="background-image: url('<%= food.special == 2 ? '/img/delivery food/special/' + food.backgroundImg : '' %>');">
<button class="toggle-info"></button>
<div class="info">
<ul class="details">
<% _.each(food.detail.split(','), function(detail) { %>
<li>  <%= detail %> </li>
<% }); %>

</ul>
<div class="image"><img
src="{{ URL::asset('img/delivery food/food/') }}/<%= food.foodImg %>"
alt="Original Cheezy Combo"></div>
</div>
<div class="meta"><h3><%= food.name %></h3><h4>RM <%= food.price %></h4>
<button data-count="<%= dataCount.a > 0 ? dataCount.a : '0' %>" class="add-cart">Add to Cart</button>
</div>
</div>
</div>
<% }); %>

</script>


@endsection

@endsection