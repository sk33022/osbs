@extends('admin/master')
@section('content')

    <div class="card-header">
        <h2 class="card-title">Revenue from Swimming Booking</h2>
    </div>


    <div class="card">
        <div class="dt-buttons btn-group flex-wrap">
            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('chart')}}" class="nav-link" style="color: white"> <span>Chart |</span></a></button>

            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('overall')}}" class="nav-link" style="color: white"> <span>Overall   |</span></a></button>


            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button" ><a href="{{route('report')}}" class="nav-link" style="color: white"> <span>Swimming |</span></a></button>
            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('reportIns')}}" class="nav-link" style="color: white"> <span>Instructor</span></a></button>
        </div>






      <hr>



        <div  class="d-flex p-3 bg-secondary text-white" >
        {{--         <div class="d-flex p-3 bg-secondary text-white" >--}}

        {{--            <div class="card-body">--}}
        <!-- Date -->
            <form action="/dateReport" method="post">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <label>From:</label>
                <input type="date" id="date1" name="date1" max="{{ now()->toDateString('Y-m-d') }}" required >
                <label>To:</label>
                <input type="date" id="date2" name="date2" max="{{ now()->toDateString('Y-m-d') }}" value="<?php echo date("Y-m-d"); ?>">

                <button type="submit" class="btn btn-primary">Generate</button>
                @error('date1')
                <p style="color:red">{{$message}}</p>
                @enderror
            </form>
        </div>
        <!-- /.form group -->




    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="btn-group">
                        {{--                                <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button>--}}
                    </div> </div></div>
            <div class="col-sm-12 col-md-6">
                <div id="example1_filter" class="dataTables_filter">
                    {{--                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>--}}
                </div></div></div><div class="row">
            <div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Payment_ID: activate to sort column descending">Payment_ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Payer_ID: activate to sort column ascending">Payer_ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Booking_ID: activate to sort column ascending">Booking_ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Paid Date: activate to sort column ascending">Paid Date</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending">Amount</th></tr>
                    </thead>
                    <tbody>
                    @foreach($book_payment as $data)
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">{{$data->id}}</td>
                            <td>{{$data->user_id}}</td>
                            <td>{{$data->book_id}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->amount}}</td>
                        </tr>
                    @endforeach

                    <tfoot>
                    <th rowspan="1" colspan="4">Total Revenue From Swimming Pool</th>
                    <th rowspan="1" colspan="1">{{$revenue}}</th>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
    </div>
    </div>

    <!-- /.card-body -->


@endsection


