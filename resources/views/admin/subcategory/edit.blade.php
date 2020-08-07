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
                    <li class="breadcrumb-item active">Edit Sub Category</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form method="POST" action="{{ route('admin.category.update', $category->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body" style="height:490px;">
                    <h4 class="card-title">Edit SubCategory</h4>
                    <div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Category</label>
                            <div class="col-md-9">
                                <select name="parent" class="form-control">
                                <option value="{{$category->parent}}">{{App\Category::where('id',$category->parent)->first()->name}}</option>
                                    @foreach ( App\Category::all() as $item)

                                <option value="{{ $item->id }}">{{$item->name}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <input class="form-control" type="text" name="name" placeholder="Category Name" value="{{ $category->name }}" required>
                        </div>
                        <h4 class="card-title">Picture Upload</h4>
                        <p class="card-title-desc"> Upload 512x512 px</p>
                        <div class="col-md-6">
                        <img class="img-thumbnail" alt="200x200" style="height:150px;" src="{{asset('storage/subcategory/'.$category->img)}}" data-holder-rendered="true">
                        </div>
                        <br>
                        <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
                        </div>
                        {{-- <br><br>
                        <div class="custom-control custom-switch mb-2" dir="ltr">
                            <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" value="1" {{ $category->status == true ?'checked' : '' }} >
                            <label class="custom-control-label" for="customSwitch1">Active/Inactive</label>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                {{-- <div class="card-body">

                    <h4 class="card-title">category Body</h4>
                    <p class="card-title-desc">Write category here and supported with html.</p>


                <textarea id="elm1" name="body">{{ $category->body }}</textarea>


                </div> --}}
                <div class="card-body">

                    <a href="{{route('admin.category.index')}}" class="btn btn-danger waves-effect waves-light">
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
