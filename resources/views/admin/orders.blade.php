@extends('partials/layout')

@section('pageTitle', 'Orders')

@section('content')


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Orders</h1>
         {{--  <p class="mb-4">There are currently <b>{{ $counts }}</b> users in FoodTPie.</p> --}}

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="orderTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone Number</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   
                        <tr>
                          <td>haha</td>
                          <td>haha</td>
                          <td>haha</td>
                          <td>hehe</td>
                        </tr>
                
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection

@section('script')
 
  <!-- Bootstrap core JavaScript-->
  <script src="{{ URL::asset('administrator/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('administrator/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ URL::asset('administrator/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ URL::asset('administrator/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
{{--   <script src="{{ URL::asset('administrator/vendor/datatables/jquery.dataTables.min.js') }}"></script> --}}
  <script type="text/javascript">
    $(document).ready( function () {
    $('#orderTable').DataTable();
} );
    </script>
  <script src="{{ URL::asset('administrator/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ URL::asset('administrator/js/demo/datatables-demo.js') }}"></script>

@endsection
