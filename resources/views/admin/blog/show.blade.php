@extends('layouts.admin.layout')

@section('title','View Blogs')

@push('css')

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
                    <li class="breadcrumb-item active">View Blog</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->



<div class="row">

    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <h3>{{$blog->title}}</h3>
            <small>Posted By <strong>Admin</strong> on {{$blog->created_at->toFormattedDateString()}}
                @if($blog->status == true)


                    <span class="badge badge-pill badge-soft-success">Active</span>

                @else

                    <span class="badge badge-pill badge-soft-danger">Inactive</span>

                @endif
            </small>
            </div>
            <div class="card-body">

                {!! $blog->body !!}

            </div>
            <div class="card-footer text-muted">
                Updated on {{$blog->updated_at->diffForHumans()}}
            </div>
        </div>
    </div>


    <div class="col-lg-3">
        <div class="card">
            <div class="card-header">
                <h5>Featured Image</h5>
            </div>
            <div class="card-body">
                <blockquote class="card-blockquote mb-0">
                    <img class="img-thumbnail" alt="200x200" style="height:150px;" src="{{Storage::disk('public')->url('blog/'.$blog->img)}}" data-holder-rendered="true">
                    <footer class="blockquote-footer font-size-12">
                        Image Name: <cite title="Source Title">{{$blog->img}}</cite>
                    </footer>
                    <a href="{{route('admin.blog.index')}}" class="btn btn-danger waves-effect waves-light">Back</a>
                    <a href="{{route('admin.blog.edit', $blog->id)}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                </blockquote>
            </div>
        </div>
    </div>

</div>
<!-- end row -->
<!-- end main content-->
@push('css')



@endpush

@endsection
