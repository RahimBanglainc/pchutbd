@extends('layouts.admin.layout')

@section('title','Blogs')



@section('main')

@push('css')

 <!-- Sweet Alert-->
 <link href="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

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
                    <li class="breadcrumb-item active">Blogs</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-right">
                    <a href="{{route('admin.blog.create')}}" class="btn btn-success mb-2"><i class="mdi mdi-plus mr-2"></i> Add Blog</a>
                </div>

                <h4 class="card-title mb-4">All Blogs</h4>

                <div class="table-responsive">
                    <table class="table table-centered datatable dt-responsive nowrap" data-page-length="10"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck">
                                        <label class="custom-control-label" for="ordercheck">&nbsp;</label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Status</th>
                                <th>Views</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $key=>$blog)

                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                        <label class="custom-control-label" for="ordercheck1">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{ $key + 1 }}</a> </td>
                                <td>
                                    {{ \Illuminate\Support\Str::limit($blog->title, 30) }}
                                    {{-- {{ $blog->title }} --}}
                                </td>
                                <td>
                                    {{ \Illuminate\Support\str::limit($blog->body, 50) }}
                                    {{-- {{ $blog->body }} --}}
                                </td>

                                <td>
                                    @if ($blog->status == true)
                                    <div class="badge badge-soft-success font-size-12">Active</div>

                                    @else
                                    <div class="badge badge-soft-danger font-size-12">Inactive</div>

                                    @endif
                                </td>
                                <td>
                                    <div class="badge badge-soft-warning font-size-12">{{ $blog->view_count}}</div>
                                </td>
                                <td>
                                    <a href="{{route('admin.blog.edit', $blog->id)}}" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete" id="sa-warning"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
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


    <!-- Sweet Alerts js -->
    <script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('admin/assets/js/pages/sweet-alerts.init.js') }}"></script>

   <script>
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})

@endpush


<!-- end main content-->
@endsection
