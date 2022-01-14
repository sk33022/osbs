@extends('layouts.master')
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
            <div class="col-md-8 row ">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card card-primary" >
                            <div class="card-header">
                                <h3 class="card-title">Swimming Booking</h3>
                            </div>                <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif







                            <form action="/update/<?php echo $books[0]->id; ?>" method="post">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Category</label>

                                        <select id="time" name="category"  value = '<?php echo $books[0]->category; ?>' data-placeholder= '<?php echo $books[0]->category; ?>' required >
                                            <option value="" disabled selected >Select Category</option>
                                            <option value="Ladies">ladies Pool</option>
                                            <option value="Gents">Gents Pool</option>
                                            <option value="Kid">kids Pool</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>choose date and time</label>
                                        <input type="datetime-local" id="datetime" name="datetime" value = '<?php echo $books[0]->datetime; ?>'  placeholder="'<?php echo $books[0]->datetime; ?>'">                                </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>





@endsection

