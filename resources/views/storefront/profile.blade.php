@extends('layouts.storefront.layout')

@section('title','Deshboard')


@section('main')

<div id="app">

    <div name="clientForm">


        <input type="hidden" name="UserID" value="23272">

        <div class="container">

            <div class="row">


                @include('storefront.components.saidbar')




                <div class="ten columns account-head">



                    <div class="body-header">

                        <h1>Update Profile</h1>

                    </div>

                    <div clas="row">

                        <div class="eight columns">

                        <form action="{{route('client.profilepost')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                                <div class="form-style">

                                    <div class="form-element">
                                    <label>Name </label><input type="text" name="name" value="{{ Auth::User()->name }}">
                                    </div>

                                    <div class="form-element">
                                        <label>Email</label><input type="text" name="email" value="{{ Auth::User()->email }}" readonly="">
                                        {{-- <a href="#userProfile/changeEmail/">
                                            Change Email
                                        </a> --}}
                                    </div>

                                    <div class="form-element">
                                        <label> Address </label><textarea name="address">{{ Auth::User()->address }}</textarea>
                                    </div>


                                    <div class="form-element">
                                        <label>Phone</label><input type="text" name="phone" value="{{ Auth::User()->phone }}">
                                    </div>

                                    <div class="form-element">
                                        <label>Gender</label>
                                        <select name="gender">
                                            <option value="{{ Auth::User()->gender ? Auth::User()->gender:'' }}" selected>{{ Auth::User()->gender ? Auth::User()->gender:'Select' }}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select> </div>

                                    <div class="form-element">
                                        <label>Country</label><select name="country">
                                            <option value="{{ Auth::User()->country ? Auth::User()->country:'' }}" selected>{{ Auth::User()->country ? Auth::User()->country:'Select' }}</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                        </select> </div>

                                    <div class="form-element">
                                        <label>City</label>
                                        <span id="cityDiv">
                                            <select name="city">
                                                <option value="{{ Auth::User()->city ? Auth::User()->city:'' }}" selected>{{ Auth::User()->city ? Auth::User()->city:'Select' }}</option>
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
                                        </span>
                                    </div>

                                    <div class="form-element">
                                        <label>Photo</label>
                                        <input type="file" name="img">
                                    </div>

                                </div>
                                <div class="form-element">
                                    <label></label>
                                    <input type="submit" value="Update">
                                </div>
                            </form>



                        </div>

                    </div>

                    <div class="four columns account-profile">

                        1. Email will not be published to anyone<br>
                        2. Phone will not be published <br>
                        3. Name will be displayed in inquiry section<br>
                        4. Photo will be displayed in inquiry section <br>

                    </div>
                </div>





            </div>
        </div>

    </div>

</div>

@endsection
