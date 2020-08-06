@extends('layouts.storefront.layout')

@section('title','Blog')

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

    <div class="row breadcum">
        <label>
            <a href="{{ route('index') }}" class="breadcum-link">Home</a><span>
                &nbsp;&gt;&nbsp;</span><a class="breadcum-link-clk"
                href="{{ route('blog') }}">Blog</a> </label>
    </div>

    <div class="row">

        <div class="twelve columns">

            <div class="mag-body-header">
                <h1>নতুন পোস্ট</h1>
            </div>

            <div class="row">
                <span class="page-stat">{{ $count->count() }} posts</span>
            </div>


            @foreach($blogs as $blog)

                @if($blog->status == true)

                    <div class="row mag-box">

                        <div class="three columns mag-box-img">
                            <a href="{{ route('blog.show',$blog->slug) }}">
                                <img src="{{ Storage::disk('public')->url('blog/'.$blog->img) }}"
                                    title="{{ $blog->title }}" alt="{{ $blog->title }}">
                            </a>
                        </div>

                        <div class="nine columns mag-box-text">

                            <a
                                href="{{ route('blog.show',$blog->slug) }}">{{ $blog->title }}</a>

                            <div>
                                <div class="s-top s-bottom">
                                    Date : {{ $blog->created_at->toFormattedDateString() }}
                                </div>
                            </div>

                            <p>


                                {!! \Illuminate\Support\str::limit(strip_tags($blog->body), 250) !!}

                            </p>

                            <div style="font-size:0.8em; margin-bottom: 1em;" class="u-pull-right">
                                <a style="color:#5F7084; margin-right: 1em"
                                    href="{{ route('blog.show',$blog->slug) }}">বিস্তারিত
                                    &gt;&gt;</a>
                            </div>
                        </div>
                    </div>

                @endif
            @endforeach





            <div>
                {{ $blogs->onEachSide(2)->links() }}
                {{-- <div class="paginations">

                    <span class="paginationCurLink"></span>
                    <span class="page-digit-link">
                        <a href="https://www.bdstall.com/blog/list/2/">2</a>
                    </span>
                    <span class="page-digit-link">
                        <a href="https://www.bdstall.com/blog/list/3/">3</a>
                    </span>
                    <span class="page-digit-link">
                        <a href="https://www.bdstall.com/blog/list/4/">4</a></span>
                        <span class="page-next-link">
                            <a href="https://www.bdstall.com/blog/list/2/">Next</a></span>
                </div> --}}
            </div>


        </div>
    </div>


</div>


@endsection
