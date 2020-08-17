@extends('layouts.admin.layout')

@section('title','Deshboard')


@section('main')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">PCHUTBD</a></li>
                    <li class="breadcrumb-item active">Users List</li>
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

                <form action="{{route('admin.users.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Add User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom01">Full Name</label>
                                            <input type="text" name="name" class="form-control" id="validationCustom01"
                                                placeholder="Full name" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom01">Password</label>
                                            <input type="password" name="password" class="form-control" id="validationCustom01"
                                                placeholder="Password" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom01">Email</label>
                                            <input type="text" name="email" class="form-control" id="validationCustom01"
                                                placeholder="Email" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <div>
                                                <textarea name="address" required class="form-control" rows="5" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom01">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" id="validationCustom01"
                                                placeholder="Phone Number" value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom01">Gender</label>
                                            <select name="gender" class="form-control" required>
                                                <option>Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom01">City</label>
                                            <select name="city" class="form-control" required>
                                                <option>Select</option>
                                                <option value="Bagherhat">Bagherhat</option>
                                                <option value="Bandarban">Bandarban</option>
                                                <option value="Barguna">Barguna</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Bhola">Bhola</option>
                                                <option value="Bogra">Bogra</option>
                                                <option value="Brahmanbaria">Brahmanbaria</option>
                                                <option value="Chandpur">Chandpur</option>
                                                <option value="Chapainawabganj">Chapainawabganj</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="Chuadanga">Chuadanga</option>
                                                <option value="Comilla">Comilla</option>
                                                <option value="Cox's Bazar">Cox's Bazar</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Dinajpur">Dinajpur</option>
                                                <option value="Faridpur">Faridpur</option>
                                                <option value="Feni">Feni</option>
                                                <option value="Gaibandha">Gaibandha</option>
                                                <option value="Gazipur">Gazipur</option>
                                                <option value="Gopalganj">Gopalganj</option>
                                                <option value="Habiganj">Habiganj</option>
                                                <option value="Jamalpur">Jamalpur</option>
                                                <option value="Jessore">Jessore</option>
                                                <option value="Jhalokati">Jhalokati</option>
                                                <option value="Jhenaidaha">Jhenaidaha</option>
                                                <option value="Joypurhat">Joypurhat</option>
                                                <option value="Khagrachhari">Khagrachhari</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Kishoreganj">Kishoreganj</option>
                                                <option value="Kurigram">Kurigram</option>
                                                <option value="Kushtia">Kushtia</option>
                                                <option value="Lakshmipur">Lakshmipur</option>
                                                <option value="Lalmonirhat">Lalmonirhat</option>
                                                <option value="Madaripur">Madaripur</option>
                                                <option value="Magura">Magura</option>
                                                <option value="Manikganj">Manikganj</option>
                                                <option value="Maulvi Bazar">Maulvi Bazar</option>
                                                <option value="Meherpur">Meherpur</option>
                                                <option value="Munshiganj">Munshiganj</option>
                                                <option value="Mymensingh">Mymensingh</option>
                                                <option value="Naogaon">Naogaon</option>
                                                <option value="Narail">Narail</option>
                                                <option value="Narayanganj">Narayanganj</option>
                                                <option value="Narsingdi">Narsingdi</option>
                                                <option value="Natore">Natore</option>
                                                <option value="Netrokona">Netrokona</option>
                                                <option value="Nilphamari">Nilphamari</option>
                                                <option value="Noakhali">Noakhali</option>
                                                <option value="Pabna">Pabna</option>
                                                <option value="Panchagarh">Panchagarh</option>
                                                <option value="Patuakhali">Patuakhali</option>
                                                <option value="Pirojpur">Pirojpur</option>
                                                <option value="Rajbari">Rajbari</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Rangamati">Rangamati</option>
                                                <option value="Rangpur">Rangpur</option>
                                                <option value="Saidpur">Saidpur</option>
                                                <option value="Shariatpur">Shariatpur</option>
                                                <option value="Shatkhira">Shatkhira</option>
                                                <option value="Sherpur">Sherpur</option>
                                                <option value="Sirajganj">Sirajganj</option>
                                                <option value="Sunamganj">Sunamganj</option>
                                                <option value="Sylhet">Sylhet</option>
                                                <option value="Tangail">Tangail</option>
                                                <option value="Thakurgaon">Thakurgaon</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom01">Country</label>
                                            <select name="country" class="form-control">
                                                <option>Select</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="validationCustom01">User Type</label>
                                            <select name="role_id" class="form-control" required>
                                                <option>Select</option>
                                                <option value="2">Client</option>
                                                <option value="1">Admin</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h4 class="card-title">Upload Picture</h4>
                                            <div class="custom-file">
                                                <input name="img" type="file" class="custom-file-input" id="customFile" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                Submit
                                            </button>
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"
                                                aria-label="Close">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </form>

                </div>

                </div>

                <h4 class="card-title mb-4">User List</h4>

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
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $item)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordercheck1">
                                            <label class="custom-control-label" for="ordercheck1">&nbsp;</label>
                                        </div>
                                    </td>

                                    <td><a href="javascript: void(0);"
                                            class="text-dark font-weight-bold">{{ $key + 1 }}</a> </td>
                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    <td>{{ $item->email }}</td>

                                    <td>
                                        <a href="tel:{{ $item->phone }}">
                                            {{ $item->phone }}

                                        </a>
                                    </td>
                                    <td>
                                        @if($item->role_id == 1)
                                            <div class="badge badge-soft-primary font-size-12">Admin</div>
                                        @elseif($item->is_seller)

                                            <div class="badge badge-soft-success font-size-12">Seller</div>
                                        @else

                                            <div class="badge badge-soft-warning font-size-12">Client</div>
                                            @if($item->seller_req)

                                                <div class="badge badge-soft-success font-size-12">Requested</div>
                                            @else
                                                <div class="badge badge-soft-danger font-size-12">Not Requested</div>
                                            @endif
                                        @endif


                                    </td>
                                    <td>
                                        <a href="{{route('admin.users.edit', $item->id)}}" class="mr-3 text-primary" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit"><i
                                                class="mdi mdi-pencil font-size-18"></i>
                                        </a>

                                        <a class="text-danger" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Delete"  onclick="blogDelete({{ $item->id }})"><i
                                            class="mdi mdi-trash-can font-size-18"></i>
                                    </a>
                                        <form method="POST" style="display: none;" action="{{route('admin.category.destroy', $item->id)}}" id="delete-form-{{$item->id}}">
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
<!-- end row -->

@push('js')

<!-- bs custom file input plugin -->
<script src="{{ asset('admin/assets/libs/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/pages/form-element.init.js')}}"></script>

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




<!-- end main content-->
@endsection
