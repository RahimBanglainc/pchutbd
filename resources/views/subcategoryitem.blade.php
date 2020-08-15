@extends('layouts.storefront.layout')

@section('title','List Of Online Stalls')



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

<div class="container">
    <div class="row">
        <div class="twelve columns breadcum">

            <a href="{{route('index')}}" class="breadcum-link">Home</a><span> &nbsp;&gt;&nbsp;</span><a class="breadcum-link"
                href="{{route('cat.view', $subcat->category()->where('id', $subcat->Category_id)->first()->slug)}}">{{$subcat->category()->where('id', $subcat->Category_id)->first()->name}}</a><span> &nbsp;&gt;&nbsp;</span><a class="breadcum-link-clk"
                href="#">{{$subcat->name}}</a>
            {{-- <a href="bn/wireless-router/" class="u-pull-right">Bangla</a> --}}
        </div>
    </div>

</div>

<script language="javascript">
    function checkLoadStatus() {
        var text = document.searchProduct.ListingTitle.value;
        var cat = document.searchProduct.CategoryID.value;
        var brand = document.searchProduct.BrandID.value;
        var minPrice = document.searchProduct.minPrice.value;
        var maxPrice = document.searchProduct.maxPrice.value;

        text = text.replace(/["']/g, "");
        text_array = text.split(" ");
        text_string = text_array.join("+");

        if (cat > 0) text_string = text_string + "&cat=" + cat;
        if (brand > 0) text_string = text_string + "&brand=" + brand;
        if (minPrice > 0) text_string = text_string + "&min-price=" + minPrice;
        if (maxPrice > 0) text_string = text_string + "&max-price=" + maxPrice;

        document.searchProduct.action = "search/" + "?term=" + text_string;
        document.searchProduct.submit();
    }

    img = "<img src='";
    img = img + "asset/static-image/";
    img = img + "ajax-loader.gif";
    img = img + "'";
    img = img + "/>";

    function selectCategory() {
        http = getHTTPObject();

        if (http.readyState != 4) {
            document.getElementById("showCategory").innerHTML = img;
        }

        var DepartmentID = document.searchProduct.DepartmentID.value;

        site_url = 'home/getSearchCategory//' + DepartmentID + '/';

        http.open("GET", site_url, true);
        http.onreadystatechange = showCategory;
        http.send(null);
    }

    function selectItemType() {
        http = getHTTPObject();

        if (http.readyState != 4) {
            document.getElementById("showSearchType").innerHTML = img;
        }

        var CategoryID = document.searchProduct.CategoryID.value;

        site_url = 'home/getItemType//' + CategoryID + '/';

        http.open("GET", site_url, true);
        http.onreadystatechange = showItemType;
        http.send(null);
    }

    function showCategory() {
        if (http.readyState == 4) {
            if (http.responseText == "") {
                return;
            }

            document.getElementById("showCategory").innerHTML = http.responseText;
            document.getElementById("showSearchType").innerHTML =
                "<select name='ItemTypeID'><option value='-1'>select</option></select>";
        }
    }


    function showItemType() {
        if (http.readyState == 4) {
            if (http.responseText == "") {
                return;
            }

            document.getElementById("showSearchType").innerHTML = http.responseText;

        }
    }

    function filterListing(urlname, ckvalue, ckid, page_root_url) {
        var chk_arr = document.getElementsByName("FeatureValue[]");
        var chklength = chk_arr.length;
        var selchbox = [];
        var prcbox = [];
        var param = "";

        for (i = 0; i < chklength; i++) {
            if (chk_arr[i].type == 'checkbox' && chk_arr[i].checked == true) {
                if (chk_arr[i].id == ckid && chk_arr[i].value != ckvalue) {
                    document.getElementById(ckid).checked = false;
                } else if (chk_arr[i].id != 'price') {
                    selchbox.push(chk_arr[i].value);
                } else {
                    prcbox.push(chk_arr[i].value);
                }
            }
        }

        if (selchbox.length > 0 || prcbox.length > 0) {
            param = selchbox.join("-");

            if (prcbox.length > 0) {
                param = param + prcbox[0];
            }
        }

        set_cookie(param);

        document.cookie = 'flu=' + page_root_url + ';expires=;path=/';

        document.filterform.action = "" + urlname + "";

        document.filterform.submit();
    }

    function clear_all_filter(urlname) {
        set_cookie();

        document.filterform.action = "" + urlname + "";

        document.filterform.submit();
    }

    function set_cookie(cvalue = '') {
        document.cookie = 'flc=' + cvalue + ';expires=;path=/';
    }

</script>

<div class="container">

    <form name="filterform" action="/" method="post" enctype="multipart/form-data" style="display: none"></form>

    <div class="row">

        <div class="three columns ">









            <div class="row lmenu-head">
                <a href="{{route('cat.view', $subcat->category()->where('id', $subcat->Category_id)->first()->slug)}}">
                    &lt;&lt; {{$subcat->category()->where('id', $subcat->Category_id)->first()->name}} </a>
            </div>

            <div class="row lmenu-sub-head m-bottom">
                <label>{{$subcat->name}} &gt;</label>
            </div>



            {{-- <div id="menuv-container">

                <ul class="menuv-list accordion lmenu">

                    <div class="menuv-close"><a href="">X Close</a></div>




                    <li id="nav" class="accordion-toggle">

                        <a class="menuv-link">Item</a>
                    </li>

                    <ul class="menuv-submenuv accordion-content">
                        <li><input type="checkbox" id="0"
                                onclick="filterListing('wireless-router','','wireless-router')" name="BrandName[]"
                                value="" checked="" disabled=""><a class="menuv-head" href="wireless-router/">All
                                Wireless Router</a></li>
                        <li><input type="checkbox" id="0"
                                onclick="filterListing('wireless-router/portable-wireless-router','','','wireless-router')"
                                name="FeatureValueURL[]" value=""><a class="menuv-head"
                                href="wireless-router/portable-wireless-router/">Pocket</a></li>
                    </ul>


                    <div class="row">

                        <li id="nav" class="toggle accordion-toggle">

                            <a class="menuv-link">Brand</a>
                        </li>

                        <ul class="menuv-submenuv accordion-content">
                            <li><input type="checkbox" id="tp-link"
                                    onclick="filterListing('wireless-router/tp-link','','','wireless-router')"
                                    name="BrandURL[]" value="tp-link"><a class="menuv-head"
                                    href="wireless-router/tp-link/">TP-Link</a></li>
                            <li><input type="checkbox" id="tenda"
                                    onclick="filterListing('wireless-router/tenda','','','wireless-router')"
                                    name="BrandURL[]" value="tenda"><a class="menuv-head"
                                    href="wireless-router/tenda/">Tenda</a></li>
                            <li><input type="checkbox" id="d-link"
                                    onclick="filterListing('wireless-router/d-link','','','wireless-router')"
                                    name="BrandURL[]" value="d-link"><a class="menuv-head"
                                    href="wireless-router/d-link/">D-Link</a></li>
                            <li><input type="checkbox" id="mikrotik"
                                    onclick="filterListing('wireless-router/mikrotik','','','wireless-router')"
                                    name="BrandURL[]" value="mikrotik"><a class="menuv-head"
                                    href="wireless-router/mikrotik/">Mikrotik</a></li>
                            <li><input type="checkbox" id="xiaomi"
                                    onclick="filterListing('wireless-router/xiaomi','','','wireless-router')"
                                    name="BrandURL[]" value="xiaomi"><a class="menuv-head"
                                    href="wireless-router/xiaomi/">Xiaomi</a></li>
                            <li><input type="checkbox" id="netgear"
                                    onclick="filterListing('wireless-router/netgear','','','wireless-router')"
                                    name="BrandURL[]" value="netgear"><a class="menuv-head"
                                    href="wireless-router/netgear/">Netgear</a></li>
                            <li><input type="checkbox" id="huawei"
                                    onclick="filterListing('wireless-router/huawei','','','wireless-router')"
                                    name="BrandURL[]" value="huawei"><a class="menuv-head"
                                    href="wireless-router/huawei/">Huawei</a></li>
                            <li><input type="checkbox" id="asus"
                                    onclick="filterListing('wireless-router/asus','','','wireless-router')"
                                    name="BrandURL[]" value="asus"><a class="menuv-head"
                                    href="wireless-router/asus/">Asus</a></li>
                            <li><input type="checkbox" id="linksys"
                                    onclick="filterListing('wireless-router/linksys','','','wireless-router')"
                                    name="BrandURL[]" value="linksys"><a class="menuv-head"
                                    href="wireless-router/linksys/">Linksys</a></li>
                            <li><input type="checkbox" id="belkin"
                                    onclick="filterListing('wireless-router/belkin','','','wireless-router')"
                                    name="BrandURL[]" value="belkin"><a class="menuv-head"
                                    href="wireless-router/belkin/">Belkin</a></li>
                            <li><input type="checkbox" id="cisco"
                                    onclick="filterListing('wireless-router/cisco','','','wireless-router')"
                                    name="BrandURL[]" value="cisco"><a class="menuv-head"
                                    href="wireless-router/cisco/">Cisco</a></li>
                            <li><input type="checkbox" id="trendnet"
                                    onclick="filterListing('wireless-router/trendnet','','','wireless-router')"
                                    name="BrandURL[]" value="trendnet"><a class="menuv-head"
                                    href="wireless-router/trendnet/">TRENDnet</a></li>
                            <li><input type="checkbox" id="othes"
                                    onclick="filterListing('wireless-router/others','','','wireless-router')"
                                    name="BrandURL[]" value="wireless-router/others"><span
                                    class="menuv-filter-label">Others</span></li>
                        </ul>
                        <li id="nav" class="toggle accordion-toggle">
                            <a class="menuv-link">Price Range</a>
                        </li>

                        <ul class="menuv-submenuv accordion-content">

                            <li><input type="checkbox" id="price"
                                    onclick="filterListing('wireless-router',':1:10000','price','wireless-router')"
                                    name="FeatureValue[]" value=":1:10000"><span class="menuv-filter-label">৳
                                    1-10000</span></li>
                            <li><input type="checkbox" id="price"
                                    onclick="filterListing('wireless-router',':10001:20000','price','wireless-router')"
                                    name="FeatureValue[]" value=":10001:20000"><span class="menuv-filter-label">৳
                                    10001-20000</span></li>
                            <li><input type="checkbox" id="price"
                                    onclick="filterListing('wireless-router',':20001:30000','price','wireless-router')"
                                    name="FeatureValue[]" value=":20001:30000"><span class="menuv-filter-label">৳
                                    20001-30000</span></li>
                            <li><input type="checkbox" id="price"
                                    onclick="filterListing('wireless-router',':30001:40000','price','wireless-router')"
                                    name="FeatureValue[]" value=":30001:40000"><span class="menuv-filter-label">৳
                                    30001-40000</span></li>
                        </ul>

                        <li id="nav" class="toggle accordion-toggle">
                            <a class="menuv-link">Router Type</a>
                        </li>

                        <ul class="menuv-submenuv accordion-content">
                            <li><input type="checkbox" id="1772"
                                    onclick="filterListing('wireless-router',561,1772,'wireless-router')"
                                    name="FeatureValue[]" value="561"><span class="menuv-filter-label">Wired
                                    Router</span></li>
                            <li><input type="checkbox" id="1772"
                                    onclick="filterListing('wireless-router',286,1772,'wireless-router')"
                                    name="FeatureValue[]" value="286"><span class="menuv-filter-label">Wi-Fi
                                    Router</span></li>
                            <li><input type="checkbox" id="1772"
                                    onclick="filterListing('wireless-router',287,1772,'wireless-router')"
                                    name="FeatureValue[]" value="287"><span class="menuv-filter-label">3G / 4G
                                    Supported</span></li>
                            <li><input type="checkbox" id="1772"
                                    onclick="filterListing('wireless-router',288,1772,'wireless-router')"
                                    name="FeatureValue[]" value="288"><span class="menuv-filter-label">Pocket</span>
                            </li>
                        </ul>

                        <li id="nav" class="toggle accordion-toggle">
                            <a class="menuv-link">Antenna</a>
                        </li>

                        <ul class="menuv-submenuv accordion-content">
                            <li><input type="checkbox" id="1773"
                                    onclick="filterListing('wireless-router',289,1773,'wireless-router')"
                                    name="FeatureValue[]" value="289"><span class="menuv-filter-label">Conceal
                                    Antenna</span></li>
                            <li><input type="checkbox" id="1773"
                                    onclick="filterListing('wireless-router',290,1773,'wireless-router')"
                                    name="FeatureValue[]" value="290"><span class="menuv-filter-label">1 Antenna</span>
                            </li>
                            <li><input type="checkbox" id="1773"
                                    onclick="filterListing('wireless-router',291,1773,'wireless-router')"
                                    name="FeatureValue[]" value="291"><span class="menuv-filter-label">2 Antenna</span>
                            </li>
                            <li><input type="checkbox" id="1773"
                                    onclick="filterListing('wireless-router',292,1773,'wireless-router')"
                                    name="FeatureValue[]" value="292"><span class="menuv-filter-label">3 Antenna</span>
                            </li>
                            <li><input type="checkbox" id="1773"
                                    onclick="filterListing('wireless-router',293,1773,'wireless-router')"
                                    name="FeatureValue[]" value="293"><span class="menuv-filter-label">4+ Antenna</span>
                            </li>
                        </ul>

                        <li id="nav" class="toggle accordion-toggle">
                            <a class="menuv-link">Speed</a>
                        </li>

                        <ul class="menuv-submenuv accordion-content">
                            <li><input type="checkbox" id="896"
                                    onclick="filterListing('wireless-router',280,896,'wireless-router')"
                                    name="FeatureValue[]" value="280"><span class="menuv-filter-label">1 to 150
                                    Mbps</span></li>
                            <li><input type="checkbox" id="896"
                                    onclick="filterListing('wireless-router',281,896,'wireless-router')"
                                    name="FeatureValue[]" value="281"><span class="menuv-filter-label">151 to 300
                                    Mbps</span></li>
                            <li><input type="checkbox" id="896"
                                    onclick="filterListing('wireless-router',282,896,'wireless-router')"
                                    name="FeatureValue[]" value="282"><span class="menuv-filter-label">301 to 450
                                    Mbps</span></li>
                            <li><input type="checkbox" id="896"
                                    onclick="filterListing('wireless-router',283,896,'wireless-router')"
                                    name="FeatureValue[]" value="283"><span class="menuv-filter-label">450+ Mbps</span>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div> --}}

        </div>

        <div class="nine columns product-cat-box-width">

            <!--this form should be after the left menu-->

            <form name="clientForm" action="" method="post">
                <input type="hidden" name="DepartmentID" value="">
                <input type="hidden" name="CategoryID" value="">

                <input type="hidden" name="PageURL" value="wireless-router">

                <div class="row body-header">
                    <h1>{{$subcat->name}}</h1>
                </div>



                <div class="row s-top s-bottom">
                    <div id="menuv-wrapper" class="menuv-icon">
                        <div id="hamburger-menuv u-pull-left">
                            <img src="asset/static-image/filter.png" width="25" border="0">
                        </div>
                    </div>

                    {{-- <div class="custom-select">
                        <select name="SortID" onchange="select_sort()">
                            <option value="1" selected="">Relevant</option>
                            <option value="2">Low to High</option>
                            <option value="3">High to Low</option>
                        </select>
                    </div> --}}

                    <span class="product-cat-stat">
                        {{$count}} Products </span>

                </div>





                <script language="javascript">
                    function addListing(listingID) {
                        url = 'searchItemListing/addListingToMyAccount//' + listingID + '/';
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
                                    alert("You have to login to save");
                                    return;
                                } else if (http.responseText == "failed") {
                                    alert("Sorry!! failed to save , please try again");
                                    return;
                                } else if (http.responseText == "success") {
                                    alert("This item has been saved successfully");
                                    return;
                                } else if (http.responseText == "alreadySave") {
                                    alert("This item is already saved in your account");
                                    return;
                                }

                            } // end of end

                        }
                    }

                </script>


