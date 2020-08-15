@extends('layouts.storefront.layout')

@section('title','Deshboard')


@section('main')

<div id="app">

    <div name="clientForm" action="" method="post">


        <input type="hidden" name="UserID" value="23272">

        <div class="container">

            <div class="row">


                @include('storefront.components.saidbar')



                <div class="ten columns account-head">



                    <div class="body-header">
                        <h1>Favourite</h1>
                    </div>

@foreach ($items as $item)

<div class="row product-cat-box s-top">

    <div class="six columns product-cat-box-img">
        <div class="row">
            <div class="seven columns">
                <a href="{{route('item.view', $item->slug)}}" target="_BLANK">
                    <img src="{{asset('storage/item/small/'.$item->img)}}"
                        alt="{{$item->title}}"
                        title="{{$item->title}}">
                </a> </div>
            <div class="five columns">
                <div class="product-price-group">
                    <div class="product-price">৳ {{$item->price}}</div>
                    <div class="product-update-date">{{ $item->updated_at->diffForHumans() }}</div>

                    <div class="product-cat-box-button">
                    <a href="javascript:void(0)" onclick="document.getElementById('favorite-form-{{$item->id}}').submit()">
                            <div class="button-link">Remove</div>
                        </a>
                        <form id="favorite-form-{{$item->id}}" method="POST" action="{{route('favorite.post', $item->id)}}" style="display: none;">
                            @csrf
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="six columns product-cat-box-text">
        <a href="{{route('item.view', $item->slug)}}" target="_BLANK">{{$item->title}}</a>
        <p>{!! \Illuminate\Support\str::limit(strip_tags($item->description), 100) !!} </p>
    </div>

</div>
@endforeach


                    <br class="clear">
                </div>


            </div>
        </div>

    </div>

</div>

@endsection
