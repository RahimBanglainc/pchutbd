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

<div class="container s-top">

    <div class="row tab">
        <a class="tab-selection" href="#">All New</a>
        {{-- <a href="#home/getHotItem/">Hot Pick</a>
        <a href="#home/recentUpdates/">Recent</a> --}}
    </div>
    <div class="row">
        @foreach($items as $item)

            <div class="product-box">
                <a href="{{ route('item.view', $item->slug) }}">
                    <div class="product-box-img">
                        <img src="{{ asset('/'.$item->img) }}">
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
        {{$items->links()}}
    </div>
</div>
@endsection
