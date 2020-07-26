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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Number of Sales</p>
                                <h4 class="mb-0">1452</h4>
                            </div>
                            <div class="text-primary">
                                <i class="ri-stack-line font-size-24"></i>
                            </div>
                        </div>
                    </div>

                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4%
                            </span>
                            <span class="text-muted ml-2">From previous period</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Sales Revenue</p>
                                <h4 class="mb-0">$ 38452</h4>
                            </div>
                            <div class="text-primary">
                                <i class="ri-store-2-line font-size-24"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4%
                            </span>
                            <span class="text-muted ml-2">From previous period</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Average Price</p>
                                <h4 class="mb-0">$ 15.4</h4>
                            </div>
                            <div class="text-primary">
                                <i class="ri-briefcase-4-line font-size-24"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4%
                            </span>
                            <span class="text-muted ml-2">From previous period</span>
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
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
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
                    </div>
                </div>

                <h4 class="card-title mb-4">Latest Transactions</h4>

                <div class="table-responsive">
                    <table class="table table-centered datatable dt-responsive nowrap" data-page-length="5"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck">
                                        <label class="custom-control-label" for="ordercheck">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Billing Name</th>
                                <th>Total</th>
                                <th>Payment Status</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                        <label class="custom-control-label" for="ordercheck1">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1572</a> </td>
                                <td>
                                    04 Apr, 2020
                                </td>
                                <td>Walter Brown</td>

                                <td>
                                    $172
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck2">
                                        <label class="custom-control-label" for="ordercheck2">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1571</a> </td>
                                <td>
                                    03 Apr, 2020
                                </td>
                                <td>Jimmy Barker</td>

                                <td>
                                    $165
                                </td>
                                <td>
                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck3">
                                        <label class="custom-control-label" for="ordercheck3">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1570</a> </td>
                                <td>
                                    03 Apr, 2020
                                </td>
                                <td>Donald Bailey</td>

                                <td>
                                    $146
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck4">
                                        <label class="custom-control-label" for="ordercheck4">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1569</a> </td>
                                <td>
                                    02 Apr, 2020
                                </td>
                                <td>Paul Jones</td>

                                <td>
                                    $183
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck5">
                                        <label class="custom-control-label" for="ordercheck5">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1568</a> </td>
                                <td>
                                    01 Apr, 2020
                                </td>
                                <td>Jefferson Allen</td>

                                <td>
                                    $160
                                </td>
                                <td>
                                    <div class="badge badge-soft-danger font-size-12">Chargeback</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck6">
                                        <label class="custom-control-label" for="ordercheck6">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1567</a> </td>
                                <td>
                                    31 Mar, 2020
                                </td>
                                <td>Jeffrey Waltz</td>

                                <td>
                                    $105
                                </td>
                                <td>
                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck7">
                                        <label class="custom-control-label" for="ordercheck7">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1566</a> </td>
                                <td>
                                    30 Mar, 2020
                                </td>
                                <td>Jewel Buckley</td>

                                <td>
                                    $112
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck8">
                                        <label class="custom-control-label" for="ordercheck8">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1565</a> </td>
                                <td>
                                    29 Mar, 2020
                                </td>
                                <td>Jamison Clark</td>

                                <td>
                                    $123
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck9">
                                        <label class="custom-control-label" for="ordercheck9">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1564</a> </td>
                                <td>
                                    28 Mar, 2020
                                </td>
                                <td>Eddy Torres</td>

                                <td>
                                    $141
                                </td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck10">
                                        <label class="custom-control-label" for="ordercheck10">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">#NZ1563</a> </td>
                                <td>
                                    28 Mar, 2020
                                </td>
                                <td>Frank Dean</td>

                                <td>
                                    $164
                                </td>
                                <td>
                                    <div class="badge badge-soft-warning font-size-12">unpaid</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
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
