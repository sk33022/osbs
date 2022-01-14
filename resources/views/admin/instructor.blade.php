@extends('admin.master')

@section('content')
    <div class="container">
        <div class="container1">
            <div class="col-md-8  ">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card card-primary" >
                            <div class="card-header">
                                <h3 class="card-title">Add Instructor Section</h3>
                            </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/fillform" method="post" enctype="multipart/form-data">
                        <input type = "hidden" name = "_token"
                               value = "<?php echo csrf_token(); ?>">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                        <div class="card-body">
                            <div class="form-group">
                                <label >Name</label>
                                <input type="text" class="form-control" id="name" name="name" >
                                @error('name')

                                    <p style="color:#ff0000" >{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label >phone</label>
                                <input type="number" class="form-control" id="phone" name="phone" >
                                @error('phone')
                                <p style="color:red" >{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <textarea class="form-control" id="description" name="description" cols="30" rows="1    0">

                                </textarea>
                                @error('description')
                                <p style="color:red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Image</label>
                                <input type="file" class="form-control" id="image" name="image" >
                            </div>



                            <div class="card-body">
                                <div class="form-group">
                                    <label>Availibility</label>

                                    <select id="status" name="status" >
                                        <option value="" disabled selected >Select status</option>
                                        <option value="1">available</option>
                                        <option value="0">unavailable</option>

                                    </select>
                                    @error('status')
                                    <p style="color:red" >{{$message}}</p>
                                    @enderror
                                </div>





                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                </div>
                    </form>

        </div>
    </div>
</div>
</div>



</div>


@endsection



