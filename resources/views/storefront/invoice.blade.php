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
                        <h1>Invoice</h1><span style="float:right"></span>
                    </div>

                    <div class="admin-search-panel">

                        <form action="/invoice/invoice_list/">

                            <select name="InvoiceStatusID">
                                <option value="-1">select</option>
                                <option value="1" selected="">Unpaid</option>
                                <option value="5">Paid</option>
                                <option value="10">Reward</option>
                                <option value="15">Dismiss</option>
                                <option value="20">Drop</option>
                            </select>

                            <input type="text" value="" placeholder="Enter invoice no" name="term"
                                style="margin-right:0.5em">
                            <input type="submit" value="Search">
                        </form>

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
