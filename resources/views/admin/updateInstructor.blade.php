@extends('admin.master')
@section('content')
    <head>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
    </head>




    <div class="container">
        <div class="container1">
            <div class="col-md-8  ">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card card-primary" >
                            <div class="card-header">
                                <h3 class="card-title">Update Instructor Section</h3>
                            </div>

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif








                                <form action="/updateInstructor/<?php echo $instructors[0]->id; ?>" method="post">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label >Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value = '<?php echo $instructors[0]->name; ?>'>

                                        </div> <div class="form-group">
                                            <label >Description</label>
                                            <input type="text" class="form-control" id="description" name="description" value = '<?php echo $instructors[0]->description; ?>' required>
                                        </div>


                                        <div class="form-group">
                                            <label >phone</label>
                                            <input type="number" class="form-control" id="phone" name="phone" value = '<?php echo $instructors[0]->phone; ?>'>
                                        </div>




                                        {{--                            <div class="form-group">--}}
                                        {{--                                <label for="exampleInputFile">File input</label>--}}
                                        {{--                                <div class="input-group">--}}
                                        {{--                                    <div class="custom-file">--}}
                                        {{--                                        <input type="file" class="custom-file-input" id="exampleInputFile">--}}
                                        {{--                                        <label class="custom-file-label" for="exampleInputFile">Laravel-Bus-Bookings-master (1).zip</label>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="input-group-append">--}}
                                        {{--                                        <span class="input-group-text">Upload</span>--}}
                                        {{--                                    </div>--}}
                                        {{--                                </div>--}}
                                        {{--                            </div>--}}
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Availibility</label>

                                                <select id="status" name="status" value = '<?php echo $instructors[0]->status; ?>' required >
                                                    <option value="" disabled selected >Select status</option>
                                                    <option value="1">available</option>
                                                    <option value="0">unavailable</option>

                                                </select>
                                            </div>



{{--                                            <div class="form-group">--}}
{{--                                                <label >Image</label>--}}
{{--                                                <input type="file" class="form-control" id="image" name="image" value = '<?php echo $instructors[0]->image; ?>' required>--}}
{{--                                            </div>--}}

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




    </div>





@endsection

