@extends('layouts.admin.layout')

@section('title','Edit Blogs')

@push('css')

    <!-- Summernote css -->
    <link href="{{ asset('admin/assets/libs/summernote/summernote-bs4.min.cs') }}s"
        rel="stylesheet" type="text/css" />

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
                    <li class="breadcrumb-item active">Edit Category</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form method="POST" action="{{ route('admin.users.update', $user->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body" style="">
                    <h4 class="card-title">Edit User</h4>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="validationCustom01">Full Name</label>
                            <input type="text" name="name" class="form-control"
                                id="validationCustom01" placeholder="Full name"
                                value="{{ $user->name }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="validationCustom01">Email</label>
                            <input type="text" name="email" class="form-control"
                                id="validationCustom01" placeholder="Email"
                                value="{{ $user->email }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address</label>
                            <div>
                                <textarea name="address" required
                                    class="form-control"
                                    rows="5">{{ $user->address }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="validationCustom01">Phone Number</label>
                            <input type="text" name="phone" class="form-control"
                                id="validationCustom01" placeholder="Phone Number"
                                value="{{ $user->phone }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="validationCustom01">Gender</label>
                            <select name="gender" class="form-control">
                                <option>Select</option>
                                <option value="{{ $user->gender }}" selected>
                                    {{ $user->gender }}</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="validationCustom01">City</label>
                            <select name="city" class="form-control">
                                <option>Select</option>
                                <option value="{{ $user->city }}"
                                    selected="selected">{{ $user->city }}</option>
                                <option value="Bagherhat">Bagherhat</option>
                                <option value="Bandarban">Bandarban</option>
                                <option value="Barguna">Barguna</option>
                                <option value="Barisal">Barisal</option>
                                <option value="Bhola">Bhola</option>
                                <option value="Bogra">Bogra</option>
                                <option value="Brahmanbaria">Brahmanbaria</option>
                                <option value="Chandpur">Chandpur</option>
                                <option value="Chapainawabganj">Chapainawabganj
                                </option>
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
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="validationCustom01">Country</label>
                            <select name="country" class="form-control">
                                <option>Select</option>
                                <option value="{{$user->country}}" selected>{{$user->country}}
                                </option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <h4 class="card-title">Upload Picture</h4>
                            <div class="custom-file">
                                <input name="img" type="file"
                                    class="custom-file-input" id="customFile">
                                <label class="custom-file-label"
                                    for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="col-md-12">
                    <div class="form-group">
                        <br>
                        <label for="validationCustom01">Password</label>
                        <input type="password" name="password" class="form-control"
                            id="validationCustom01" placeholder="Password"
                            value="">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <a href="{{route('admin.users.index')}}" class="btn btn-danger waves-effect waves-light">
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

    </script>

@endpush

@endsection
