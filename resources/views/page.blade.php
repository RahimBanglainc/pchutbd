@extends('layouts.storefront.layout')

@section('title', $page->name)



@section('main')

@push('css')

@endpush

<div class="container b-top">


    <div class="body-header">

        <h1>{{ $page->name }}</h1>
    </div>
</div>



<div class="container">


    {!! $page->body !!}



</div>




@endsection
