@extends('layouts.admin.layout')

@section('title','Deshboard')


@section('main')

@push('css')

<!-- jquery.vectormap css -->
<link
href="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
rel="stylesheet" type="text/css" />

<!-- DataTables -->
<link
href="{{ asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link
href="{{ asset('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
rel="stylesheet" type="text/css" />

@endpush

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">PCHUTBD</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

{{-- ___________________________________________________________ --}}

<div class="row">

    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Number of Item</p>
                                <h4 class="mb-0">{{$items->count()}}</h4>
                            </div>
                            <div class="text-primary">
                                <i class="ri-stack-line font-size-24"></i>
                            </div>
                        </div>
                    </div>

                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> {{$items->where('status', true)->count()}}
                            </span>
                            <span class="text-muted ml-2">Active Item</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Number of Stall</p>
                                <h4 class="mb-0"> {{App\Stall::all()->count()}}</h4>
                            </div>
                            <div class="text-primary">
                                <i class="ri-store-2-line font-size-24"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> {{App\Stall::where('status', true)->count()}}
                            </span>
                            <span class="text-muted ml-2">Active Stall</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Number of Users</p>
                                <h4 class="mb-0">{{App\User::all()->count()}}</h4>
                            </div>
                            <div class="text-primary">
                                <i class="ri-account-box-line font-size-24"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> {{App\User::where('is_seller', true)->count()}}
                            </span>
                            <span class="text-muted ml-2">Active Seller</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Number of Blogs</p>
                                <h4 class="mb-0">{{App\Blog::all()->count()}}</h4>
                            </div>
                            <div class="text-primary">
                                <i class=" ri-newspaper-line font-size-24"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> {{App\Blog::where('status', true)->count()}}
                            </span>
                            <span class="text-muted ml-2">Active Blogs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>

</div>
<!-- end row -->


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-right">
                    {{-- <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div> --}}
                </div>

                <h4 class="card-title mb-4">Latest Item</h4>

                <div class="table-responsive">
                    <table class="table table-centered datatable dt-responsive nowrap" data-page-length="6"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck">
                                        <label class="custom-control-label" for="ordercheck">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Item ID</th>
                                <th>Title</th>
                                <th>subCategory</th>
                                <th>Stall Name</th>
                                <th>Status</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $key => $item)
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                        <label class="custom-control-label" for="ordercheck1">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{$key + 1}}</a> </td>
                                <td>
                                    @if ($item->status)

                                    <a href="{{route('item.view', $item->slug)}}">
                                        {{$item->title}}

                                    </a>

                                    @else

                                    {{$item->title}}
                                    @endif
                                </td>
                                <td>{{$item->subcategory()->where('id', $item->subcategory_id)->first()->name}}</td>

                                <td>
                                <a href="{{route('admin.stall.show', $item->stall_id)}}">
                                        {{$item->stall()->where('id', $item->stall_id)->first()->name}}

                                    </a>
                                </td>
                                <td>
                                    <div class="badge badge-soft-warning font-size-12">{{$item->views}}</div>
                                    @if ($item->is_approve)

                                    <div class="badge badge-soft-success font-size-12">Approve</div>
                                    @else

                                    <div class="badge badge-soft-warning font-size-12">New</div>
                                    @endif

                                    @if ($item->status)

                                    <div class="badge badge-soft-success font-size-12">Enable</div>
                                    @else
                                    <div class="badge badge-soft-danger font-size-12">Disable</div>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.item.edit', $item->id)}}" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    {{-- <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a> --}}
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@push('js')

<!-- apexcharts -->
<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}">
</script>

<!-- jquery.vectormap map -->
<script
    src="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
</script>
<script
    src="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
</script>

<!-- Required datatable js -->
<script
    src="{{ asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}">
</script>
<script
    src="{{ asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}">
</script>

<!-- Responsive examples -->
<script
    src="{{ asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
</script>
<script
    src="{{ asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
</script>

<script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script>

@endpush

<!-- end main content-->
@endsection
