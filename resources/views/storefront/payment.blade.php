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
                        <h1>Payment List</h1>
                    </div>

                    <div class="adm-search-panel">

                        <div class="u-pull-right product-cat-stat">Balance ৳ 0.00</div>

                    </div>


                    <div clas="row">

                        <div class="tweleve columns">





                        </div>



                    </div>


                    <br class="clear">
                </div>





            </div>
        </div>

    </div>

</div>

@endsection
