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


    <div class="col-lg-3">
        <div class="card">
            <div class="card-header">
                <h6><b> <a href="#">{{$stall->user()->find($stall->user_id)->first()->name}}</a></b>
                    <span class="badge badge-primary">{{$stall->id}}</span></h6>
            </div>
            <div class="card-body">
                <blockquote class="card-blockquote mb-0">
                    @if (Storage::disk('public')->exists('stall/'.$stall->img))

                    <img class="img-thumbnail" alt="200x200" style="width:500px;" src="{{Storage::disk('public')->url('stall/'.$stall->img)}}" data-holder-rendered="true">

                    @else

                    <img class="img-thumbnail" alt="200x200" style="width:500px;" src="{{asset('img/picture.jpg')}}" data-holder-rendered="true">

                    @endif
                    <br>
                    <footer class="blockquote-footer font-size-12">
                        Item/Post Limit: <cite title="Source Title">
                            <span class="badge badge-primary">{{$stall->item_limit}}</span></cite>
                    </footer>
                    <footer class="blockquote-footer font-size-12">
                        Plan End: <cite title="Source Title"><span class="badge badge-warning">{{$stall->item_exp}}</span>-{{$stall->plan}}</cite>
                    </footer>
                    <br>
                    <a href="{{route('admin.stall.index')}}" class="btn btn-danger waves-effect waves-light">Back</a>
                    <a href="{{route('admin.stall.edit', $stall->id)}}" class="btn btn-primary waves-effect waves-light">Edit</a>
                </blockquote>
            </div>
        </div>
    </div>




    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <h3>{{$stall->title}}</h3>
            <small>Joined on {{$stall->created_at->toFormattedDateString()}}
                @if($stall->user()->find($stall->user_id)->is_seller == true)


                    <span class="badge badge-pill badge-soft-success">Approve</span>

                @else

                    <span class="badge badge-pill badge-soft-danger">Not Approve</span>

                @endif
            </small>
            <small>
                @if($stall->status == true)


                    <span class="badge badge-pill badge-soft-success">Active</span>

                @else

                    <span class="badge badge-pill badge-soft-danger">Disable</span>

                @endif
            </small>
            </div>
            <div class="card-body" style="color: white; font-size: 17px;">
                <div class="row">
                    <div class="col-lg-3">
                        <b>Stall Name:</b>
                    </div>
                    <div class="col-lg-9">
                    <small>{{ $stall->name}}</small>
                    </div>
                </div>

                    <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Stall Address:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->address}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Stall Area:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->area}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Stall City:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->city}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Postal Code:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->postcode}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Country:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->country}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Business:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->business}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Stall type:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->type}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Stall Phone:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->phone}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Hotlines:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->hotline1}}</small>,
                        <small>{{ $stall->hotline2}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Stall Email:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->email}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Stall Web:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->web}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Stall Fax:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->fax}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Contact Person:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->person_name}}</small>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <b>Stall Description:</b>
                    </div>
                    <div class="col-lg-9">
                        <small>{{ $stall->about}}</small>
                    </div>
                </div>



            </div>
            <div class="card-footer text-muted">
                Updated on {{$stall->updated_at->diffForHumans()}}
            </div>
        </div>
    </div>



</div>
<!-- end row -->
<!-- end main content-->
@push('css')



@endpush

@endsection
