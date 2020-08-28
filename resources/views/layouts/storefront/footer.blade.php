
{{-- footer Start Here  --}}
<script>
    var doc = document,
        slideList = doc.querySelectorAll('.slider-container > div'),
        pageNavContainer = doc.querySelector('.nav'),
        pageNav = doc.querySelector('.nav ul'),
        toggleHandle = doc.querySelector('.nav-toggle-handle'),
        divider = window.innerHeight / 2,
        scrollTimer,
        resizeTimer;

    // toggleHandle.onclick = function () {
    //     var classN = pageNavContainer.className;
    //     pageNavContainer.className = (classN.indexOf(' active') > 0) ? classN.replace(' active', '') : classN +
    //         ' active';
    // };

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
<script src="{{asset('storefront/assets/js/tiny-slider.js')}}"></script>

<script>
    var options = {
        'responsive': {
            items: 2,
            nav: false,
            loop: true,
            slideBy: 'page',
            mouseDrag: true,
            autoplay: true,
            autoplayButtonOutput: false,
            speed: 3000,
            lazyload: true,
            touch: true,
            responsive: {
                300: {
                    items: 2
                },
                600: {
                    items: 3
                },
                900: {
                    items: 4
                },
                1160: {
                    items: 5
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

<div class="row footer">
    <div class="container">
        <div class="row">
            <div class="three columns m-top">
                <label>Popular Department</label>
                @foreach (App\Category::take(6)
                ->get(); as $focat)

            <div><a href="{{route('cat.view', $focat->slug)}}"> {{$focat->name}} </a></div>

                @endforeach

                <div><a href="{{route('stallList')}}">Online Stall</a></div>

            </div>

            <div class="three columns m-top">
                <label>Knowledge Base</label>
                <div><a href="{{route('blog')}}">Blog</a></div>
                <div><a href="{{ App\Settings::find(1)->faq }}">FAQ</a></div>
            </div>


            <div class="three columns m-top">
                <div><a href="{{route('index')}}"><img src="{{asset('/'.App\Settings::find(1)->foo_img)}}" width="30%"></a>
                </div>
                <div><a href="{{ App\Settings::find(1)->contact }}">Contact Us</a></div>
                <div><a href="{{ App\Settings::find(1)->career }}">Career</a></div>
                <div><a href="{{ App\Settings::find(1)->privacy }}">Site Map</a></div>
                <div><a href="{{ App\Settings::find(1)->privacy }}">Privacy Policy</a></div>
                <div><a href="{{ App\Settings::find(1)->terms }}">Terms &amp; Conditions</a></div>
            </div>

            <div class="three columns m-top">
                <label>Download App</label>
                <div><img src="{{asset('storefront/assets/img/google_play_icon.png')}}"></div>

                <div class="s-top"><label>Follow us</label></div>

                <div class="social">
                    <a href="{{ App\Settings::find(1)->fb }}" target="_BLANK"><img src="{{asset('storefront/assets/img/fb_icon.png')}}"></a>
                    {{-- <a href="https://twitter.com/" target="_BLANK"><img src="#asset/static-image/twitter_icon.png"></a> --}}
                    <a href="{{ App\Settings::find(1)->instra }}" target="_BLANK"><img
                            src="{{asset('storefront/assets/img/instagram_icon.png')}}"></a>
                    <a href="{{ App\Settings::find(1)->youtube }}" target="_BLANK"><img
                            src="{{asset('storefront/assets/img/youtube_icon.png')}}"></a>
                    <a href="{{ App\Settings::find(1)->pinterest }}" target="_BLANK"><img
                            src="{{asset('storefront/assets/img/pinterest_icon.png')}}"></a>
                </div>

            </div>
        </div>
    </div>

    <div class="row footer-line b-bottom" style="color:white">
        <div class="container">
            {{ App\Settings::find(1)->copyright }} </div>
    </div>



    <script src="{{asset('storefront/assets/js/jquery-1.2.pack.js')}}" integrity="sha256-Jlj95HpIFgrhbOHaU8Q6ziim4lqaMuyGN/TCiwnjLRc=" crossorigin="anonymous"></script>
    <script>
        http = getHTTPObject();

        function isNumeric(sText) {
            var ValidChars = "0123456789.";
            var IsNumber = true;
            var Char;

            for (i = 0; i < sText.length && IsNumber == true; i++) {
                Char = sText.charAt(i);
                if (ValidChars.indexOf(Char) == -1) {
                    IsNumber = false;
                }
            }
            return IsNumber;

        }

        function echeck(str) {
            var at = "@"
            var dot = "."
            var lat = str.indexOf(at)
            var lstr = str.length
            var ldot = str.indexOf(dot)
            if (str.indexOf(at) == -1) {
                return false
            }

            if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {
                return false
            }

            if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {
                return false
            }

            if (str.indexOf(at, (lat + 1)) != -1) {
                return false
            }

            if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {
                return false
            }

            if (str.indexOf(dot, (lat + 2)) == -1) {
                return false
            }

            if (str.indexOf(" ") != -1) {
                return false
            }

            return true
        }

        $('ul li:has(ul)').addClass('has-submenu');
        $('ul li ul').addClass('sub-menu');
        $('ul.dropdown li').hover(function () {
            $(this).addClass('hover');
        }, function () {
            $(this).removeClass('hover');
        });
        var $menu = $('#menu'),
            $menulink = $('#spinner-form'),
            $search = $('#search'),
            $search_box = $('.search_box'),
            $menuTrigger = $('.has-submenu > a');
        $menulink.click(function (e) {
            $menulink.toggleClass('active');
            $menu.toggleClass('active');
            if ($search.hasClass('active')) {
                $('.menu.active').css('padding-top', '50px');
            }
        });
        $search.click(function (e) {
            e.preventDefault();
            $search_box.toggleClass('active');
        });
        $menuTrigger.click(function (e) {
            if ($(window).width() < 900) {
                e.preventDefault();
            }
            var t = $(this);
            t.toggleClass('active').next('ul').toggleClass('active');
        });
        $('ul li:has(ul)');

        $(function () {
            function slideMenu() {
                var activeState = $("#menuv-container .menuv-list").hasClass("active");
                $("#menuv-container .menuv-list").animate({
                        left: activeState ? "0%" : "-100%"
                    },
                    400
                );
            }
            $("#menuv-wrapper").click(function (event) {
                event.stopPropagation();
                $("#hamburger-menuv").toggleClass("open");
                $("#menuv-container .menuv-list").toggleClass("active");
                slideMenu();

                $("body").toggleClass("overflow-hidden");
            });

            $(".menuv-list").find(".accordion-toggle").click(function () {
                $(this).next().toggleClass("open").slideToggle("fast");
                $(this).toggleClass("active-tab").find(".menuv-link").toggleClass("active");

                $(".menuv-list .accordion-content")
                    .not($(this).next())
                    .slideUp("fast")
                    .removeClass("open");
                $(".menuv-list .accordion-toggle")
                    .not(jQuery(this))
                    .removeClass("active-tab")
                    .find(".menuv-link")
                    .removeClass("active");
            });

            $(window).resize(function () {
                if ($(window).width() >= 900) {
                    $(".menuv-list")
                        .addClass("active");
                    $(".search_box")
                        .removeClass("active");
                }
            });


        });

    </script>



</div>