@foreach ($items as $item)

<div class="row product-cat-box s-top">

    <div class="six columns product-cat-box-img">
        <div class="row">
            <div class="seven columns">
                <a href="{{route('item.view', $item->slug)}}">
                    <img src="{{asset('storage/item/small/'.$item->img)}}"
                        alt="{{$item->title}}"
                        title="{{$item->title}}">
                </a> </div>
            <div class="five columns">
                <div class="product-price-group">
                    <div class="product-price">৳ {{$item->price}}</div>
                    <div class="product-update-date">{{ $item->updated_at->diffForHumans() }}</div>
                    <div class="product-cat-box-button">
                        <a href="{{route('item.view', $item->slug)}}">
                            <div class="button-link">Details</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="six columns product-cat-box-text">
        <a href="{{route('item.view', $item->slug)}}">{{$item->title}}</a>

        <p>{!! \Illuminate\Support\str::limit(strip_tags($item->description), 100) !!}</p>

    </div>

</div>
@endforeach


                <div class="s-top">
                    {{$items->links()}}
                </div>



                <div class="q-first" style="margin-top:5em;">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{route('catitem.view', $subcat->slug)}}" target="_blank">
                        <img alt="Share on Facebook" title="Share on Facebook" src="{{asset('img/fb_share.jpg')}}">
                    </a>
                    <a target="_blank" href="http://twitter.com/home?status={{route('catitem.view', $subcat->slug)}}"><img alt="Post on Twitter"
                            title="Post on Twitter" src="{{asset('img/twitter_share.jpg')}}"></a>
                </div>




                <div class="box g-top">

                    <h2 class="b-bottom">
                        Top {{$subcat->name}} Price List in Bangladesh

                    </h2>

                    <table cellpadding="0" cellspacing="0">

                        <tbody>
                            <tr class="heading">
                                <th>

                                    Best {{$subcat->name}} List in {{$my_time->toFormattedDateString()}}

                                </th>

                                <th style="text-align:right">
                                    Latest Price </th>
                            </tr>

                            @foreach ($sitems as $sitem)

                            <tr>
                                <td>
                                    <a href="{{route('item.view', $sitem->slug)}}">{{$sitem->title}}</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ {{$sitem->price}} </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>





                {{-- <div class="q">
                    <img src="asset/static-image/tick-notes.jpeg">
                    <label>Wireless Router Buying in Bangladesh</label>
                    <p class="b-top"></p>
                    <p><strong>What is the range of the router ?</strong></p>

                    <p>The range of the WiFi router is 300&nbsp;feet in indoor and 1000&nbsp;feet in open area at 2.4
                        GHz band.</p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>
                    <p></p>
                </div> --}}




            </form>
        </div>






        <script>
            var doc = document,
                slideList = doc.querySelectorAll('.slider-container > div'),
                pageNavContainer = doc.querySelector('.nav'),
                pageNav = doc.querySelector('.nav ul'),
                toggleHandle = doc.querySelector('.nav-toggle-handle'),
                divider = window.innerHeight / 2,
                scrollTimer,
                resizeTimer;

            toggleHandle.onclick = function () {
                var classN = pageNavContainer.className;
                pageNavContainer.className = (classN.indexOf(' active') > 0) ? classN.replace(' active', '') :
                    classN + ' active';
            };

            if (window.addEventListener) {
                window.addEventListener('scroll', function () {
                    clearTimeout(scrollTimer);

                    scrollTimer = setTimeout(function () {
                        [].forEach.call(slideList, function (el) {
                            var rect = el.getBoundingClientRect(),
                                navLink = pageNav.querySelector('[href="#' + el.id + '"]');
                            if (rect.top <= divider && rect.bottom > divider) {
                                if (navLink.className !== 'active') {
                                    navLink.className = 'active';
                                }
                            } else {
                                if (navLink.className !== '') {
                                    navLink.className = '';
                                }
                            }
                        });
                    }, 100);
                });

                window.addEventListener('resize', function () {
                    clearTimeout(resizeTimer);

                    resizeTimer = setTimeout(function () {
                        divider = window.innerHeight / 2;
                    }, 100);
                });

                pageNav.addEventListener('click', function () {
                    var classN = pageNavContainer.className;
                    if (classN.indexOf(' active') > 0) {
                        pageNavContainer.className = classN.replace(' active', '');
                    }
                });
            }

            var mobile = 'false',
                isTestPage = false,
                isDemoPage = true,
                classIn = 'jello',
                classOut = 'rollOut',
                speed = 400,
                doc = document,
                win = window,
                ww = win.innerWidth || doc.documentElement.clientWidth || doc.body.clientWidth,
                fw = getFW(ww),
                initFns = {},
                sliders = new Object(),
                edgepadding = 50,
                gutter = 10;

            function getFW(width) {
                var sm = 400,
                    md = 900,
                    lg = 1400;
                return width < sm ? 150 : width >= sm && width < md ? 200 : width >= md && width < lg ? 300 : 400;
            }
            window.addEventListener('resize', function () {
                fw = getFW(ww);
            });

        </script>
        <script src="asset/js/tiny-slider.js"></script>

        <script>
            var options = {
                'responsive': {
                    items: 2,
                    nav: false,
                    loop: true,
                    slideBy: 'page',
                    mouseDrag: true,
                    autoplay: false,
                    autoplayButtonOutput: false,
                    lazyload: true,
                    touch: true,
                    responsive: {
                        300: {
                            items: 4
                        },
                        600: {
                            items: 6
                        },
                        900: {
                            items: 8
                        },
                        1160: {
                            items: 10
                        }

                    },
                }
            };

            for (var i in options) {
                var item = options[i];
                item.container = '#' + i;
                item.swipeAngle = false;
                if (!item.speed) {
                    item.speed = speed;
                }

                if (doc.querySelector(item.container)) {
                    sliders[i] = tns(options[i]);

                    // call test functions
                    if (isTestPage && initFns[i]) {
                        initFns[i]();
                    }

                    // insert code
                    if (isDemoPage) {
                        doc.querySelector('#' + i + '_wrapper').insertAdjacentHTML('beforeend',
                            '<pre><code class="language-javascript">' + JSON.stringify(item, function (key, value) {
                                if (typeof value === 'object') {
                                    if (value.id) {
                                        return "document.querySelector('#" + value.id + "')";
                                    }
                                }
                                return value;
                            }, '  ') + '<\/code><\/pre>');
                    }

                    // test responsive pages
                } else if (i.indexOf('responsive') >= 0) {
                    if (isTestPage && initFns[i]) {
                        initFns[i]();
                    }
                }
            }

            // goto
            if (doc.querySelector('#base_wrapper')) {
                var goto = doc.querySelector('#base_wrapper .goto-controls'),
                    gotoBtn = goto.querySelector('.button'),
                    gotoInput = goto.querySelector('input');

                gotoBtn.onclick = function (event) {
                    var index = gotoInput.value;
                    sliders['base'].goTo(index);
                };
            }

        </script>


        <br class="clear">
    </div>

</div>







@endsection
