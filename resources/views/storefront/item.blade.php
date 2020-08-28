@extends('layouts.storefront.layout')

@section('title','Deshboard')


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

    .pagination-sm .page-item:last-child{

    }

</style>

@endpush

<div id="app">

    <div name="clientForm" action="" method="post">


        <input type="hidden" name="UserID" value="23272">

        <div class="container">

            <div class="row">


                @include('storefront.components.saidbar')



                <form action="{{ route('client.passwordpost') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')



                    <div class="ten columns account-head">

                        <div class="body-header">
                            <h1>Product List</h1>
                        </div>




                        <div class="account-search-panel">

                            <select name="ItemTypeID" onchange="selectItemFeature()">
                                <option value="-1" selected="">select</option>
                                <option value="6">PC &amp; Laptop- Laptop</option>
                                <option value="477">PC &amp; Laptop- Gaming Laptop</option>
                                <option value="4">PC &amp; Laptop- Desktop PC</option>
                                <option value="474">PC &amp; Laptop- Gaming PC</option>
                                <option value="471">PC &amp; Laptop- Brand PC</option>
                                <option value="376">PC &amp; Laptop- Mini PC</option>
                                <option value="10">PC &amp; Laptop- Tablet PC</option>
                                <option value="470">PC &amp; Laptop- All In One PC</option>
                                <option value="97">PC &amp; Laptop- Computer Repair</option>
                                <option value="74">PC Parts- Headphone</option>
                                <option value="95">PC Parts- UPS</option>
                                <option value="27">PC Parts- Processor</option>
                                <option value="28">PC Parts- Motherboard</option>
                                <option value="31">PC Parts- RAM</option>
                                <option value="29">PC Parts- Hard Disk</option>
                                <option value="262">PC Parts- SSD</option>
                                <option value="32">PC Parts- Graphics Card</option>
                                <option value="39">PC Parts- Mouse</option>
                                <option value="380">PC Parts- Keyboard</option>
                                <option value="90">PC Parts- CPU Cooler</option>
                                <option value="35">PC Parts- DVD Writer</option>
                                <option value="40">PC Parts- Computer Casing</option>
                                <option value="37">PC Parts- Internet Modem</option>
                                <option value="36">PC Parts- Webcam</option>
                                <option value="34">PC Parts- TV Card</option>
                                <option value="30">PC Parts- Pen Drive</option>
                                <option value="111">PC Parts- Cable</option>
                                <option value="351">PC Parts- Surge Protector</option>
                                <option value="358">PC Parts- USB Hub</option>
                                <option value="502">PC Parts- UPS Battery</option>
                                <option value="195">PC Parts- Power Supply</option>
                                <option value="109">PC Parts- Memory Card Reader</option>
                                <option value="363">PC Parts- Blank Disk</option>
                                <option value="33">PC Parts- Sound Card</option>
                                <option value="525">PC Parts- Gaming Chair</option>
                                <option value="526">PC Parts- Mouse Pad</option>
                                <option value="501">PC Parts- Thermal Paste</option>
                                <option value="86">Laptop Accessories- Laptop Battery</option>
                                <option value="87">Laptop Accessories- Laptop Charger</option>
                                <option value="77">Laptop Accessories- Laptop Bag</option>
                                <option value="78">Laptop Accessories- Laptop Cooler</option>
                                <option value="88">Laptop Accessories- Laptop Display</option>
                                <option value="89">Laptop Accessories- Laptop Keyboard</option>
                                <option value="410">Laptop Accessories- Laptop Table</option>
                                <option value="48">Networking- Wireless Router</option>
                                <option value="17">Monitor- Monitor</option>
                                <option value="23">Print &amp; Scan- Printer</option>
                                <option value="21">Print &amp; Scan- Photo Printer</option>
                                <option value="170">Print &amp; Scan- Printer Cartridge</option>
                                <option value="104">Print &amp; Scan- Printer Paper</option>
                                <option value="368">Print &amp; Scan- Printer Drum</option>
                                <option value="511">Print &amp; Scan- Printing Accessories</option>
                            </select> <select name="ListingStatusID">
                                <option value="0">All Item</option>
                                <option value="10" selected="">Active</option>
                                <option value="50">Waiting for Moderation</option>
                                <option value="100">Available</option>
                                <option value="1">Sold Out</option>
                                <option value="15">Hot Pick</option>
                                <option value="20">Featured Item</option>
                                <option value="400">My Priority</option>
                                <option value="130">Expired Item</option>
                                <option value="135">Inactive for Reasons</option>
                                <option value="140">Inactive Item</option>
                            </select> <input type="text" name="term" value="">
                            <input type="submit" value="Search">
                        </div>


                        <div class="row">

                            <div class="u-pull-left">Item 1-{{$items->count()}} of {{$itemCount->count()}}</div>

                            <!--    <div class="u-pull-right"><a href="productListing/index/23272/845/">Post New Item</a></div>-->

                        </div>




                        @foreach($items as $item)
                            <div class="row product-cat-box s-top">

                                <div class="six columns product-cat-box-img">
                                    <div class="row">
                                        <div class="seven columns">
                                            <a href="{{route('item.view', $item->slug)}}" target="_BLANK">
                                                <img src="{{ asset('/s'.$item->img) }}"
                                                    alt="{{ $item->title }}" title="{{ $item->title }}">
                                            </a> </div>
                                        <div class="five columns">
                                            <div class="product-price-group">
                                                <div class="product-price">৳ {{ $item->price }}</div>
                                                <div class="product-update-date">
                                                    {{ $item->updated_at->diffForHumans() }}</div>

                                                <div class="account-prod-link">
                                                    <span>{{ $item->views }} times</span>
                                                </div>
                                                <div class="account-prod-link">
                                                    <span>
                                                        @if($item->stock)

                                                            <font color="green">In Stock</font>

                                                        @else

                                                            <font color="#ed078d"><b>Sold Out</b></font>

                                                        @endif
                                                    </span>
                                                </div>
                                                @if ($item->is_approve && $item->status)
                                                <div class="product-cat-box-button">
                                                    <a
                                                        href="{{ route('client.item.edit',$item->id) }}">
                                                        <div class="button-link">Edit</div>
                                                    </a>
                                                </div>

                                                @else

                                                <div class="product-cat-box-button">
                                                    <a
                                                        href="{{ route('item.view', $item->slug) }}">
                                                        <div class="button-link">View</div>
                                                    </a>
                                                </div>

                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="six columns product-cat-box-text">
                                    <a href="{{route('item.view', $item->slug)}}" target="_BLANK">{{ $item->title }}</a>
                                    <p>{!! \Illuminate\Support\str::limit(strip_tags($item->description), 200) !!}</p>
                                </div>

                            </div>


                        @endforeach




                        {{ $items->links() }}
                    </div>



                </form>


            </div>
        </div>

    </div>

</div>

@endsection
