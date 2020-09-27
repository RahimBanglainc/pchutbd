@extends('layouts.admin.layout')

@section('title','Edit Stall')

@push('css')

    <!-- Summernote css -->
    {{-- <link href="{{ asset('admin/assets/libs/summernote/summernote-bs4.min.cs') }}s"
        rel="stylesheet" type="text/css" />

    <link href="{{ asset('admin/assets/libs/select2/css/select2.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('admin/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('admin/assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}"
        rel="stylesheet" /> --}}

@endpush

@section('main')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">PCHUTBD</a></li>
                    <li class="breadcrumb-item active">Edit Stall</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form method="POST" action="{{ route('admin.stall.update', $stall->id) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Store Information Update Panel</h4>
                    <p class="card-title-desc">Store Owner:
                        {{ $stall->user()->find($stall->user_id)->first()->name }}</code>.</p>
                    <div>
                        <div class="mb-4">
                            <input class="form-control" type="text" name="name" placeholder="Store Name"
                                value="{{ $stall->name }}" required>
                        </div>
                        <div class="mb-4">
                            <textarea id="textarea" name="address" class="form-control" maxlength="225" rows="3"
                                placeholder="Store Address" required>{{ $stall->address }}</textarea>
                        </div>
                        <div class="mb-4">
                            <input class="form-control" type="text" name="area" placeholder="Store Area"
                                value="{{ $stall->area }}" required>
                        </div>

                        <div class="form-group" data-select2-id="10">
                            <label class="control-label">Select City</label>
                            <select class="form-control select2 select2-hidden-accessible" name="city" required>
                                <option value="{{ $stall->city ? $stall->city:'' }}"
                                    selected>
                                    {{ $stall->city ? $stall->city:'Select' }}
                                </option>
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

                        <div class="mb-4">
                            <input class="form-control" type="text" name="postcode" placeholder="Postal Code"
                                value="{{ $stall->postcode }}" required>
                        </div>

                        <div class="mb-4">
                            <input class="form-control" type="text" name="country" placeholder="Country"
                                value="{{ $stall->country }}" required>
                        </div>
                        <div class="mb-4">
                            <input class="form-control" type="text" name="business" placeholder="Business"
                                value="{{ $stall->business }}" required>
                        </div>
                        <div class="mb-4">
                            <input class="form-control" type="text" name="phone" placeholder="Phone Number"
                                value="{{ $stall->phone }}" required>
                        </div>
                        <div class="mb-4">
                            <input class="form-control" type="text" name="hotline1" placeholder="Hotline1"
                                value="{{ $stall->hotline1 }}" required>
                        </div>
                        <div class="mb-4">
                            <input class="form-control" type="text" name="hotline2" placeholder="Hotline2"
                                value="{{ $stall->hotline2 }}">
                        </div>
                        <div class="mb-4">
                            <input class="form-control" type="email" name="email" placeholder="Email"
                                value="{{ $stall->email }}" required>
                        </div>
                        <div class="mb-4">
                            <input class="form-control" type="text" name="web" placeholder="Web"
                                value="{{ $stall->web }}">
                        </div>
                        <div class="mb-4">
                            <input class="form-control" type="text" name="fax" placeholder="Fax"
                                value="{{ $stall->fax }}">
                        </div>
                        <div class="mb-4">
                            <input class="form-control" type="text" name="person_name" placeholder="Contact Person"
                                value="{{ $stall->person_name }}" required>
                        </div>

                        <div class="mt-3">
                            <label>Discription</label>

                            <textarea id="textarea1" name="about" class="form-control" maxlength="225" rows="3"
                                placeholder="This Discription has a limit of 225 chars." required>{{ $stall->about }}</textarea>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Picture Upload</h4>
                    <p class="card-title-desc"> Upload Stall Logo/Store Front Picture 512x512 px</p>
                    <div class="col-md-6">
                        @if (Storage::disk('public')->exists('stall/'.$stall->img))

                        <img class="img-thumbnail" alt="200x200" style="width:300px;" src="{{ asset('/'.$stall->img) }}" data-holder-rendered="true">

                        @else

                        <img class="img-thumbnail" alt="200x200" style="width:300px;" src="{{asset('img/'.$stall->img)}}" data-holder-rendered="true">

                        @endif
                    </div>
                    <br>
                    <div class="custom-file">
                        <input type="file" name="img" class="form-control-file">
                    </div>
                    <br><br>
                    <h4 class="card-title">Package Section</h4>
                    <p class="card-title-desc"> Package Name</p>
                    <div class="mb-4">
                        <input class="form-control" type="text" name="plan" placeholder="Plan Name"
                            value="{{ $stall->plan }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="control-label">Expare Date</label>
                        <input class="form-control" type="date" name="item_exp" placeholder="Expare Date"
                            value="{{ $stall->item_exp }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="control-label">Post Limit</label>
                        <input class="form-control" type="number" name="item_limit" placeholder="50"
                            value="{{ $stall->item_limit }}" required>
                    </div>

                    <br>

                    @if (!$stall->user()->find($stall->user_id)->is_seller == 1)

                    <div class="custom-control custom-switch mb-2" dir="ltr">
                        <input type="checkbox" name="is_seller" class="custom-control-input" id="customSwitch1"
                            value="true"
                            {{ $stall->user()->find($stall->user_id)->is_seller == true ?'checked' : '' }}>
                        <label class="custom-control-label" for="customSwitch1">Approve Seller</label>
                    </div>

                    @else

                    <div class="custom-control custom-switch mb-2" dir="ltr">
                        <input type="checkbox" name="status" class="custom-control-input" id="customSwitch2" value="1"
                            {{ $stall->status == true ?'checked' : '' }}>
                        <label class="custom-control-label" for="customSwitch2">Active/Disable Store</label>
                    </div>

                    @endif

                    {{-- <div class="custom-control custom-switch mb-2" dir="ltr">
                        <input type="checkbox" name="seller_req" class="custom-control-input" id="customSwitch3"
                            value="1"
                            {{ $stall->user()->find($stall->user_id)->first()->stall_req == true ?'checked' : '' }}>
                        <label class="custom-control-label" for="customSwitch3">Disable Seller Request</label>
                    </div> --}}


                </div>
                <div class="card-body">

                    <a href="{{ route('admin.stall.index') }}"
                        class="btn btn-danger waves-effect waves-light">
                        Back
                    </a>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        Update <i class="ri-arrow-right-line align-middle ml-2"></i>
                    </button>

                </div>
            </div>
        </div>
    </div>
</form>



<!-- end main content-->
@push('js')

    <!-- Summernote js -->
    <script src="{{ asset('admin/assets/libs/summernote/summernote-bs4.min.js') }}"></script>

    <!-- bs custom file input plugin -->
    <script
        src="{{ asset('admin/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js') }}">
    </script>

    <script src="{{ asset('admin/assets/js/pages/form-element.init.js') }}"></script>
    <!--tinymce js-->
    <script src="{{ asset('admin/assets/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('admin/assets/js/pages/form-editor.init.js') }}"></script>

    {{-- new feld js --}}

{{-- <script src="{{ asset('admin/assets/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>

<script src="{{asset('admin/assets/js/pages/form-advanced.init.js')}}"></script> --}}

@endpush

@endsection
