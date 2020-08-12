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

            <a href="{{ route('index') }}" class="breadcum-link">Home</a><span> &nbsp;&gt;
            </span><span class="breadcum-link-clk">{{ $category->name }}</span>

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

        <div class="three columns box-menu-device">


            <div class="row lmenu-head">
                <a href="{{ route('index') }}">
                    &lt;&lt; Home </a>
            </div>

            <div class="row lmenu-sub-head m-bottom">
                <label>Computer &gt;</label>
            </div>

            @foreach($subcategories as $sublist)

                <span class="filters box-menu-panel">
                    <label>
                        <a href="{{ route('catitem.view', $sublist->slug) }}">{{ $sublist->name }}
                        </a>
                    </label>
                </span>
                <br>

            @endforeach



        </div>

        <div class="nine columns product-cat-box-width">

            <!--this form should be after the left menu-->

            <form name="clientForm" action="" method="post">
                <input type="hidden" name="DepartmentID" value="1">
                <input type="hidden" name="CategoryID" value="">

                <input type="hidden" name="PageURL" value="">





                <div class="row body-header">
                    <h1>Computer</h1>
                </div>


                <div class="row">
                    <div id="responsive">

                    </div>
                </div>




                <div class="row s-top s-bottom">
                    <div id="menuv-wrapper" class="menuv-icon">
                        <div id="hamburger-menuv u-pull-left">
                            <img src="https://www.bdstall.com/asset/static-image/filter.png" width="25" border="0">
                        </div>
                    </div>

                    <div class="custom-select">

                    </div>

                    <span class="product-cat-stat">
                    </span>

                </div>


                <div class="row">

                    @foreach ($subcategories as $subcat)

                    <a href="{{route('catitem.view', $subcat->slug)}}">
                        <div class="box-menu">
                            <div class="box-menu-img">
                                <img src="{{asset('storage/subcategory/'.$subcat->img)}}">
                            </div>
                            <div class="box-menu-text">
                                {{$subcat->name}}
                            </div>
                            <div class="box-menu-stat">
                                total {{App\Item::where('subcategory_id', $subcat->id)->count()}} items
                            </div>
                        </div>
                    </a>
                    @endforeach


                </div>



                <div class="q-first" style="margin-top:5em;">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{route('catitem.view',$category->slug)}}"
                        target="_blank">
                        <img alt="Share on Facebook" title="Share on Facebook"
                            src="https://www.bdstall.com/asset/static-image/fb_share.jpg">
                    </a>
                    <a target="_blank"
                        href="http://twitter.com/home?status={{route('catitem.view',$category->slug)}}"><img
                            alt="Post on Twitter" title="Post on Twitter"
                            src="https://www.bdstall.com/asset/static-image/twitter_share.jpg"></a>
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
