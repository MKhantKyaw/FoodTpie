@extends('partials/layout')
@section('pageTitle','products')

@section('content')


     
    <div id="app">
        <div class="container">
            <products-component> </products-component>

        </div>
    </div>

@endsection
    <!-- <script src="sweetalert2.all.min.js"></script> -->
    @section('script')
    <script src="{{URL::asset('js/app.js')}}"></script>
    @endsection
</html>
