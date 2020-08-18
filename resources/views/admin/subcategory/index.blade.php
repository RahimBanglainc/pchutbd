@extends('layouts.admin.layout')

@section('title','Sub Category')



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
                    <li class="breadcrumb-item active">Sub Categorys</li>
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
                    <div class="col-sm-6 col-md-4 col-xl-3">

                            <!-- Small modal -->
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center"><i class="mdi mdi-plus mr-2"></i></button>

                    <form action="{{route('admin.subcategory.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                        <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0">Add SubCategory</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label">Category</label>
                                            <div class="col-md-9">
                                                <select name="category_id" class="form-control">
                                                    <option>Select</option>
                                                    @foreach ( App\Category::all() as $item)

                                                <option value="{{ $item->id }}">{{$item->name}}</option>

                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <input class="form-control" type="text" name="name" placeholder="SubCategory Name" required>
                                        </div>
                                        <h4 class="card-title">Picture Upload</h4>
                                        <p class="card-title-desc"> Upload 100x100 px</p>
                                        <div class="custom-file">
                                            <input type="file" name="img" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose Image</label>
                                        </div>
                                        <br><br><br>
                                        {{-- <div class="custom-control custom-switch mb-2" dir="ltr">
                                            <input type="checkbox" name="status" class="custom-control-input" id="customSwitch1" value="1" checked>
                                            <label class="custom-control-label" for="customSwitch1">Active/Inactive</label>
                                        </div> --}}

                                        <button type="submit" class="btn btn-success mb-2">Submit</button>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </form>

                    </div>
                </div>

                <h4 class="card-title mb-4">All Categorys</h4>

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
                                <th>Name</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categorys as $key=>$item)

                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                        <label class="custom-control-label" for="ordercheck1">&nbsp;</label>
                                    </div>
                                </td>

                                <td><a href="javascript: void(0);" class="text-dark font-weight-bold">{{ $key + 1 }}</a> </td>
                                <td>
                                <a href="{{ route('admin.subcategory.edit', $item->id) }}">
                                        {{ $item->name }}
                                    </a>
                                </td>
                                <td>
                                    {!! App\Category::where('id', $item->Category_id)->first()->name !!}
                                </td>

                                <td>

                                    <div class="badge badge-soft-success font-size-12">Active</div>

                                </td>
                                <td>
                                    <div class="badge badge-soft-warning font-size-12"><img src="{{ asset('storage/subcategory/'.$item->img)}}" alt="" class="rounded avatar-sm"></div>
                                </td>
                                <td>
                                    <a href="{{route('admin.subcategory.edit', $item->id)}}" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>

                                    <a class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"  onclick="blogDelete({{ $item->id }})"><i
                                            class="mdi mdi-trash-can font-size-18"></i>
                                    </a>
                                        <form method="POST" style="display: none;" action="{{route('admin.subcategory.destroy', $item->id)}}" id="delete-form-{{$item->id}}">
                                            @csrf

                                            @method('DELETE')
                                        </form>
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

function blogDelete(id){
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.value) {
    event.preventDefault();
    document.getElementById('delete-form-'+id).submit();
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your Blog Data is safe',
      'error'
    )
  }
})
    }
</script>

@endpush


@endsection

