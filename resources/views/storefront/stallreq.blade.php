@extends('layouts.storefront.layout')

@section('title','Deshboard')


@section('main')

<div id="app">

    <div name="clientForm" action="" method="post">


        <input type="hidden" name="UserID" value="23272">

        <div class="container">

            <div class="row">


                @include('storefront.components.saidbar')


                <div class="nine columns account-head">



                    <div class="body-header">
                        <h1>Stall Request</h1>
                    </div>


                    <div clas="row">


                        <div class="seven columns">
                            @if (!Auth::User()->seller_req)
                        <form action="{{route('client.stallpost')}}" method="POST">
                                @csrf

                                <div class="form-style">

                                    <div class="form-element">
                                        <label>Stall Type</label>
                                        <select name="type">
                                            <option value="">Select</option>
                                            <option value="Personal">Personal</option>
                                            <option value="Business">Business</option>
                                        </select>
                                    </div>


                                    <div class="form-element">
                                        <label>Name / Shop</label>
                                        <input type="text" name="name" value="">
                                    </div>

                                    <div class="form-element">
                                        <label>Address</label>
                                        <textarea name="address"></textarea>
                                    </div>

                                    <div class="form-element">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="">
                                    </div>

                                    <div class="form-element">
                                        <label>City</label>
                                        <select name="city" onchange="selectArea()">
                                            <option value="">select</option>
                                            <option value="Bagherhat">Bagherhat</option>
                                            <option value="Bandarban">Bandarban</option>
                                            <option value="Barguna">Barguna</option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Bhola">Bhola</option>
                                            <option value="Bogra">Bogra</option>
                                            <option value="Brahmanbaria">Brahmanbaria</option>
                                            <option value="Chandpur">Chandpur</option>
                                            <option value="Chapainawabganj">Chapainawabganj</option>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Chuadanga">Chuadanga</option>
                                            <option value="Comilla">Comilla</option>
                                            <option value="Cox's Bazar">Cox's Bazar</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Dinajpur">Dinajpur</option>
                                            <option value="Faridpur">Faridpur</option>
                                            <option value="Feni">Feni</option>
                                            <option value="Gaibandha">Gaibandha</option>
                                            <option value="Gazipur">Gazipur</option>
                                            <option value="Gopalganj">Gopalganj</option>
                                            <option value="Habiganj">Habiganj</option>
                                            <option value="Jamalpur">Jamalpur</option>
                                            <option value="Jessore">Jessore</option>
                                            <option value="Jhalokati">Jhalokati</option>
                                            <option value="Jhenaidaha">Jhenaidaha</option>
                                            <option value="Joypurhat">Joypurhat</option>
                                            <option value="Khagrachhari">Khagrachhari</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Kishoreganj">Kishoreganj</option>
                                            <option value="Kurigram">Kurigram</option>
                                            <option value="Kushtia">Kushtia</option>
                                            <option value="Lakshmipur">Lakshmipur</option>
                                            <option value="Lalmonirhat">Lalmonirhat</option>
                                            <option value="Madaripur">Madaripur</option>
                                            <option value="Magura">Magura</option>
                                            <option value="Manikganj">Manikganj</option>
                                            <option value="Maulvi Bazar">Maulvi Bazar</option>
                                            <option value="Meherpur">Meherpur</option>
                                            <option value="Munshiganj">Munshiganj</option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Naogaon">Naogaon</option>
                                            <option value="Narail">Narail</option>
                                            <option value="Narayanganj">Narayanganj</option>
                                            <option value="Narsingdi">Narsingdi</option>
                                            <option value="Natore">Natore</option>
                                            <option value="Netrokona">Netrokona</option>
                                            <option value="Nilphamari">Nilphamari</option>
                                            <option value="Noakhali">Noakhali</option>
                                            <option value="Pabna">Pabna</option>
                                            <option value="Panchagarh">Panchagarh</option>
                                            <option value="Patuakhali">Patuakhali</option>
                                            <option value="Pirojpur">Pirojpur</option>
                                            <option value="Rajbari">Rajbari</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Rangamati">Rangamati</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Saidpur">Saidpur</option>
                                            <option value="Shariatpur">Shariatpur</option>
                                            <option value="Shatkhira">Shatkhira</option>
                                            <option value="Sherpur">Sherpur</option>
                                            <option value="Sirajganj">Sirajganj</option>
                                            <option value="Sunamganj">Sunamganj</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Tangail">Tangail</option>
                                            <option value="Thakurgaon">Thakurgaon</option>
                                        </select>
                                    </div>

                                    <div class="form-element">
                                        <label></label>
                                        <input type="submit" value="Request">
                                    </div>

                                </div>
                            </form>

                        @else

                        <div class="form-style">

                            <small> have received your request and currently under review.</small>

                        </div>

                        @endif

                        </div>

                        <div class="five columns">

                            <div>
                                <b>Personal</b><br>
                                If you don't have any shop but you're a genuine seller then
                                <a href="">complete your profile</a> and
                                submit the request.
                                <br><br>
                                <b>Business</b><br>

                                If you own a shop and sells brand new item then we're ready to open your stall.<br>

                                <br>
                                You may <a href="">contact us</a><br>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>

    </div>

</div>

@endsection
