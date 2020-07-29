@extends('layouts.storefront.layout')

@section('title','Deshboard')


@section('main')

<div id="app">

    <div name="clientForm">


        <input type="hidden" name="UserID" value="23272">

        <div class="container">

            <div class="row">


                @include('storefront.components.saidbar')

                <form action="{{ route('client.editstallpost') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="ten columns account-head">

                        <div class="body-header">
                            <h1>Update Stall</h1>
                        </div>

                        <div class="row">

                            <div class="eight columns">


                                <div class="form-style">

                                    <div class="form-element">
                                        <label>Stall Name</label>
                                        <input type="text" name="StallName" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->name }}" readonly="">
                                    </div>

                                    <div class="form-element">
                                        <label>Stall Address</label>
                                        <textarea name="StallAddress"
                                            readonly="readonly">{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->address }}</textarea>
                                    </div>

                                    <div class="form-element">
                                        <label>City</label>
                                        <span id="showType">
                                            <input type="text" name="" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->city }}" readonly="">
                                        </span>
                                    </div>

                                    <div class="form-element">
                                        <label>Area</label>
                                        <input type="text" name="" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->area }}" readonly="">
                                    </div>

                                    <div class="form-element">
                                        <label>Postal Code</label>
                                        <input type="text" name="" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->poscode }}" readonly="">
                                    </div>

                                    <div class="form-element">
                                        <label>Business</label>
                                        <select name="BusinessID">
                                            <option value="1" selected="">Computers</option>
                                        </select> </div>

                                    <div class="form-element">
                                        <label>Phone</label>
                                        <input type="text" name="StallPhone" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->phone }}" size="20">
                                    </div>

                                    <div class="form-element">
                                        <label>Hotline</label>
                                        <input type="text" name="Hotline1" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->hotline1 }}" size="11" maxlength="11">
                                        <input type="text" name="Hotline2" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->hotline2 }}" size="11" maxlength="11">
                                    </div>



                                    <div class="form-element">
                                        <label>Email</label>
                                        <input type="text" name="StallEmail" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->email }}">
                                    </div>

                                    <div class="form-element">
                                        <label>Web</label>
                                        <input type="text" name="StallWeb" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->web }}">
                                    </div>

                                    <div class="form-element">
                                        <label>Fax</label>
                                        <input type="text" name="StallFax" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->fax }}">
                                    </div>

                                    <div class="form-element">
                                        <label>Contact Person</label>
                                        <input type="text" name="StallContactPerson" value="{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->person_name }}">
                                    </div>

                                    <div class="form-element">
                                        <label>Stall Description</label>
                                        <textarea name="StallDescription">{{ Auth::User()->stall()->where('user_id', Auth::User()->id)->first()->about }}</textarea>
                                    </div>

                                </div>

                                <div class="form-element">
                                    <label></label>
                                    <input type="button" value="Update">
                                </div>

                            </div>

                            <div class="four columns">
                                <a href="https://www.bdstall.com/stallDetail/index/845/" target="_BLANK">
                                    <img src="https://www.bdstall.com/asset/stall-image/1572.jpg">
                                </a>




                            </div>
                        </div>

                    </div>

                </form>



            </div>
        </div>

    </div>

</div>

@endsection
