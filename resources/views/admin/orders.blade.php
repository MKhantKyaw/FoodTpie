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
              <h6 class="m-0 font-weight-bold text-primary">Oders</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>OrderID</th>
                      <th>Cutomer Name</th>
                      <th>Payment Status</th>
                      <th>Date</th>
                      <th>Phone Number</th>
                      <th>Location</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>OrderID</th>
                      <th>Cutomer Name</th>
                      <th>Payment Status</th>
                      <th>Date</th>
                      <th>Phone Number</th>
                      <th>Location</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   @foreach($orders as $order)
                      <?php $temp = $order->id ?>
                        <tr>
                          <td>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                            {{ $order -> id }}
                            </button>
                          </td>
                          <td>{{ $order -> customer_name }}</td>
                          <td>{{ $order -> status }}</td>
                          <td>{{ $order -> order_date }}</td>
                          <td>{{ $order -> phone_num }}</td>
                          <td>{{ $order -> order_location }}
                        </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
            <table  cellpadding = "10px"align = "center">
              
          @foreach($products as $product)
            <tr>
              <td style="padding-right: 60px">{{ $product -> product_name }}</td>
              <td style="padding-right: 60px">{{ $product-> quantity.' serving' }}</td>
            </tr>
          @endforeach
        
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


@endsection

@section('script')
 
  <!-- Bootstrap core JavaScript-->
  <script src="{{ URL::asset('administrator/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('administrator/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ URL::asset('administrator/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ URL::asset('administrator/js/sb-admin-2.min.js') }}"></script>


  <script src="{{ URL::asset('administrator/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('administrator/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ URL::asset('administrator/js/demo/datatables-demo.js') }}"></script>
@endsection
