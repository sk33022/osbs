

    <head>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href=" {{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
    </head>

    <div class="card card-info" >
    <div class="card-header">
        <h3 class="card-title">Admin Login</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="/adminlog" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="card-body" >
            @if(\Illuminate\Support\Facades\Session::has('error'))
                <p class="alert alert-danger">{{Session::get('error')}}</p>
            @endif
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control"  name="email" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control"  name="password" id="inputPassword3" placeholder="Password">
                </div>
            </div>
{{--            <div class="form-group row">--}}
{{--                <div class="offset-sm-2 col-sm-10">--}}
{{--                    <div class="form-check">--}}
{{--                        <input type="checkbox" class="form-check-input" id="exampleCheck2">--}}
{{--                        <label class="form-check-label" for="exampleCheck2">Remember me</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
            <button type="reset" class="btn btn-default float-right">Cancel</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>


