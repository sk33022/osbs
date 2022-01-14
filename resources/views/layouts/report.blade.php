@extends('layouts/master')
@section('content')




    <div class="card">
        <div class="dt-buttons btn-group flex-wrap">

            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('reportUser')}}" class="nav-link" style="color: white"> <span>Popular Swimming Section | </span></a></button>
            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('reportInstruct')}}" class="nav-link" style="color: white"> <span>Popular Instructor</span></a></button>


        </div>


        <div class="card-header">
            <h2 class="card-title">Booking Section Popularity</h2>
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
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Payment_ID: activate to sort column descending">Category</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Payer_ID: activate to sort column ascending">Booked Times</th>
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Booking_ID: activate to sort column ascending">Booking_ID</th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Paid Date: activate to sort column ascending">Paid Date</th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending">Amount</th></tr>--}}
                    </thead>
                    <tbody>
                    @foreach($books as $data)
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">{{$data->category}}</td>
                            <td>{{$data->qty}}</td>

                        </tr>
                    @endforeach

                    <tfoot>
                    <th rowspan="1" colspan="1">Total Booking Performed-</th>
                    <th rowspan="1" colspan="1">{{$count}}</th>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
    </div>
    </div>

    <!-- /.card-body -->


@endsection


