@extends('layouts.admin.layout')

@section('title','Edit Page')

@push('css')


        <!-- Summernote css -->
        <link href="{{asset('admin/assets/libs/summernote/summernote-bs4.min.cs')}}s" rel="stylesheet" type="text/css" />

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
                    <li class="breadcrumb-item active">Create Page</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form method="POST" action="{{route('admin.page.update', $page->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Page Title</h4>
                <p class="card-title-desc">Page Title 100 word</code>.</p>
                <div>
                    <div class="mb-4">
                    <input class="form-control" type="text" name="name" placeholder="Page Title" value="{{$page->name}}" required>
                    </div>

                    <div class="mb-4">
                    <input class="form-control" type="text" name="slug" placeholder="Page Slug/URL" value="{{$page->slug}}" required>
                    </div>
                    <div class="custom-control custom-switch mb-2" dir="ltr">
                        <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" value="1" {{ $page->status == true ?'checked' : '' }} >
                        <label class="custom-control-label" for="customSwitch1">Active/Inactive</label>
                    </div>
                </div>

                    <h4 class="card-title">Page Body</h4>
                    <p class="card-title-desc">Write Page here and supported with html.</p>


            <textarea id="elm1" name="body">{{$page->body}}</textarea>


            </div>
                <div class="card-body">
                    <a href="{{route('admin.page.index')}}" class="btn btn-danger waves-effect waves-light">
                        Back
                    </a>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        Submit <i class="ri-arrow-right-line align-middle ml-2"></i>
                    </button>

                </div>
            </div>
        </div>
    </div>
</form>






<!-- end main content-->
@push('js')

        <!-- Summernote js -->
    <script src="{{asset('admin/assets/libs/summernote/summernote-bs4.min.js')}}"></script>

    <!-- bs custom file input plugin -->
    <script src="{{asset('admin/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/pages/form-element.init.js')}}"></script>
    <!--tinymce js-->
    <script src="{{asset('admin/assets/libs/tinymce/tinymce.min.js')}}"></script>

    <!-- init js -->
    <script src="{{asset('admin/assets/js/pages/form-editor.init.js')}}"></script>

@endpush

@endsection
