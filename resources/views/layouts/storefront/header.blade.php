{{-- header start --}}

<div class="main-header">
    <div class="container">

        <a href="{{ route('index') }}">


            <img src="{{asset('/'.App\Settings::find(1)->head_img)}}" alt="pchutbd.com" title="pchutbd.com">

        </a>

        <div class="spinner-master">
            <input type="checkbox" id="spinner-form">
            <label for="spinner-form" class="spinner-spin">
                <div class="spinner diagonal part-1"></div>
                <div class="spinner horizontal"></div>
                <div class="spinner diagonal part-2"></div>
            </label>

        </div>

        <input type="hidden" name="DepartmentID" value="-1">
        <input type="hidden" name="ItemTypeID" value="-1">
        <a href="##search_box" class="search-btn" id="search"><img
                src="{{ asset('img/site-search-icon.png') }}">
        </a>

        <form class="search_box" id="search_box" method="GET" action="{{route('search')}}">
            <input name="query" placeholder="Search item" value="" type="text">
            <input class="search_icon" value="Search" type="submit">
        </form>


        <div class="main-header-link">

            @guest
                @if(Route::has('register'))
                    <div class="main-header-desk-link">
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                @endif

                <a href="{{ route('login') }}">
                    <div class="main-header-login-link">{{ __('Login') }}</div>
                </a>

            @else
                <a href="{{ route('login') }}">
                    <div class="main-header-login-link">Home</div>
                </a>
            @endguest


            <div class="main-header-desk-link"><a href="{{ route('blog') }}">Blog</a></div>
        </div>



    </div>


</div>


<nav id="menu" class="menu top-menu">
    <ul class="menu-pd">

        @foreach(App\Category::all() as $cat)

            <li class="has-submenu"><a href="{{route('cat.view', $cat->slug)}}">{{$cat->name}}
                </a>


                <ul class="sub-menu">
                    @foreach(App\Subcategory::where('Category_id', $cat->id)->get() as $subcat)

                        <li>
                            <a href="{{route('catitem.view', $subcat->slug)}}">{{$subcat->name}}</a>
                        </li>

                    @endforeach

                </ul>
            </li>

        @endforeach


    </ul>
</nav>
{{-- Header end --}}
