@extends('layouts.storefront.layout')

@section('title','Deshboard')


@section('main')

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








                </form>


            </div>
        </div>

    </div>

</div>

@endsection
