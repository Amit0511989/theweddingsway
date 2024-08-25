<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{url('/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('/assets/css/now-ui-dashboard.min.css?v=1.6.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{url('/assets/demo/demo.css')}}" rel="stylesheet" />
    
</head>
<style>
.logo {
    text-align: center;
    background: linear-gradient(90deg,#0c2646 0,#204065 60%,#2a5788);
}
</style>
<body class="">
<div class="wrapper ">
        <div class="sidebar" data-color="red" >
            @include('layouts.admin.sidebar')
        </div>
        <div class="main-panel" id="main-panel">
            @include('layouts.admin.header')
            <div class="content">
                @include('flash-message')
                @yield('content')
            </div>
            @include('layouts.admin.footer')
            
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{url('assets/js/core/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/core/popper.min.js')}}"></script>
    <script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/bootstrap-switch.js')}}"></script>
    <script src="{{url('assets/js/plugins/sweetalert.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/plugins/ckeditor.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{url('assets/js/plugins/chartjs.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{url('assets/js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{url('assets/js/now-ui-dashboard.min.js?v=1.6.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{url('assets/demo/demo.js')}}"></script>

   
    
    @yield('scripts')
   
    <script>
        

        $(document).on('click','#profile_pic i',function(event) { 
            $('.remove').val(1);
            $('#profile_pic img').attr('src', '{{asset("assets/img/placeholder.jpg")}}');
        })

        $(document).on('click','.profile_pic',function(event) { 
            $('.remove').val(0);
            //$('#profile_pic img').attr('src', '{{asset("assets/img/placeholder.jpg")}}');
        })
    
        $(document).on('click','.show_confirm',function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Are you sure you want to delete this record?`,
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
        $(document).ready(function () {
           

             ClassicEditor
            .create( document.querySelector( '.textarea' ) )
            .catch( error => {
                //console.error( error );
            } ); 
        });
        ClassicEditor
            .create( document.querySelector( '.textarea_in' ) )
            .catch( error => {
               // console.error( error );
            } );  
    </script>
    
    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
        </style>
 <script>
    $(function () {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: "{{ route('users_listing') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action'},
            ] 
        });
    });

    $(function () {
        $('#role-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: "{{ route('roles') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'action', name: 'action'},
            ] 
        });
    });
</script>



</body>

</html>
