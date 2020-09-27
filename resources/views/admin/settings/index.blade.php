@extends('layouts.admin.layout')

@section('title','Settings')

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
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->


<form method="POST" action="{{ route('admin.settings.update', 1) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')




    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Update Settings</h4>
            <p class="card-title-desc"> Updated: {{$settings->updated_at->diffForHumans()}}</p>

                <div class="row">
                    <div class="col-md-2">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-2 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Site Info</a>
                        <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Social Link</a>
                        <a class="nav-link mb-2" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Page Link</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Footer</a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body" style="height:800px;">
                                                <h4 class="card-title">Site Name</h4>
                                                <p class="card-title-desc">Site Name/Title 50 Word</code>.</p>
                                                <div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="site_name" placeholder="Site Name" value="{{ $settings->site_name }}" required>
                                                    </div>
                                                    <h4 class="card-title">Header Logo Upload</h4>
                                                    <p class="card-title-desc"> Upload 200x50 px</p>
                                                    <div class="col-md-6">
                                                    <img class="img-thumbnail" alt="200x50" style="height:50px;" src="{{asset('/'.$settings->head_img)}}" data-holder-rendered="true">
                                                    </div>
                                                    <br>
                                                    <div class="custom-file">
                                                        <input type="file" name="head_img" class="form-control-file">
                                                    </div>

                                                    <h4 class="card-title">Favicon Logo Upload</h4>
                                                    <p class="card-title-desc"> Upload 100x100 px</p>
                                                    <div class="col-md-6">
                                                    <img class="img-thumbnail" alt="200x200" style="height:100px;" src="{{asset('/'.$settings->favicon)}}" data-holder-rendered="true">
                                                    </div>
                                                    <br>
                                                    <div class="custom-file">
                                                        <input type="file" name="favicon" class="form-control-file">
                                                    </div>

                                                    <h4 class="card-title">Footer Logo Upload</h4>
                                                    <p class="card-title-desc"> Upload 70x20 px</p>
                                                    <div class="col-md-6">
                                                    <img class="img-thumbnail" alt="200x200" style="height:20px;" src="{{asset('/'.$settings->foo_img)}}" data-holder-rendered="true">
                                                    </div>
                                                    <br>
                                                    <div class="custom-file">
                                                        <input type="file" name="foo_img" class="form-control-file">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body" style="height:800px;">
                                                <h4 class="card-title">Update Social Links</h4>
                                                <div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="fb" placeholder="Facebook" value="{{ $settings->fb }}" required>
                                                    </div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="instra" placeholder="Instragram" value="{{ $settings->instra }}" required>
                                                    </div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="youtube" placeholder="Youtube" value="{{ $settings->youtube }}" required>
                                                    </div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="pinterest" placeholder="Pinterest" value="{{ $settings->pinterest }}" required>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">



                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body" style="height:800px;">
                                                <h4 class="card-title">Update Site Links</h4>
                                                <div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="faq" placeholder="FAQ" value="{{ $settings->faq }}" required>
                                                    </div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="contact" placeholder="Contact Us" value="{{ $settings->contact }}" required>
                                                    </div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="career" placeholder="Career" value="{{ $settings->career }}" required>
                                                    </div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="privacy" placeholder="Privacy" value="{{ $settings->privacy }}" required>
                                                    </div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="terms" placeholder="Terms" value="{{ $settings->terms }}" required>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body" style="height:800px;">
                                                <h4 class="card-title">Update Footer</h4>
                                                <div>
                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="app" placeholder="Android App Link" value="{{ $settings->app }}">
                                                    </div>

                                                    <div class="mb-4">
                                                        <input class="form-control" type="text" name="copyright" placeholder="Copyright" value="{{ $settings->copyright }}" required>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <button type="submit" class="btn btn-primary waves-effect waves-light">
                    Update <i class="ri-arrow-right-line align-middle ml-2"></i>
                </button>

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
