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

    .pagination-sm .page-item:last-child{

    }

</style>


@endpush


<div class="container">

    <div class="row">

        <div class="row">
            <div class="twelve columns breadcum">

                <a class="breadcum-link" href="{{route('index')}}">Home</a> -&gt; <a
                    href="{{route('stallList')}}" class="breadcum-link-clk">Online Stall</a>
            </div>
        </div>

        <div class="twelve columns">

            <div class="row body-header">
                <h1>Online Stall</h1>
            </div>

            <div class="row"><span class="page-stat">{{ $count->count() }} Stall</span></div>


            @foreach($stalls as $stall)

                <div class="row stall-box">

                    <div class="three columns stall-box-img">
                        <a href="{{ route('stall.show', $stall->slug) }}">
                            <img style="width: 75px" src="{{ asset('/'.$stall->img) }}" alt="{{ $stall->name }}"
                                title="{{ $stall->name }}">
                        </a>
                    </div>

                    <div class="nine columns stall-box-data">

                        <div class="row stall">

                            <div class="eight columns">

                                <a
                                    href="{{ route('stall.show', $stall->slug) }}">{{ $stall->name }}</a>
                                <br>
                                <p>{{ $stall->city }},&nbsp;{{ $stall->country }}</p>

                            </div>

                            <div class="four columns">
                                <p>Stall No - {{ $stall->id }} </p>
                            </div>
                        </div>

                    </div>
                </div>

            @endforeach


            {{ $stalls->links() }}

        </div>
    </div>
</div>



@endsection
