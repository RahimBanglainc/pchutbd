@extends('layouts.storefront.layout')

@section('title','Deshboard')


@section('main')

<div id="app">

    <div name="clientForm" action="" method="post">


        <input type="hidden" name="UserID" value="23272">

        <div class="container">

            <div class="row">

                <div class="two columns account-panel">

                    <div class="body-header">
                        <h1>Control Panel</h1>
                    </div>


                    <div>
                        <div>
                            <a href="#/userItemListing/">
                                Manage Item
                            </a>
                        </div>
                        <div>
                            <a href="#/productListing/index/23272/">
                                Post New Item
                            </a>
                        </div>
                        <div>
                            <a href="#/stall/editStall/">
                                Edit Stall
                            </a>
                        </div>
                    </div>

                    <div>
                        <a href="#/order/order_list/">Orders</a>
                    </div>

                    <div><a href="#/invoice/invoice_list/">Invoice</a></div>

                    <div><a href="#/payment/">Payment</a></div>





                    <div>
                        <a href="#/userSavedListing/index/">Favourite&nbsp;(1)</a>
                    </div>

                    <div><a href="#/userProfile/editProfile/">Update Profile</a>
                    </div>

                    <div>
                        <a href="#/userProfile/editPassword/">Change Password</a>
                    </div>




                    <div>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Sing Out') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>


                </div>
                <div class="ten columns account-head">

                    <div class="body-header body-gap">

                        <h1>My Profile</h1>
                    </div>




                    <div class="row">
                        <div class="eight columns account-profile">
                            <div>Madani Computer &amp; Traders<br>

                                Member Since : 07 August , 2016
                            </div>

                            <div class="row account-style account-profile">
                                <div class="four columns">
                                    <img src="https://www.bdstall.com/asset/static-image/user_pic.jpg">
                                </div>

                                <div class="eight columns">

                                    Email : madanipc005@gmail.com<br>

                                    Address : ► কিভাবে আসবেন?
                                    আপনি যে কোন জায়গা থেকেই সাইন্সল্যাব পুলিশ বক্সে এসে নামলে উল্টো পাশে দেখবেন বায়তুল
                                    মামুর মসজিদ তাঁর পাশেই হচ্ছে আলপনা প্লাজা
                                    মার্কেট:
                                    Shop Name: MADANI TRADERS ,Alpana Plaza (Level-3)
                                    51, Elephant Road, Dhaka-1205.<br>
                                    City : Dhaka<br>
                                    Country : Bangladesh<br>
                                    Phone : 01833685828<br>
                                    Gender :<br>
                                </div>
                            </div>
                        </div>


                        <div class="four columns account-head account-profile">



                            <div><b>My Account</b></div>

                            Plan Name: <font color="olive">Gorom</font><br>

                            Item: <font color="olive">85 of 100

                                <a href="#/productListing/limit_info/" style="margin-left: 0.2em">more&gt;&gt;</a><br>
                            </font> Free Item: <font color="olive">1</font><br>


                            Post Left: <font color="olive">15</font><br>


                            Plan End: <font color="olive">08-09-2020</font><br>

                            Days Left: <font color="olive">47</font><br>





                            <a href="#/myPlan/upgradeUserPlan/23272/">Get More Limit</a>





                            <div class="s-top">
                                <!--        <a href="#/productListing/limit_info/" style="color:#257AB1;float: left">View Limit Info</a><br>-->
                                <a href="#/payment/info/" style="color:#257AB1;float: left">View
                                    Payement Info</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
