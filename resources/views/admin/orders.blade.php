@extends('partials/layout')

@section('pageTitle', 'Orders')

@section('content')


        <!-- Begin Page Content --> 
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Orders</h1>
         {{--  <p class="mb-4">There are currently <b>{{ $counts }}</b> users in FoodTPie.</p> --}}

          <!-- DataTales Example -->
          <div class="card shadow mb-4"><script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
                      <th>Remark</th>
                      <th>Payment Status</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Phone Number</th>
                      <th>Location</th>
                      <th>Invoice</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>OrderID</th>
                      <th>Cutomer Name</th>
                      <th>Remark</th>
                      <th>Payment Status</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Phone Number</th>
                      <th>Location</th>
                      <th>Invoice</th>
                    </tr>
                  </tfoot>
                  <tbody>
                   @foreach($orders as $order)
                      <?php $temp = $order->id ?>
                        <tr>
                          <td>
                            <button type="button" class="btn btn-info btn-lg" id="{{$order->id}}" value="{{$order->id}}">
                            {{ $order -> id }}
                            </button>
                          </td>
                          <td>{{ $order -> customer_name }}</td>
                          <td>{{ $order -> remark }}</td>
                          <td>{{ $order -> status }}</td>
                          <td>{{ $order -> order_date }}</td>
                          <td>{{ $order -> time }}</td>
                          <td>{{ $order -> phone_num }}</td>
                          <td>{{ $order -> order_location }}
                          <td>
                            <a id="invoice" class="btn btn-success" href="/admin/invoice/{{ $order -> id }}">
                                Get Invoice
                            </a>
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
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button  class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" id="modal-body">
        <table cellpadding="15px" align="center" id="haha">
        <div id="delete" style="align:center">
          <tr id="food">
          </tr>
        </div>
        </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      
    </div>
  </div>

  <script type="text/javascript">
        $(document).ready(function(){
          var prods = JSON.parse('<?php echo json_encode($products) ?>')
          
          $('body').on('click', 'button', function(e) {

            if( $(this).attr('id') != 'sidebarToggle' )
               {
                     $("#delete").remove();
                         $("#haha").append("<div id='delete'></div>");
                
                         for (var i = 0 ; i<=prods.length - 1; i++) {
         
                           if(prods[i].order_id == $(this).attr('id')){
                               $("#delete").append("<tr id=p"+prods[i].id+">");
                               $("#p"+prods[i].id).append("<td style='padding-right:40px'>"+ prods[i].product_name+"</td>");
         
                               if(prods[i].quantity > 1)
                                 $("#p"+prods[i].id).append("<td>"+ prods[i].quantity+" servings</td></tr>");
         
                               else
                                 $("#p"+prods[i].id).append("<td>"+ prods[i].quantity+" serving</td></tr>");
                             }
                         }
                         // $("#food").append("<li id="+prods[1].id+">"+prods[1].product_name+"</li>");
                       $("#myModal").modal("show");
               }
              else
              {
                // window.location = "/admin";
              }
          });
        });

</script>

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
