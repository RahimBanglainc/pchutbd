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

            <a href="/" class="breadcum-link">Home</a><span> &nbsp;&gt;&nbsp;</span><a class="breadcum-link"
                href="https://www.bdstall.com/networking-device/">Networking</a><span> &nbsp;&gt;&nbsp;</span><a
                class="breadcum-link-clk" href="https://www.bdstall.com/wireless-router/">Wireless Router</a>
            <a href="https://www.bdstall.com/bn/wireless-router/" class="u-pull-right">Bangla</a>
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

        document.searchProduct.action = "https://www.bdstall.com/search/" + "?term=" + text_string;
        document.searchProduct.submit();
    }

    img = "<img src='";
    img = img + "https://www.bdstall.com/asset/static-image/";
    img = img + "ajax-loader.gif";
    img = img + "'";
    img = img + "/>";

    function selectCategory() {
        http = getHTTPObject();

        if (http.readyState != 4) {
            document.getElementById("showCategory").innerHTML = img;
        }

        var DepartmentID = document.searchProduct.DepartmentID.value;

        site_url = 'https://www.bdstall.com/home/getSearchCategory//' + DepartmentID + '/';

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

        site_url = 'https://www.bdstall.com/home/getItemType//' + CategoryID + '/';

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

        document.filterform.action = "https://www.bdstall.com/" + urlname + "";

        document.filterform.submit();
    }

    function clear_all_filter(urlname) {
        set_cookie();

        document.filterform.action = "https://www.bdstall.com/" + urlname + "";

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
                <a href="https://www.bdstall.com/networking-device/">
                    &lt;&lt; Networking </a>
            </div>

            <div class="row lmenu-sub-head m-bottom">
                <label>Wireless Router &gt;</label>
            </div>



            <div id="menuv-container">

                <ul class="menuv-list accordion lmenu">

                    <div class="menuv-close"><a href="">X Close</a></div>




                    <li id="nav" class="accordion-toggle">

                        <a class="menuv-link">Item</a>
                    </li>

                    <ul class="menuv-submenuv accordion-content">
                        <li><input type="checkbox" id="0"
                                onclick="filterListing('wireless-router','','wireless-router')" name="BrandName[]"
                                value="" checked="" disabled=""><a class="menuv-head"
                                href="https://www.bdstall.com/wireless-router/">All Wireless Router</a></li>
                        <li><input type="checkbox" id="0"
                                onclick="filterListing('wireless-router/portable-wireless-router','','','wireless-router')"
                                name="FeatureValueURL[]" value=""><a class="menuv-head"
                                href="https://www.bdstall.com/wireless-router/portable-wireless-router/">Pocket</a></li>
                    </ul>


                    <div class="row">

                        <li id="nav" class="toggle accordion-toggle">

                            <a class="menuv-link">Brand</a>
                        </li>

                        <ul class="menuv-submenuv accordion-content">
                            <li><input type="checkbox" id="tp-link"
                                    onclick="filterListing('wireless-router/tp-link','','','wireless-router')"
                                    name="BrandURL[]" value="tp-link"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/tp-link/">TP-Link</a></li>
                            <li><input type="checkbox" id="tenda"
                                    onclick="filterListing('wireless-router/tenda','','','wireless-router')"
                                    name="BrandURL[]" value="tenda"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/tenda/">Tenda</a></li>
                            <li><input type="checkbox" id="d-link"
                                    onclick="filterListing('wireless-router/d-link','','','wireless-router')"
                                    name="BrandURL[]" value="d-link"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/d-link/">D-Link</a></li>
                            <li><input type="checkbox" id="mikrotik"
                                    onclick="filterListing('wireless-router/mikrotik','','','wireless-router')"
                                    name="BrandURL[]" value="mikrotik"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/mikrotik/">Mikrotik</a></li>
                            <li><input type="checkbox" id="xiaomi"
                                    onclick="filterListing('wireless-router/xiaomi','','','wireless-router')"
                                    name="BrandURL[]" value="xiaomi"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/xiaomi/">Xiaomi</a></li>
                            <li><input type="checkbox" id="netgear"
                                    onclick="filterListing('wireless-router/netgear','','','wireless-router')"
                                    name="BrandURL[]" value="netgear"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/netgear/">Netgear</a></li>
                            <li><input type="checkbox" id="huawei"
                                    onclick="filterListing('wireless-router/huawei','','','wireless-router')"
                                    name="BrandURL[]" value="huawei"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/huawei/">Huawei</a></li>
                            <li><input type="checkbox" id="asus"
                                    onclick="filterListing('wireless-router/asus','','','wireless-router')"
                                    name="BrandURL[]" value="asus"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/asus/">Asus</a></li>
                            <li><input type="checkbox" id="linksys"
                                    onclick="filterListing('wireless-router/linksys','','','wireless-router')"
                                    name="BrandURL[]" value="linksys"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/linksys/">Linksys</a></li>
                            <li><input type="checkbox" id="belkin"
                                    onclick="filterListing('wireless-router/belkin','','','wireless-router')"
                                    name="BrandURL[]" value="belkin"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/belkin/">Belkin</a></li>
                            <li><input type="checkbox" id="cisco"
                                    onclick="filterListing('wireless-router/cisco','','','wireless-router')"
                                    name="BrandURL[]" value="cisco"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/cisco/">Cisco</a></li>
                            <li><input type="checkbox" id="trendnet"
                                    onclick="filterListing('wireless-router/trendnet','','','wireless-router')"
                                    name="BrandURL[]" value="trendnet"><a class="menuv-head"
                                    href="https://www.bdstall.com/wireless-router/trendnet/">TRENDnet</a></li>
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
            </div>

        </div>

        <div class="nine columns product-cat-box-width">

            <!--this form should be after the left menu-->

            <form name="clientForm" action="" method="post">
                <input type="hidden" name="DepartmentID" value="">
                <input type="hidden" name="CategoryID" value="">

                <input type="hidden" name="PageURL" value="wireless-router">

                <div class="row body-header">
                    <h1>Wireless Router</h1>
                </div>



                <div class="row s-top s-bottom">
                    <div id="menuv-wrapper" class="menuv-icon">
                        <div id="hamburger-menuv u-pull-left">
                            <img src="https://www.bdstall.com/asset/static-image/filter.png" width="25" border="0">
                        </div>
                    </div>

                    <div class="custom-select">
                        <select name="SortID" onchange="select_sort()">
                            <option value="1" selected="">Relevant</option>
                            <option value="2">Low to High</option>
                            <option value="3">High to Low</option>
                        </select>
                    </div>

                    <span class="product-cat-stat">
                        95 Products </span>

                </div>





                <script language="javascript">
                    function addListing(listingID) {
                        url = 'https://www.bdstall.com/searchItemListing/addListingToMyAccount//' + listingID + '/';
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

                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/tp-link-archer-c60-ac1350-wireless-dual-band-router-41546/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_103413.jpg"
                                        alt="TP-Link Archer C60 AC1350 Wireless Dual Band Router"
                                        title="TP-Link Archer C60 AC1350 Wireless Dual Band Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 3,700</div>
                                    <div class="product-update-date">1 month ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/tp-link-archer-c60-ac1350-wireless-dual-band-router-41546/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/tp-link-archer-c60-ac1350-wireless-dual-band-router-41546/">TP-Link
                            Archer C60 AC1350 Wireless Dual Band Router</a>

                        <p>TP-Link Archer C60 AC1350 wireless dual band router has advanced software functions like
                            parental control and guest...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/tp-link-wr841n-300mbps-wifi-n-bandwidth-control-router-17927/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_23003.jpg"
                                        alt="TP-Link WR841N 300Mbps WiFi N Bandwidth Control Router"
                                        title="TP-Link WR841N 300Mbps WiFi N Bandwidth Control Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 1,549</div>
                                    <div class="product-update-date">1 day ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/tp-link-wr841n-300mbps-wifi-n-bandwidth-control-router-17927/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/tp-link-wr841n-300mbps-wifi-n-bandwidth-control-router-17927/">TP-Link
                            WR841N 300Mbps WiFi N Bandwidth Control Router</a>

                        <p>TP-Link TL-WR841N 300Mbps wireless N router for small business and home office networking.
                            Ideal for HD video...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/tp-link-tl-wr840n-300-mbps-firewall-wireless-n-wi-fi-router-20242/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_38042.jpg"
                                        alt="TP Link TL-WR840N 300 Mbps Firewall Wi-Fi Router"
                                        title="TP Link TL-WR840N 300 Mbps Firewall Wi-Fi Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 1,200</div>
                                    <div class="product-update-date">2 days ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/tp-link-tl-wr840n-300-mbps-firewall-wireless-n-wi-fi-router-20242/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/tp-link-tl-wr840n-300-mbps-firewall-wireless-n-wi-fi-router-20242/">TP
                            Link TL-WR840N 300 Mbps Firewall Wi-Fi Router</a>

                        <p>TP Link WR840N wireless N wi-fi hi-speed router has 300 Mbps wireless Internet transmission
                            rate, easy home wireless...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/mikrotik-rb750r2-10100-ethernet-46mb-ram-wired-router-44557/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_82152.jpg"
                                        alt="Mikrotik RB750r2 10/100 Ethernet 46MB RAM Wired Router"
                                        title="Mikrotik RB750r2 10/100 Ethernet 46MB RAM Wired Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 3,800</div>
                                    <div class="product-update-date">1 month ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/mikrotik-rb750r2-10100-ethernet-46mb-ram-wired-router-44557/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/mikrotik-rb750r2-10100-ethernet-46mb-ram-wired-router-44557/">Mikrotik
                            RB750r2 10/100 Ethernet 46MB RAM Wired Router</a>

                        <p>CPU nominal frequency 850 MHz, RAM 64 MB, 10/100 Ethernet ports 5, power jack, PoE, CPU core
                            count 1, architecture...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/d-link-dir-615-wireless-n300-2-antenna-300-mbps-router-32038/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_55043.jpg"
                                        alt="D-Link DIR-615 Wireless N300 2 Antenna 300 Mbps Router"
                                        title="D-Link DIR-615 Wireless N300 2 Antenna 300 Mbps Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 1,200</div>
                                    <div class="product-update-date">6 days ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/d-link-dir-615-wireless-n300-2-antenna-300-mbps-router-32038/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/d-link-dir-615-wireless-n300-2-antenna-300-mbps-router-32038/">D-Link
                            DIR-615 Wireless N300 2 Antenna 300 Mbps Router</a>

                        <p>D-Link DIR-615 wireless N300 router has 4 LAN ports, 1 WAN port, 5dBi external antenna,
                            300Mbps speed, wireless...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/tenda-f3-wifi-router-300-mbps-easy-setup-high-wireless-range-24629/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_100516.jpeg"
                                        alt="Tenda F3 WiFi Router 300 Mbps Easy Setup High Wireless Range"
                                        title="Tenda F3 WiFi Router 300 Mbps Easy Setup High Wireless Range">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 1,500</div>
                                    <div class="product-update-date">23 hours ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/tenda-f3-wifi-router-300-mbps-easy-setup-high-wireless-range-24629/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/tenda-f3-wifi-router-300-mbps-easy-setup-high-wireless-range-24629/">Tenda
                            F3 WiFi Router 300 Mbps Easy Setup High Wireless Range</a>

                        <p>Tenda F3 wifi router has 300 mbps wireless speed, 3x 5dBi external antenna, WPS / reset
                            button, support WPA / WPA2 /...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/huawei-airtel-e5573cs-609-4g-150-mbps-wireless-wifi-router-41373/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_75420.jpg"
                                        alt="Huawei Airtel E5573Cs-609 4G 150 Mbps Wireless WiFi Router"
                                        title="Huawei Airtel E5573Cs-609 4G 150 Mbps Wireless WiFi Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 4,500</div>
                                    <div class="product-update-date">2 days ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/huawei-airtel-e5573cs-609-4g-150-mbps-wireless-wifi-router-41373/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/huawei-airtel-e5573cs-609-4g-150-mbps-wireless-wifi-router-41373/">Huawei
                            Airtel E5573Cs-609 4G 150 Mbps Wireless WiFi Router</a>

                        <p>Huawei Airtel E5573Cs-609 4G WiFi router has 802.11 standards and protocols, single SIM,
                            firewall, up to 50 Mbps upload...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/huawei-airtel-e5573cs-609-4g-150-mbps-lte-wi-fi-router-43408/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_79750.jpg"
                                        alt="Huawei Airtel E5573Cs-609 4G 150 Mbps LTE Wi-Fi Router"
                                        title="Huawei Airtel E5573Cs-609 4G 150 Mbps LTE Wi-Fi Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 4,500</div>
                                    <div class="product-update-date">2 days ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/huawei-airtel-e5573cs-609-4g-150-mbps-lte-wi-fi-router-43408/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/huawei-airtel-e5573cs-609-4g-150-mbps-lte-wi-fi-router-43408/">Huawei
                            Airtel E5573Cs-609 4G 150 Mbps LTE Wi-Fi Router</a>

                        <p>Huawei Airtel E5573Cs-609 4G LTE hospot WiFi router has up to 150 Mbps download speed, 802.11
                            standards and protocols,...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/mikrotik-rb4011igs-rm-10-ports-1u-rackmount-wired-router-43517/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_80033.jpg"
                                        alt="MikroTik RB4011iGS-RM 10 Ports 1U Rackmount Wired Router"
                                        title="MikroTik RB4011iGS-RM 10 Ports 1U Rackmount Wired Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 19,500</div>
                                    <div class="product-update-date">1 month ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/mikrotik-rb4011igs-rm-10-ports-1u-rackmount-wired-router-43517/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/mikrotik-rb4011igs-rm-10-ports-1u-rackmount-wired-router-43517/">MikroTik
                            RB4011iGS-RM 10 Ports 1U Rackmount Wired Router</a>

                        <p>MikroTik RB4011iGS-RM wired router has quad core cortex A15 CPU, 1 GB RAM, 512 MB storage, 10
                            gigabit ports, 1400 MHz...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/comfast-gigabit-ac-authentication-gateway-routing-wifi-48359/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_91009.jpg"
                                        alt="Comfast Gigabit AC Authentication Gateway Routing WiFi"
                                        title="Comfast Gigabit AC Authentication Gateway Routing WiFi">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 21,300</div>
                                    <div class="product-update-date">1 month ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/comfast-gigabit-ac-authentication-gateway-routing-wifi-48359/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/comfast-gigabit-ac-authentication-gateway-routing-wifi-48359/">Comfast
                            Gigabit AC Authentication Gateway Routing WiFi</a>

                        <p>Network core and network Hub, multi wan access, automatically enable alternate routes,
                            intelligent line distribution,...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/altai-c1n-45-cross-polarized-patch-antenna-wi-fi-ap-cpe-42892/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_78581.jpg"
                                        alt="Altai C1n 45° Cross-Polarized Patch Antenna Wi-Fi AP / CPE"
                                        title="Altai C1n 45° Cross-Polarized Patch Antenna Wi-Fi AP / CPE">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 8,400</div>
                                    <div class="product-update-date">1 day ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/altai-c1n-45-cross-polarized-patch-antenna-wi-fi-ap-cpe-42892/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/altai-c1n-45-cross-polarized-patch-antenna-wi-fi-ap-cpe-42892/">Altai
                            C1n 45° Cross-Polarized Patch Antenna Wi-Fi AP / CPE</a>

                        <p>Altai C1n super long range wireless access point / CPE has patented signal processing for
                            improved radio performance in...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/mikrotik-ccr1036-8g-2sem-16gb-ram-cloud-core-routerboard-21692/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_31697.jpg"
                                        alt="Mikrotik CCR1036-8G-2S+EM 16GB RAM Cloud Core Routerboard"
                                        title="Mikrotik CCR1036-8G-2S+EM 16GB RAM Cloud Core Routerboard">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 128,000</div>
                                    <div class="product-update-date">1 month ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/mikrotik-ccr1036-8g-2sem-16gb-ram-cloud-core-routerboard-21692/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/mikrotik-ccr1036-8g-2sem-16gb-ram-cloud-core-routerboard-21692/">Mikrotik
                            CCR1036-8G-2S+EM 16GB RAM Cloud Core Routerboard</a>

                        <p>Mikrotik CCR1036-8G-2S+EM wired cloud core routerboard has 1.2 GHz CPU nominal frequency, SFP
                            DDMI, 36 CPU core count,...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/mikrotik-rb4011igs-rm-rackmount-1u-wired-route-47393/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_88113.jpg"
                                        alt="MikroTik RB4011iGS-RM Rackmount 1U Wired Route"
                                        title="MikroTik RB4011iGS-RM Rackmount 1U Wired Route">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 17,000</div>
                                    <div class="product-update-date">2 days ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/mikrotik-rb4011igs-rm-rackmount-1u-wired-route-47393/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a href="https://www.bdstall.com/details/mikrotik-rb4011igs-rm-rackmount-1u-wired-route-47393/">MikroTik
                            RB4011iGS-RM Rackmount 1U Wired Route</a>

                        <p>MikroTik RB4011iGS-RM wired router has 10 gigabit ports, 1400 MHz CPU nominal frequency, 1U
                            rackmount enclosure, quad...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/netgear-r8000-wireless-3200-mbps-dual-band-usb-wi-fi-router-21743/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_31678.jpg"
                                        alt="Netgear R8000 Wireless 3200 Mbps Dual Band USB Wi-Fi Router"
                                        title="Netgear R8000 Wireless 3200 Mbps Dual Band USB Wi-Fi Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 27,000</div>
                                    <div class="product-update-date">1 month ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/netgear-r8000-wireless-3200-mbps-dual-band-usb-wi-fi-router-21743/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/netgear-r8000-wireless-3200-mbps-dual-band-usb-wi-fi-router-21743/">Netgear
                            R8000 Wireless 3200 Mbps Dual Band USB Wi-Fi Router</a>

                        <p>Netgear R8000 wireless AC3200 Mbps dual band wi-fi router has five 10/100/1000 gigabit
                            ethernet ports, 2 USB ports,...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/mikrotik-ccr1036-12g-4s-12-port-wired-cloud-core-router-22917/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_34399.jpg"
                                        alt="Mikrotik CCR1036-12G-4S 12-Port Wired Cloud Core Router"
                                        title="Mikrotik CCR1036-12G-4S 12-Port Wired Cloud Core Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 77,000</div>
                                    <div class="product-update-date">7 days ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/mikrotik-ccr1036-12g-4s-12-port-wired-cloud-core-router-22917/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/mikrotik-ccr1036-12g-4s-12-port-wired-cloud-core-router-22917/">Mikrotik
                            CCR1036-12G-4S 12-Port Wired Cloud Core Router</a>

                        <p>Wired cloud core router, 36 core Tilera CPU, 1U rackmount case, 4 SFP ports, 12-gigabit
                            ethernet ports, serial console...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/mikrotik-ccr1009-7g-1c-1s-7-port-cloud-core-router-44584/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_82247.jpg"
                                        alt="Mikrotik CCR1009-7G-1C-1S+ 7 Port Cloud Core Router"
                                        title="Mikrotik CCR1009-7G-1C-1S+ 7 Port Cloud Core Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 43,000</div>
                                    <div class="product-update-date">1 month ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/mikrotik-ccr1009-7g-1c-1s-7-port-cloud-core-router-44584/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/mikrotik-ccr1009-7g-1c-1s-7-port-cloud-core-router-44584/">Mikrotik
                            CCR1009-7G-1C-1S+ 7 Port Cloud Core Router</a>

                        <p>1U rackmount, 7 x gigabit ethernet, 1 x combo port / SFP or gigabit ethernet, 1 x SFP+ cage,
                            9 cores x 1.2GHz CPU, 2GB...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/mercusys-mw301r-300-mbps-2-antenna-wifi-router-51903/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_101566.jpg"
                                        alt="Mercusys MW301R 300 Mbps 2 Antenna WiFi Router"
                                        title="Mercusys MW301R 300 Mbps 2 Antenna WiFi Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 950</div>
                                    <div class="product-update-date">3 days ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/mercusys-mw301r-300-mbps-2-antenna-wifi-router-51903/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a href="https://www.bdstall.com/details/mercusys-mw301r-300-mbps-2-antenna-wifi-router-51903/">Mercusys
                            MW301R 300 Mbps 2 Antenna WiFi Router</a>

                        <p>Broad wireless coverage, compatible with IPv6, hassle free installation, stable 300 Mbps
                            speed for video streaming,...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/netgear-r7500-ac2350-mbps-wave-2-wi-fi-dual-core-router-21744/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_31773.jpg"
                                        alt="Netgear R7500 AC2350 Mbps Wave 2 Wi-Fi Dual Core Router"
                                        title="Netgear R7500 AC2350 Mbps Wave 2 Wi-Fi Dual Core Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 16,500</div>
                                    <div class="product-update-date">1 month ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/netgear-r7500-ac2350-mbps-wave-2-wi-fi-dual-core-router-21744/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/netgear-r7500-ac2350-mbps-wave-2-wi-fi-dual-core-router-21744/">Netgear
                            R7500 AC2350 Mbps Wave 2 Wi-Fi Dual Core Router</a>

                        <p>Netgear R7500 wi-fi wireless dual-band router has quad-stream AC2350 wi-fi up to 2.33 Gbps,
                            next generation wave 2...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/mikrotik-routerboard-rb450gx4-5-port-gigabit-ethernet-router-44558/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_82200.jpg"
                                        alt="MikroTik RouterBoard RB450Gx4 5-Port Gigabit Ethernet Router"
                                        title="MikroTik RouterBoard RB450Gx4 5-Port Gigabit Ethernet Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 10,200</div>
                                    <div class="product-update-date">1 month ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/mikrotik-routerboard-rb450gx4-5-port-gigabit-ethernet-router-44558/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a
                            href="https://www.bdstall.com/details/mikrotik-routerboard-rb450gx4-5-port-gigabit-ethernet-router-44558/">MikroTik
                            RouterBoard RB450Gx4 5-Port Gigabit Ethernet Router</a>

                        <p>ARM 32bit architecture, 5 ethernet ports, IPQ-4019 CPU, 716MHz CPU nominal frequency, 1GB
                            RAM, 512MB nand type storage,...</p>

                    </div>

                </div>
                <div class="row product-cat-box s-top">

                    <div class="six columns product-cat-box-img">
                        <div class="row">
                            <div class="seven columns">
                                <a
                                    href="https://www.bdstall.com/details/tenda-ac5-ac1200-dual-band-smart-wifi-router-52667/">
                                    <img src="https://www.bdstall.com/asset/product-image/big_103873.jpg"
                                        alt="Tenda AC5 AC1200 Dual Band Smart WiFi Router"
                                        title="Tenda AC5 AC1200 Dual Band Smart WiFi Router">
                                </a> </div>
                            <div class="five columns">
                                <div class="product-price-group">
                                    <div class="product-price">৳ 2,650</div>
                                    <div class="product-update-date">1 month ago</div>
                                    <div class="product-cat-box-button">
                                        <a
                                            href="https://www.bdstall.com/details/tenda-ac5-ac1200-dual-band-smart-wifi-router-52667/">
                                            <div class="button-link">Details</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="six columns product-cat-box-text">
                        <a href="https://www.bdstall.com/details/tenda-ac5-ac1200-dual-band-smart-wifi-router-52667/">Tenda
                            AC5 AC1200 Dual Band Smart WiFi Router</a>

                        <p>Concurrent dual band 2.4 GHz &amp; 5 GHz, 1200Mbps 801.11ac, 5dBi external antenna x 4, 1GHz
                            high-frequency CPU made with...</p>

                    </div>

                </div>

                <div class="s-top">
                    <div class="pagination"><span class="paginationCurLink">1</span><span class="page-digit-link"><a
                                href="https://www.bdstall.com/wireless-router/2/">2</a></span><span
                            class="page-digit-link"><a
                                href="https://www.bdstall.com/wireless-router/3/">3</a></span><span
                            class="page-digit-link"><a
                                href="https://www.bdstall.com/wireless-router/4/">4</a></span><span
                            class="page-next-link"><a href="https://www.bdstall.com/wireless-router/2/">Next</a></span>
                    </div>
                </div>



                <div class="q-first" style="margin-top:5em;">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.bdstall.com/wireless-router/"
                        target="_blank">
                        <img alt="Share on Facebook" title="Share on Facebook"
                            src="https://www.bdstall.com/asset/static-image/fb_share.jpg">
                    </a>
                    <a target="_blank"
                        href="http://twitter.com/home?status=https://www.bdstall.com/wireless-router/"><img
                            alt="Post on Twitter" title="Post on Twitter"
                            src="https://www.bdstall.com/asset/static-image/twitter_share.jpg"></a>
                </div>




                <div class="box g-top">

                    <h2 class="b-bottom">
                        Top Wireless Router Price List in Bangladesh

                    </h2>

                    <table cellpadding="0" cellspacing="0">

                        <tbody>
                            <tr class="heading">
                                <th>

                                    Best Wireless Router List in July, 2020

                                </th>

                                <th style="text-align:right">
                                    Latest Price </th>
                            </tr>


                            <tr>
                                <td>
                                    <a
                                        href="https://www.bdstall.com/details/mikrotik-rb750r2-10100-ethernet-46mb-ram-wired-router-44557/">Mikrotik
                                        RB750r2 10/100 Ethernet 46MB RAM Wired Router</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ 3,800 </td>
                            </tr>


                            <tr>
                                <td>
                                    <a
                                        href="https://www.bdstall.com/details/d-link-dir-615-wireless-n300-2-antenna-300-mbps-router-32038/">D-Link
                                        DIR-615 Wireless N300 2 Antenna 300 Mbps Router</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ 1,200 </td>
                            </tr>


                            <tr>
                                <td>
                                    <a
                                        href="https://www.bdstall.com/details/tenda-f3-wifi-router-300-mbps-easy-setup-high-wireless-range-24629/">Tenda
                                        F3 WiFi Router 300 Mbps Easy Setup High Wireless Range</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ 1,500 </td>
                            </tr>


                            <tr>
                                <td>
                                    <a
                                        href="https://www.bdstall.com/details/huawei-airtel-e5573cs-609-4g-150-mbps-wireless-wifi-router-41373/">Huawei
                                        Airtel E5573Cs-609 4G 150 Mbps Wireless WiFi Router</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ 4,500 </td>
                            </tr>


                            <tr>
                                <td>
                                    <a
                                        href="https://www.bdstall.com/details/huawei-airtel-e5573cs-609-4g-150-mbps-lte-wi-fi-router-43408/">Huawei
                                        Airtel E5573Cs-609 4G 150 Mbps LTE Wi-Fi Router</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ 4,500 </td>
                            </tr>


                            <tr>
                                <td>
                                    <a
                                        href="https://www.bdstall.com/details/mikrotik-rb4011igs-rm-10-ports-1u-rackmount-wired-router-43517/">MikroTik
                                        RB4011iGS-RM 10 Ports 1U Rackmount Wired Router</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ 19,500 </td>
                            </tr>


                            <tr>
                                <td>
                                    <a
                                        href="https://www.bdstall.com/details/comfast-gigabit-ac-authentication-gateway-routing-wifi-48359/">Comfast
                                        Gigabit AC Authentication Gateway Routing WiFi</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ 21,300 </td>
                            </tr>


                            <tr>
                                <td>
                                    <a
                                        href="https://www.bdstall.com/details/altai-c1n-45-cross-polarized-patch-antenna-wi-fi-ap-cpe-42892/">Altai
                                        C1n 45° Cross-Polarized Patch Antenna Wi-Fi AP / CPE</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ 8,400 </td>
                            </tr>


                            <tr>
                                <td>
                                    <a
                                        href="https://www.bdstall.com/details/mikrotik-ccr1036-8g-2sem-16gb-ram-cloud-core-routerboard-21692/">Mikrotik
                                        CCR1036-8G-2S+EM 16GB RAM Cloud Core Routerboard</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ 128,000 </td>
                            </tr>


                            <tr>
                                <td>
                                    <a
                                        href="https://www.bdstall.com/details/mikrotik-rb4011igs-rm-rackmount-1u-wired-route-47393/">MikroTik
                                        RB4011iGS-RM Rackmount 1U Wired Route</a>
                                </td>

                                <td style="text-align:right">
                                    ৳ 17,000 </td>
                            </tr>



                        </tbody>
                    </table>

                </div>



                <div class="q">
                    <img src="https://www.bdstall.com/asset/static-image/tick-notes.jpeg">
                    <label>Wireless Router Buying in Bangladesh</label>
                    <p class="b-top"></p>
                    <p><strong>What is the range of the router ?</strong></p>

                    <p>The range of the WiFi router is 300&nbsp;feet in indoor and 1000&nbsp;feet in open area at 2.4
                        GHz band.</p>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>
                    <p></p>
                </div>




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
        <script src="https://www.bdstall.com/asset/js/tiny-slider.js"></script>

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
