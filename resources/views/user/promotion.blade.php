@extends('user/layout/layout')

@section('pageTitle', 'User Dashboard')

@section('content')

        <!-- Begin Page Content --> 
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Promotion</h1> 
          <div>Feeling Lucky?<br>Win some lucky draw promotion every wednesday.</div>
          <div id="counter"></div>

          <form id="promoForm" style="display: none;" action="/storePromo" method="POST">
            @csrf
            <input type="text" name="promo" id="promo">
            <input type="text" name="recentDraw" id="recentDraw">
          </form>

          <!-- The Modal -->
          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Promotion</h4>
                  <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body" id="modalBody">
                  Dummy
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer" id="modalFooter">
                  <button type="button" onclick="storePromo()" class="btn btn-success" data-dismiss="modal">Save Promo</button>
                </div>
                
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
    var promos = JSON.parse('<?php echo json_encode($promos) ?>')
    var counter =  document.getElementById('counter')
    var promo = 0.0
    
    function checkDoubleDraw(){
      var date = new Date()
      for (var i = 0; i <= promos.length - 1; i++) {
        if (promos[i].recentDraw == date.toLocaleDateString('en-GB') ) {
          return true
        }
      }
      return false
    }

    function countDayHour() {
      var d = new Date()
      var n = 3 - d.getDay()
      var t = 0-d.getHours()
      if(n==1){
        if (t==0){
          t = 24
        }else{
          t += 24
        }
        counter.innerText = t + " hours until the lucky draw"
        return
      }else if(n<0){
        n += 7
      }else if(n == 0){
        if(checkDoubleDraw()){
          counter.innerText = "You have already drawn a time today"
        }else{
          var promotionBut = '<button type="button" onclick="drawPromotion()" data-toggle="modal" data-target="#myModal" class="btn btn-success">Draw Promotion</button>'
          counter.innerHTML = promotionBut
        }
        return
      }
      counter.innerText = n + " days until the lucky draw"

    }

    function drawPromotion(){
      var modal = document.getElementById('modalBody')
      var footer = document.getElementById('modalFooter')
      footer.style.display = 'none'
      modal.innerText = "Determining Your Luck "
      setTimeout( function(){ modal.innerText += " . " }, 1000);
      setTimeout( function(){ modal.innerText += " . " }, 2000);
      setTimeout( function(){ modal.innerText += " . " }, 3000);
      promo = promoGenerate()
      setTimeout( function(){ modal.innerText = "Congratulations! , You won "+promo*100+"% discount coupon."; footer.style.display = 'block';}, 4000);
    }

    function promoGenerate() {
        var num = Math.floor(Math.random() * 1000) + 1
        var promo = "regular"
        if(num>=1 && num<=5){
            promo = 0.4
        }else if(num>=991 && num<=1000){
            promo = 0.35
        }else if((num>=6 && num<=15) || (num>=981 && num<=990)){
            promo = 0.3
        }else if((num>=16 && num<=35) || (num>=961 && num<=980)){
            promo = 0.25
        }else if((num>=36 && num<=85) || (num>=911 && num<=960)){
            promo = 0.2
        }else if((num>=86 && num<=410)){
            promo = 0.15
        }else{
            promo = 0.10
        }
        return promo
    }

    function storePromo(){
      var form = document.getElementById('promoForm')
      var promoInput = document.getElementById('promo')
      promoInput.value = promo
      var date = new Date()
      var recentDraw = document.getElementById('recentDraw')
      recentDraw.value = date.toLocaleDateString('en-GB')
      form.submit()
    }

    setInterval(countDayHour(), 600000);
  </script>
  <script src="{{ URL::asset('administrator/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ URL::asset('administrator/js/demo/datatables-demo.js') }}"></script>

@endsection
