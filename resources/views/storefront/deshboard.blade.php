@extends('layouts.storefront.layout')

@section('title','Dashboard')


@section('main')

<div id="app">

    <div name="clientForm" action="" method="post">


        <input type="hidden" name="UserID" value="23272">

        <div class="container">

            <div class="row">


                @include('storefront.components.saidbar')



                <div class="ten columns account-head">

                    <div class="body-header body-gap">

                        <h1>My Profile</h1>
                    </div>




                    <div class="row">
                        <div class="eight columns account-profile">
                            <div>{{ Auth::User()->name }}<br>

                                Member Since : {{ Auth::User()->created_at->toFormattedDateString() }}
                            </div>

                            <div class="row account-style account-profile">
                                <div class="four columns">
                                    @if(Storage::disk('public')->exists('user/'.Auth::User()->img))

                                    <img src="{{ asset('/'.Auth::User()->img) }}">

                                    @else

                                    <img src="{{ asset('img/user.jpg') }}">

                                    @endif
                                </div>

                                <div class="eight columns">

                                    Email : {{ Auth::User()->email }}<br>

                                    Address : {{ Auth::User()->address }}<br>
                                    City : {{ Auth::User()->city }}<br>
                                    Country : {{ Auth::User()->country }}<br>
                                    Phone : {{ Auth::User()->phone }}<br>
                                    Gender :{{ Auth::User()->gender }}<br>
                                </div>
                            </div>
                        </div>

                        @if (Auth::User()->is_seller)

                        <div class="four columns account-head account-profile">


                            <div><b>My Account</b></div>

                            Plan Name: <font color="olive">{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->plan }}</font><br>

                            Item: <font color="olive">{{$a}} of {{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->item_limit }}

                                <a href="#" style="margin-left: 0.2em">more&gt;&gt;</a><br>
                            </font> Free Item: <font color="olive">1</font><br>


                            Post Left: <font color="olive">{{$count}}</font><br>


                            Plan End: <font color="olive">{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->item_exp}}</font><br>

                        {{-- Days Left: <font color="olive">47</font><br> --}}

                            <a href="#">Get More Limit</a>

                            <div class="s-top">
                                <!--        <a href="#/productListing/limit_info/" style="color:#257AB1;float: left">View Limit Info</a><br>-->
                                <a href="#" style="color:#257AB1;float: left">View
                                    Payement Info</a>
                            </div>

                        </div>

                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
