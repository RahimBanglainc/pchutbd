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
                        <h1>Orders</h1>
                    </div>

                    <div class="adm-search-panel">

                        <div class="u-pull-right product-cat-stat">Item 0-0 of 0</div>

                        <form action="/order/order_list/">

                            <select name="OrderStatusGroupID">
                                <option value="110">Confirmed</option>
                                <option value="120">Shipped</option>
                                <option value="1">Delivered</option>
                                <option value="0">Canceled</option>
                            </select>


                            <input type="text" value="" name="term" style="margin-right:0.5em">
                            <input type="submit" value="Search">
                        </form>

                    </div>


                    <div clas="row">

                        <div class="tweleve columns">




                            <div class="b-bottom"><a href="cartItem/track_order_status/"
                                    style="font-weight:bold">আপনি যদি রেজিস্ট্রেশান না করে অর্ডার করে থাকেন তবে এখানে
                                    ট্র্যাক করতে পারেন</a></div>
                        </div>



                    </div>


                    <br class="clear">
                </div>





            </div>
        </div>

    </div>

</div>

@endsection
