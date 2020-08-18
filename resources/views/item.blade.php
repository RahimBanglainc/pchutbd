@extends('layouts.storefront.layout')

@section('title',$item->title)

@section('main')

@push('css')
    <style>
        .pagination {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: .25rem
        }

        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: green;
            background-color: #fff;
            border: 1px solid #dee2e6
        }

        .page-link:hover {
            color: green;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #dee2e6
        }

        .page-link:focus {
            z-index: 2;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .page-link:not(:disabled):not(.disabled) {
            cursor: pointer
        }

        .page-item:first-child .page-link {
            margin-left: 0;
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .page-item:last-child .page-link {
            border-top-right-radius: .25rem;
            border-bottom-right-radius: .25rem
        }

        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: green;
            border-color: green
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #dee2e6
        }

        .pagination-lg .page-link {
            padding: .75rem 1.5rem;
            font-size: 1.25rem;
            line-height: 1.5
        }

        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: .3rem;
            border-bottom-left-radius: .3rem
        }

        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem
        }

        .pagination-sm .page-link {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5
        }

        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: .2rem;
            border-bottom-left-radius: .2rem
        }

        .pagination-sm .page-item:last-child {}

    </style>

@endpush



<div class="container product-desc">

    <div class="breadcum"><a href="{{route('index')}}" class="breadcum-link">Home</a><span> &nbsp;&gt;&nbsp;</span><a
            class="breadcum-link-clk" href="#">{{$item->subcategory()->where('id', $item->subcategory_id)->first()->name}}</a>
    </div>

    <h1>{{ $item->title }}</h1>



    <div class="row ">

        <div class="eight columns product-desc-bg product-desc-device">

            <div class="row">
                <div class="ten columns">

                    <input type="hidden" name="DepartmentID" value="-1">
                    <input type="hidden" name="CategoryID" value="-1">
                    <input type="hidden" name="ItemTypeID" value="-1">
                    <input type="hidden" name="minPrice" value="">
                    <input type="hidden" name="maxPrice" value="">
                    <input type="hidden" name="StallID" value="-1">
                    <input type="hidden" name="BrandID" value="-1">
                    <input type="hidden" name="ListingID" value="50052">

                    <div class="product-desc-img">


                        <div id="displayAvator"><img
                                src="{{ Storage::disk('public')->url('item/'.$item->img) }}"
                                title="{{ $item->title }}" alt="{{ $item->title }}">
                        </div>






                    </div>

                </div>
                <div class="one column product-desc-img-ctl">


                    <a
                        href="javascript:setAvator('{{ Storage::disk('public')->url('item/'.$item->img) }}','{{ $item->title }}')"><img
                            src="{{ Storage::disk('public')->url('item/'.$item->img) }}">
                    </a>

                    @if($item->img1)

                        <a
                            href="javascript:setAvator('{{ Storage::disk('public')->url('item/'.$item->img1) }}','{{ $item->title }}')"><img
                                src="{{ Storage::disk('public')->url('item/'.$item->img1) }}">
                        </a>
                    @endif
                    @if($item->img2)

                        <a
                            href="javascript:setAvator('{{ Storage::disk('public')->url('item/'.$item->img2) }}','{{ $item->title }}')"><img
                                src="{{ Storage::disk('public')->url('item/'.$item->img2) }}">
                        </a>
                    @endif

                    @if($item->img3)

                        <a
                            href="javascript:setAvator('{{ Storage::disk('public')->url('item/'.$item->img3) }}','{{ $item->title }}')"><img
                                src="{{ Storage::disk('public')->url('item/'.$item->img3) }}">
                        </a>
                    @endif
                    @if($item->img4)

                        <a
                            href="javascript:setAvator('{{ Storage::disk('public')->url('item/'.$item->img4) }}','{{ $item->title }}')"><img
                                src="{{ Storage::disk('public')->url('item/'.$item->img4) }}">
                        </a>
                    @endif


                </div>

            </div>
        </div>



        <div class="four columns product-desc-device">

            <div class="row">

                <div class="product-desc-price-group">

                    <table cellpadding="0" cellspacing="0">

                        <tbody>
                            <tr>
                                <th>Price</th>
                                <td class="product-desc-price">৳ {{ $item->price }}</td>
                            </tr>

                            <tr>
                                <th>ID</th>
                                <td>
                                    {{ $item->id }}
                                    @guest
                                    <a class="product-fav" href="javascript:void(0)" onclick="fav()">
                                        <img src="{{asset('img/fav.png')}}" alt="favourite" title="Favourite">
                                    </a>
                                    @else


                                    <a class="product-fav" href="javascript:void(0)" onclick="document.getElementById('favorite-form').submit()">
                                        <img src="{{Auth::user()->favorite_items()->where('item_id', $item->id)->count() == 0 ? asset('img/fav.png') : asset('img/fav-sav.png')}}" alt="favourite" title="Favourite">
                                    </a>

                                    <form id="favorite-form" method="POST" action="{{route('favorite.post', $item->id)}}" style="display: none;">
                                        @csrf
                                    </form>


                                    @endguest

                                </td>
                            </tr>


                            {{-- <tr>
                                <th>Brand</th>
                                <td>HP</td>
                            </tr> --}}




                            <tr>
                                <th>Item</th>
                                <td>{{$item->subcategory()->where('id', $item->subcategory_id)->first()->name}}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                @if($item->stock)
                                    @if ($stall->item_exp >= $my_time)

                                    <td class="">In Stock</td>

                                    @else
                                    <td class="sold-out">Sold Out</td>
                                    @endif

                                @else
                                    <td class="out-of-stock">Out of Stock</td>
                                @endif
                            </tr>

                            <tr>
                                <th>Updated</th>
                                <td>{{ $item->updated_at->diffForHumans() }}</td>
                            </tr>

                        </tbody>
                    </table>

                    @if($item->stock & $stall->item_exp >= $my_time)

                        <div class="product-desc-gap">
                            <div class="product-desc-price-label">&nbsp;</div>
                            <div class="product-desc-price-data"><a href="#compare"
                                    class="product-desc-contact-button">View
                                    Contact</a></div>
                        </div>

                    @endif


                </div>
            </div>

            @if(!$item->stock)

                <div class="s-bottom b-top">
                    <b>In Stock</b>
                </div>

                <div class="row b-top">

                    @foreach ($sitems as $sitem)

                                        <div class="product-related-box" style="width:27%">
                                            <a
                                                href="{{route('item.view', $sitem->slug)}}">
                                                <div class="product-related-box-img">
                                                    <img style="width: 70px" src="{{ asset('storage/item/small/'.$sitem->img) }}">
                                                </div>
                                                <div class="product-related-box-item-title">
                                                    {!! \Illuminate\Support\str::limit(strip_tags($sitem->title), 8) !!} </div>

                                                <div class="product-related-box-price">
                                                    ৳ {{$sitem->price}} </div>
                                            </a>
                                        </div>

                    @endforeach


                </div>

            @endif




        </div>

    </div>



