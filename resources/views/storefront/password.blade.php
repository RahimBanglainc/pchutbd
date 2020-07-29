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



                    <div class="ten columns account-head">

                        <div class="body-header">

                            <h1>Change Password</h1>

                        </div>




                        <div class="row">

                            <div class="eight columns form-style">

                                <div class="form-element">
                                    <label>New Password</label>
                                    <input type="password" name="password" value="">
                                </div>



                                <div class="form-element">
                                    <label>Re-Password</label>
                                    <input type="password" name="confirmpassword">
                                </div>

                                <div class="form-element s-top">
                                    <label></label>
                                    <input type="submit" value="Update">
                                </div>

                            </div>


                            <div class="four columns">

                                <div>
                                    <font color="green">How to Change</font>
                                </div>
                                <div>
                                    1. Type new password <br>
                                    2. Re-type new password <br>
                                    3. Press on submit button <br>
                                    4. Wait for successful message <br>
                                </div>
                            </div>

                        </div>
                    </div>




                </form>


            </div>
        </div>

    </div>

</div>

@endsection
