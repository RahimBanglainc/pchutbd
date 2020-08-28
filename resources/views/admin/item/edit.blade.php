@extends('layouts.admin.layout')

@section('title','Edit Item')

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
                    <li class="breadcrumb-item active">Edit Item</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<form method="POST" action="{{ route('admin.item.update', $item->id) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body" style="">
                    <h4 class="card-title">Item Update</h4>
                    <p class="card-title-desc"></code>All Information Input From Stall User</p>
                    <div>
                        <div class="mb-4">
                            <label>Item Title</label>
                            <input class="form-control" type="text" name="title" placeholder="Blog Title"
                                value="{{ $item->title }}" required>
                        </div>
                        <div class="mb-4">
                            <label>Model</label>
                            <input class="form-control" type="text" name="model" placeholder="item Title"
                                value="{{ $item->model }}" required>
                        </div>
                        <div class="mb-4">
                            <label>Item Price</label>
                            <input class="form-control" type="text" name="price" placeholder="item Title"
                                value="{{ $item->price }}" required>
                        </div>
                        <div class="mb-4">
                            <label>Shipping in Dhaka</label>
                            <input class="form-control" type="text" name="ship_dhaka" placeholder="item Title"
                                value="{{ $item->ship_dhaka }}">
                        </div>
                        <div class="mb-4">
                            <label>Shipping All Bangladesh</label>
                            <input class="form-control" type="text" name="ship_bd" placeholder="item Title"
                                value="{{ $item->ship_bd }}">
                        </div>
                        <div class="mb-4">
                            <label>Offer</label>
                            <textarea name="offer" placeholder="Offer" class="form-control"
                                rows="5">{{ $item->offer }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="5"
                                required>{{ $item->description }}</textarea>
                        </div>
                        <label>Stall</label>
                        <div class="col-md-12 mb-4">
                            <select class="form-control">
                                <option>Select</option>
                                <option value="{{$item->stall_id}}" selected="">{{$item->stall()->where('id', $item->stall_id)->first()->name}}</option>

                            </select>
                        </div>
                        <label>SubCategory</label>
                        <div class="col-md-12 mb-4">
                            <select class="form-control">
                                <option>Select</option>
                                <option value="{{$item->subcategory_id}}" selected="">{{$item->subcategory()->where('id', $item->subcategory_id)->first()->name}}</option>
                            </select>
                        </div>
                        <label>Brand</label>
                        <div class="col-md-12 mb-4">
                            <select class="form-control">
                                <option>Select</option>
                                <option value="0" selected="">Others</option>
                            </select>
                        </div>
                        <label>Stock</label>
                        <div class="col-md-12 mb-4">
                            <select name="stock" class="form-control">
                                <option>Select</option>
                                <option value="1"
                                    {{ $item->stock ? 'selected':'' }}>
                                    In Stock</option>
                                <option value="0"
                                    {{ $item->stock ? '':'selected' }}>
                                    Sold Out</option>
                            </select>
                        </div>



                        <h4 class="card-title">Picture Upload</h4>
                        <p class="card-title-desc"> Upload 350x350px</p>
                        <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-2">
                                @if (Storage::disk('public')->exists('item/'.$item->img))


                                <img class="img-thumbnail" alt="200x200" style="width:100px;"
                                    src="{{ asset('/'.$item->img) }}"
                                    data-holder-rendered="true">

                                @else

                                <img class="img-thumbnail" alt="200x200" style="width:100px;" src="{{asset('img/picture.jpg')}}" data-holder-rendered="true">

                                @endif
                            </div>
                            <div class="col-md-2">
                                @if (Storage::disk('public')->exists('item/'.$item->img1))


                                <img class="img-thumbnail" alt="200x200" style="width:100px;"
                                    src="{{ asset('/'.$item->img1) }}"
                                    data-holder-rendered="true">

                                @else

                                <img class="img-thumbnail" alt="200x200" style="width:100px;" src="{{asset('img/picture.jpg')}}" data-holder-rendered="true">

                                @endif
                            </div>
                            <div class="col-md-2">
                                @if (Storage::disk('public')->exists('item/'.$item->img2))


                                <img class="img-thumbnail" alt="200x200" style="width:100px;"
                                    src="{{ asset('/'.$item->img2) }}"
                                    data-holder-rendered="true">

                                @else

                                <img class="img-thumbnail" alt="200x200" style="width:100px;" src="{{asset('img/picture.jpg')}}" data-holder-rendered="true">

                                @endif
                            </div>
                            <div class="col-md-2">
                                @if (Storage::disk('public')->exists('item/'.$item->img3))


                                <img class="img-thumbnail" alt="200x200" style="width:100px;"
                                    src="{{ asset('/'.$item->img3) }}"
                                    data-holder-rendered="true">

                                @else

                                <img class="img-thumbnail" alt="200x200" style="width:100px;" src="{{asset('img/picture.jpg')}}" data-holder-rendered="true">

                                @endif
                            </div>
                            <div class="col-md-2">
                                @if (Storage::disk('public')->exists('item/'.$item->img4))


                                <img class="img-thumbnail" alt="200x200" style="width:100px;"
                                    src="{{ asset('/'.$item->img4) }}"
                                    data-holder-rendered="true">

                                @else

                                <img class="img-thumbnail" alt="200x200" style="width:100px;" src="{{asset('img/picture.jpg')}}" data-holder-rendered="true">

                                @endif
                            </div>


                        </div>
                        <br>
                        <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image</label>
                        </div>
                        <br><br>
                        <div class="custom-file">
                            <input type="file" name="img1" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image 1</label>
                        </div>
                        <br><br>
                        <div class="custom-file">
                            <input type="file" name="img2" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image 2</label>
                        </div>
                        <br><br>
                        <div class="custom-file">
                            <input type="file" name="img3" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image 3</label>
                        </div>
                        <br><br>
                        <div class="custom-file">
                            <input type="file" name="img4" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose Image 4</label>
                        </div>
                        <br><br>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Item Features</h4>
                    <p class="card-title-desc">Not Change Features</p>


                    <table style="width:100%">
                        <tbody>


                            @foreach (App\FeatureValue::where('item_id', $item->id)->get() as $key => $value)

                                <tr>
                                    <td width="30%" align="center">
                                        <input type="hidden" name="feature_id[{{ $key }}]" value="{{$value->feature_id}}">
                                        {{ $value->feature()->where('id', $value->feature_id)->first()->name }}
                                    </td>
                                    <td width="70%" align="left">
                                        <input type="text" readonly="readonly" name="value[{{ $key }}]"
                                            value=" {{ $value->value }}" style="width:100% !important">
                                    </td>
                                </tr>
                            @endforeach



                            <tr>
                                <td width="30%" align="center">

                                    Warranty </td>
                                <td width="70%" align="left">
                                    <input type="text" name="warranty"
                                        value="{{ $item->warranty }}" style="width:100% !important">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="rowCount" value="{{App\FeatureValue::where('item_id', $item->id)->count()}}">





                    <br>

                    @if (!$item->is_approve == 1)

                    <div class="custom-control custom-switch mb-2" dir="ltr">
                        <input type="checkbox" name="is_approve" class="custom-control-input" id="customSwitch1"
                            value="true"
                            {{ $item->is_approve == true ?'checked' : '' }}>
                        <label class="custom-control-label" for="customSwitch1">Approve Item</label>
                    </div>

                    @else

                    <div class="custom-control custom-switch mb-2" dir="ltr">
                        <input type="checkbox" name="status" class="custom-control-input" id="customSwitch2" value="1"
                            {{ $item->status == true ?'checked' : '' }}>
                        <label class="custom-control-label" for="customSwitch2">Active/Disable Item</label>
                    </div>

                    @endif


                </div>
                <div class="card-body">

                    <a href="{{ route('admin.item.index') }}"
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

    </script>

@endpush

@endsection
