@extends('layouts.storefront.layout')

@section('title','Home')

@section('main')

@include('storefront.components.slide')


<div class="container">
    <div class="row banner">

        <div class="six columns">
            <a href="#stallDetail/index/1301/" target="_BLANK"
                onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;Banner&#39;, &#39;Click&#39;, &#39;HPM-470x111-userid42786&#39;, 1, {&#39;nonInteraction&#39;: 1})"><img
                    style="border: 0px" src="./assets/ads1795.gif" width="470" height="111" alt="" title=""></a><img
                width="0" height="0"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                onload="ga(&#39;send&#39;, &#39;event&#39;, &#39;Banner&#39;, &#39;Impression&#39;, &#39;HPM-470x111-userid42786&#39;, 1, {&#39;nonInteraction&#39;: 1})">
        </div>

        <div class="six columns">
            <a href="#stallDetail/index/1301/" target="_BLANK"
                onclick="ga(&#39;send&#39;, &#39;event&#39;, &#39;Banner&#39;, &#39;Click&#39;, &#39;PDR-470x111-userid42786&#39;, 1, {&#39;nonInteraction&#39;: 1})"><img
                    style="border: 0px" src="./assets/ads1794.gif" width="470" height="111" alt="" title=""></a><img
                width="0" height="0"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                onload="ga(&#39;send&#39;, &#39;event&#39;, &#39;Banner&#39;, &#39;Impression&#39;, &#39;PDR-470x111-userid42786&#39;, 1, {&#39;nonInteraction&#39;: 1})">
        </div>

    </div>

</div>



<div class="container s-top">

    <div class="row tab">
        <a class="tab-selection" href="#">New</a>
        {{-- <a href="#home/getHotItem/">Hot Pick</a>
        <a href="#home/recentUpdates/">Recent</a> --}}
    </div>
    <div class="row">
        @foreach(App\Item::where([
            ['status', '=', true],
            ['is_approve', '=', true],
            ['stock', '=', true],
            ])->latest()->get()->take(20) as $item)

            <div class="product-box">
                <a href="{{ route('item.view', $item->slug) }}">
                    <div class="product-box-img">
                        <img src="{{ asset('storage/item/'.$item->img) }}">
                    </div>
                    <div class="product-box-item-type">
                        {!! \Illuminate\Support\str::limit(strip_tags($item->title), 30) !!}
                    </div>
                    <div class="product-box-price">
                        ৳ {{ $item->price }}
                    </div>
                </a>
            </div>

        @endforeach

    </div>
    <div class="s-top">
        <a href="{{route('all.view')}}">+ more new items</a>
    </div>
</div>
@endsection
