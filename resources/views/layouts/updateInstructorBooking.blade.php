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
            <div class="row ">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">{{ __('Update Instructor Booking section') }}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif





                            <form action="/updateIns/<?php echo $instructor_book[0]->id; ?>"  method="post">


                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Duration</label>
                                        <select id="duration" name="duration" value = '<?php echo $instructor_book[0]->duration; ?>' required >
                                            <option value="" disabled selected >Select package</option>
                                            <option value="500">weekly</option>
                                            <option value="1500">monthly</option>
                                            <option value="15000">yearly</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>choose date</label>
                                        <input type="date" id="date" name="date" min="{{ now()->toDateString('Y-m-d') }}" value = '<?php echo $instructor_book[0]->date; ?>' required>                                </div>
{{--                                    <input type="hidden" name="instructor_id" id="instructor_id" value="{{$instructor_id}}">--}}
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">HIRE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>





@endsection