<div class="row">


    <div class="eight columns product-desc-device">


        @if($item->offer)
            <div class="b-top">
                <label>Special Offer</label>
                <p>{{ $item->offer }}</p>
            </div>

        @endif

        <div class="s-top">
            <b>Description</b>
        </div>
        <div class="s-top">
            <p>
                {{ $item->description }} </p>
        </div>



        <div class="s-top s-bottom">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('item.view', $item->slug) }}"
                target="_blank">
                <img alt="Share on Facebook" title="Share on Facebook"
                    src="{{ asset('img/fb_share.jpg') }}">
            </a>
            <a target="_blank"
                href="http://twitter.com/home?status={{ route('item.view', $item->slug) }}"><img
                    alt="Post on Twitter" title="Post on Twitter"
                    src="{{ asset('img/twitter_share.jpg') }}"></a>

        </div>





        <div class="s-bottom"><b>Features</b></div>

        <div class="product-desc-feature">
            <table>

                <tbody>
                    @foreach (App\FeatureValue::where('item_id', $item->id)->get() as $key => $value)
                    <tr class="featuredRow" style="border:1px solid #E1E1E1">
                        <td style="background-color: rgb(239, 240, 242);width:40%">{{$value->feature()->where('id', $value->feature_id)->first()->name}}</td>
                        <td>{{$value->value}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        <!-- defining warranty -->


@if ($item->warranty)

<div class="s-bottom">
    <b>Product Warranty</b>
</div>

<p>{{ $item->warranty }}</p>
@endif



        @if($item->stock && $item->status && $stall->item_exp >= $my_time)

            <div class="b-bottom b-top" id="compare"><b>Contact &amp; Best Price</b></div>

            <hr>


            <div class="row b-top">

                <div class="four columns product-desc-contact-logo">

                    <div class="row">

                        <div class="six columns s-bottom">
                            <a href="{{route('stall.show', $stall->slug)}}" style="float:left">
                                <img src="{{ asset('storage/stall/'.$stall->img) }}" alt="Madani Computer"
                                    title="Madani Computer">
                            </a>
                        </div>

                        <div class="six columns">
                            <span class="product-desc-contact-location">{{ $stall->name }}
                                <br>
                                <img src="{{asset('img/rating.png')}}" width="8">
                                <img src="{{asset('img/rating.png')}}" width="8">
                                <img src="{{asset('img/rating.png')}}" width="8">
                                <img src="{{asset('img/rating.png')}}" width="8">
                                <img src="{{asset('img/rating.png')}}" width="8">
                            </span>
                        </div>

                    </div>

                </div>


                <div class="five columns product-desc-contact">
                    <div class="row">

                        <div class="nine columns b-bottom">



                            <a href="javascript:hotline(845, 53182)" class="call_btn" style="display:block"
                                id="845">01XXXXXXXXX</a>


                            <div class="product-desc-phone" style="display:none" id="845-1">
                                <a href="tel:{{ $stall->hotline1 }}">
                                    <img src="{{ asset('img/phone-icon.png') }}">
                                    {{ $stall->hotline1 }}</a>
                            </div>


                            @if($stall->hotline2)

                                <div class="product-desc-phone s-top" style="display:none" id="845-2">
                                    <a href="tel:{{ $stall->hotline2 }}">
                                        <img src="{{ asset('img/phone-icon.png') }}">
                                        {{ $stall->hotline2 }}</a>
                                </div>
                            @endif


                        </div>

                    </div>
                </div>

                <div class="three columns product-desc-contact-pricing u-pull-right">
                    <div class="product-desc-contact-price">৳ {{ $item->price }}</div>

                </div>

            </div>
            <hr>
        @endif






        <div class="s-bottom b-top">
        <b>Related Products {{$ritems->count()}}</b>
        </div>

        <div class="row b-top">

            @foreach ($ritems as $ritem)

            <div class="product-related-box">
                <a
                    href="{{route('item.view', $ritem->slug)}}">
                    <div class="product-related-box-img">
                        <img style="height: 75px" src="{{ asset('storage/item/small/'.$ritem->img) }}">
                    </div>
                    <div class="product-related-box-item-title">
                        {!! \Illuminate\Support\str::limit(strip_tags($ritem->title), 20) !!} </div>

                    <div class="product-related-box-price">
                        ৳ {{$ritem->price}} </div>
                </a>
            </div>
            @endforeach


        </div>



        <!--<div class="social u-full-width m-top">
        <div class="fb-like" data-href="details/gaming-pc-ryzen-5-3400g-8gb-ram-500gb-hdd-19-monitor-53182/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
            <g:plusone size="medium" annotation="none"></g:plusone>
    </div>             -->

        {{-- <div class="product-review b-top">
            <form name="clientForm" method="post" enctype="multipart/form-data">
                <input type="hidden" name="ListingID" value="53182">

                <div class="m-top b-bottom">
                    <b>Reviews</b> <span class="product-review-lbl">(0)</span>

                    <img src="asset/static-image/no-rating.png" width="15">

                    <img src="asset/static-image/no-rating.png" width="15">

                    <img src="asset/static-image/no-rating.png" width="15">

                    <img src="asset/static-image/no-rating.png" width="15">

                    <img src="asset/static-image/no-rating.png" width="15">



                </div>



                <span class="product-review-lbl" style="margin-right:0.4em">Bad</span>
                <input name="UserRating" type="radio" value="1">
                <input name="UserRating" type="radio" value="2">
                <input name="UserRating" type="radio" value="3">
                <input name="UserRating" type="radio" value="4">
                <input name="UserRating" type="radio" value="5" checked="TRUE">
                <span class="product-review-lbl" style="margin-left:0.4em">Good</span>

                <textarea name="UserFeedback" onkeydown="limitText(this.form.UserFeedback, this.form.countdown, 250);"
                    onkeyup="limitText(this.form.UserFeedback, this.form.countdown, 250);" class="s-bottom"></textarea>

                <input type="button" onclick="checkValidation()" value="Submit" class="b-bottom">



            </form>
        </div> --}}


        <div class="s-top">
            <b>How to Buy ?</b>
        </div>
        <div class="s-top">
            <p>
                Visit showroom or call to buy the {{$item->subcategory()->where('id', $item->subcategory_id)->first()->name}}
                from Dhaka, Bangladesh.
            </p>
        </div>


    </div>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Product",
            "sku": "53182",
            "name": "Gaming PC Ryzen 5 3400G 8GB RAM 500GB HDD 19&quot; Monitor",
            "description": "Gigabyte A320M-S2H motherboard, 3.7 GHz base processor speed, 19&quot; LED monitor, DDR4 8GB RAM, view one ATX casing.",
            "offers": {
                "@type": "Offer",
                "priceCurrency": "BDT",
                "price": "28800.00"
            },
            "image": ["asset/product-image/giant_105346.jpg"]
        }

    </script>
    <script language="javascript">
        function addListing(listingID) {
            url = '{{route('index')}}/favorite/' + listingID + '/add';

            http.open("POST", url, true);
            http.onreadystatechange = showResult;
            http.send(null);
        }

        function showResult() {
            if (http.readyState == 4) {
                if (http.responseText == "") {
                    return;
                } else {
                    if (http.responseText == "error") {
                        window.location = "{{route('login')}}";
                        return;
                    } else if (http.responseText == "success") {
                        window.location =
                            "details/gaming-pc-ryzen-5-3400g-8gb-ram-500gb-hdd-19-monitor-53182/";
                        return;
                    }

                } // end of end
            }
        }

        function setAvator(avator, title) {
            var img = "<img src='";
            img = img + avator;
            img = img + "'";
            img = img + " " + "title='";
            img = img + title;
            img = img + "'";
            img = img + " " + "alt='";
            img = img + title;
            img = img + "'";
            img = img + "/>";
            document.getElementById("displayAvator").innerHTML = "";
            document.getElementById("displayAvator").innerHTML = img;
        }

        start_over_at = 3;
        counter = 0;

        function checkValidation() {
            if (document.clientForm.UserFeedback.value == "") {
                alert("Please type your message ");
                document.clientForm.UserFeedback.focus();
                return;
            }

            if (!radioCheck()) {
                alert("Please select a rating");
                return;
            }

            document.clientForm.action = "/listingDetail/saveFeedback/";
            document.clientForm.submit();
        }


        function limitText(limitField, limitCount, limitNum) {
            if (limitField.value.length > limitNum) {
                limitField.value = limitField.value.substring(0, limitNum);
            }
        }


        function radioCheck() {
            var selection = document.clientForm.UserRating;
            var status = false;

            for (i = 0; i < selection.length; i++)
                if (selection[i].checked == true)
                    status = true;

            return status;
        }

        function review(login) {

            if (!login) {
                var url = "userLogin/";
                window.location.href = url;

            } else {}


        }

        function addToCart(stallID, listingID, qty, price, avid, avname) {
            url = 'cartItem/add_to_cart//' + stallID + '/' + listingID + '/' + qty + '/' +
                price + "/" + avid + '/' + avname + '/';
            http.open("POST", url, true);
            http.onreadystatechange = showCartResult;
            http.send(null);
        }

        function showCartResult() {
            if (http.readyState == 4) {
                if (http.responseText == "") {
                    return;
                } else {
                    if (http.responseText == "success") {
                        //document.getElementById('cart').innerHTML="<div id='cart'><li><a style='color:red' href=cartItem/cart_list// > Cart Item: 1</a></li></div>";
                        //window.location="cartItem/cart_list/";
                        window.location = "cartItem/cart_list/";
                        return;
                    } else if (http.responseText == "failed") {
                        alert("Sorry!! failed to add in the cart , please try again");
                        return;
                    } else if (http.responseText == "exist") {
                        //alert("Item already exist in the cart");
                        window.location = "cartItem/cart_list/";
                        return;
                    }
                }
            }
        }

        function hotline(sid, lid) {
            id1 = sid + "-1";
            id2 = sid + "-2";

            document.getElementById(sid).style.display = 'none';

            if (document.getElementById(id1) !== null) {
                document.getElementById(id1).style.display = 'block';
            }

            if (document.getElementById(id2) !== null) {
                document.getElementById(id2).style.display = 'block';
            }

            url = 'listingDetail/recordClick//' + lid + '/' + sid + '/';
            http.open("POST", url, true);
            http.onreadystatechange = "";
            http.send(null);
        }

    </script>

    <!--<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=176763899010856";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>-->
    <br class="clear">
</div>

</div>

<script>
    // When the user clicks on <div>, open the popup
    function fav() {
        window.location.replace("{{route('login')}}");
    }
</script>


@endsection
