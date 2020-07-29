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



                    <div class="body-header"><h1>Favourite</h1></div>

                    <div>


                         <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/listingDetail/index/876/" target="_BLANK">
                                    <img src="https://www.bdstall.com/asset/product-image/big_81809.jpg" alt="Student Desktop PC , Very low Price!!!" title="Student Desktop PC , Very low Price!!!">
                                </a> </div>
                                    <div class="five columns">
                                    <div class="product-price-group">
                                    <div class="product-price">৳ 12,500</div>
                                    <div class="product-update-date">10 hours ago</div>

                                    <div class="product-cat-box-button">
                                        <a href="https://www.bdstall.com/userSavedListing/deleteListing/42421/">
                                            <div class="button-link">Remove</div>
                                        </a>
                                    </div>

                                    </div></div>
                                </div>
                            </div>


                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/listingDetail/index/876/" target="_BLANK">Student Desktop PC , Very low Price!!!</a>
                                <p>Intel core i5 processor, 4 GB memory, 500 GB HDD, A4Tech USB keyboard and mouse, 19 inch LED monitor.            </p></div>

                            </div>


                    </div>



                <br class="clear">
                    </div>


            </div>
        </div>

    </div>

</div>

@endsection
