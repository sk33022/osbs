@extends('admin/master')
@section('content')

    <div  class="d-flex p-3 bg-secondary text-white" >
{{--         <div class="d-flex p-3 bg-secondary text-white" >--}}

            <div class="card-body">
                <!-- Date -->
                <form action="/dateReport" method="post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <label>From:</label>
                    <input type="date" id="date1" name="date1" max="{{ now()->toDateString('Y-m-d') }}" required >
                    <label>To:</label>
                    <input type="date" id="date2" name="date2" max="{{ now()->toDateString('Y-m-d') }}" >

                    <button type="submit" class="btn btn-primary">Generate</button>
                </form>
                </div>
                <!-- /.form group -->




                </div>
                <!-- /.form group -->
            </div>
            <!-- /.card-body -->

        <!-- /.card -->

        <!-- iCheck -->
        <!-- /.card -->
@endsection
