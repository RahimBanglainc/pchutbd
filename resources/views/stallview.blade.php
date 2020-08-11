@extends('layouts.storefront.layout')

@section('title','Home')

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


<form name="clientForm" action="https://www.bdstall.com/advancedSearch//" method="post" enctype="multipart/form-data">

    <input type="hidden" name="DepartmentID" value="-1">
    <input type="hidden" name="CategoryID" value="-1">
    <input type="hidden" name="ItemTypeID" value="-1">
    <input type="hidden" name="minPrice" value="">
    <input type="hidden" name="maxPrice" value="">
    <input type="hidden" name="StallID" value="-1">
    <input type="hidden" name="BrandID" value="-1">

    <div class="container">

        <div class="row">
            <div class="breadcum s-bottom">

                <a class="breadcum-link" href="{{ route('index') }}">Home</a> -&gt; <a
                    href="{{ route('stallList') }}" class="breadcum-link-clk">Stall List</a>
            </div>
        </div>

        <div class="body-header">
            <h1>{{ $stall->name }}</h1>
        </div>

        <div class="row">

            <div class="three columns stall-details">

                <a href="{{ route('stall.show', $stall->slug) }}"><img style="width: 75px"
                        src="{{ Storage::disk('public')->url('stall/'.$stall->img) }}"
                        alt="{{ $stall->name }}" alt="{{ $stall->name }}" title="{{ $stall->name }}">
                </a>

                <label class="b-top">Stall No - {{ $stall->id }}</label>

                <p>

                    {{ $stall->address }}<br>

                    {{ $stall->area }}, {{ $stall->city }},
                    {{ $stall->country }}<br>

                    {{ $stall->person_name }}<br>

                </p>

                <!--branch info-->




                <div class="product-desc-phone b-bottom">

                    <div class="row s-bottom" style="width:100%">
                        <div class="u-pull-left" style="width:5em">Hotline1</div>
                        <div class="u-pull-left">
                            <a href="tel:{{ $stall->hotline1 }}">
                                <img src="{{ asset('img/phone-icon.png') }}">
                                {{ $stall->hotline1 }} </a>
                        </div>
                    </div>

                    <div class="row s-bottom" style="width:100%">
                        <div class="u-pull-left" style="width:5em">Hotline2</div>
                        <div class="u-pull-left">
                            <a href="tel:{{ $stall->hotline2 }}">
                                <img src="{{ asset('img/phone-icon.png') }}">
                                {{ $stall->hotline2 }} </a>
                        </div>
                    </div>

                </div>



            </div>

            <div class="nine columns">


                <!--       <div class="row">

            <a href="https://www.bdstall.com/details/toshiba-e-studio-2303am-digital-all-in-one-photocopier-40977/">

                <div class="stall-product-box">
                <div class="product-box-img">
                    <img src="https://www.bdstall.com/asset/product-image/big_74362.jpg">
                </div>
                <div class="product-box-item-type">
                     Toshiba e-Studio 2303AM...                    </div>

                <div class="product-box-price">
                     ৳ 44,000                    </div>
            </div>

            </a>


            <a href="https://www.bdstall.com/details/toshiba-e-studio-2523a-desktop-copier-49796/">

                <div class="stall-product-box">
                <div class="product-box-img">
                    <img src="https://www.bdstall.com/asset/product-image/big_95047.jpg">
                </div>
                <div class="product-box-item-type">
                     Toshiba e-Studio 2523A...                    </div>

                <div class="product-box-price">
                     ৳ 39,000                    </div>
            </div>

            </a>


            <a href="https://www.bdstall.com/details/toshiba-e-studio-2303a-compact-23-ppm-photostat-machine-28733/">

                <div class="stall-product-box">
                <div class="product-box-img">
                    <img src="https://www.bdstall.com/asset/product-image/big_47834.jpg">
                </div>
                <div class="product-box-item-type">
                     Toshiba e-Studio 2303A...                    </div>

                <div class="product-box-price">
                     ৳ 45,000                    </div>
            </div>

            </a>


            <a href="https://www.bdstall.com/details/toshiba-e-studio-2809a-black-and-white-28-ppm-photocopier-28735/">

                <div class="stall-product-box">
                <div class="product-box-img">
                    <img src="https://www.bdstall.com/asset/product-image/big_47832.jpg">
                </div>
                <div class="product-box-item-type">
                     Toshiba e-Studio 2809A...                    </div>

                <div class="product-box-price">
                     ৳ 80,000                    </div>
            </div>

            </a>

        </div>-->
                @if($stall->item_exp >= $my_time)

                <div class="row"><span class="page-stat">Item 1-{{ $items->count() }} of
                        {{ $itemCount->count() }}</span></div>

                <div class="m-top">
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



                    @foreach($items as $item)
                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="{{ route('item.view', $item->slug) }}">
                                            <img src="{{ asset('storage/item/'.$item->img) }}"
                                                alt="{{ $item->title }}" title="{{ $item->title }}">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ {{ $item->price }}</div>
                                            <div class="product-update-date">
                                                {{ $item->updated_at->diffForHumans() }}</div>
                                            <div class="product-cat-box-button">
                                                <a
                                                    href="{{ route('item.view', $item->slug) }}">
                                                    <div class="button-link">Details</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a
                                    href="{{ route('item.view', $item->slug) }}">{{ $item->title }}</a>

                                <p>{!! \Illuminate\Support\str::limit(strip_tags($item->description), 200) !!}</p>

                            </div>

                        </div>


                    @endforeach


                </div>


                <div class="row">
                    {{ $items->links() }}
                </div>
                @else

                @foreach($itemOne as $item)
                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="{{ route('item.view', $item->slug) }}">
                                            <img src="{{ asset('storage/item/small/'.$item->img) }}"
                                                alt="{{ $item->title }}" title="{{ $item->title }}">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ {{ $item->price }}</div>
                                            <div class="product-update-date">
                                                {{ $item->updated_at->diffForHumans() }}</div>
                                            <div class="product-cat-box-button">
                                                <a
                                                    href="{{ route('item.view', $item->slug) }}">
                                                    <div class="button-link">Details</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a
                                    href="{{ route('item.view', $item->slug) }}">{{ $item->title }}</a>

                                <p>{!! \Illuminate\Support\str::limit(strip_tags($item->description), 200) !!}</p>

                            </div>

                        </div>


                    @endforeach

                @endif

            </div>

        </div>

    </div>

</form>




@endsection
