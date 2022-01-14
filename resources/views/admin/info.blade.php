@extends('admin.master')

@section('content')
    <div class="container">
        <div class="container1">
            <div class="col-md-10 ">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card card-primary" >
                            <div class="card-header">
                                <h3 class="card-title">Contact Form</h3>
                            </div>                <div class="card-body">

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/contact" method="post" >
                        <input type = "hidden" name = "_token"
                               value = "<?php echo csrf_token(); ?>">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="email"  name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="Phone">Phone</label>
                                <input type="number" class="form-control" name="phone" id="phone" >
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
                            </div>
                            <div class="form-group">
                                <label for="openDay">Open Day</label>
                                <input type="text" class="form-control" id="openday"  name="openday" placeholder="sun-sat">
                            </div>

                            <div class="form-group">
                                <label for="openHour">Open Hour</label>
                                <input type="text" class="form-control" id="openhour"  name="openhour" placeholder="7AM-5PM">
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Insert</button>
                        </div>
                    </form>

                </div>

        </div>
    </div>



</div>
</div>
@endsection
