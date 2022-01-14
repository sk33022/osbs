@extends('admin/master')
@section('content')




    <div class="card">
        <div class="dt-buttons btn-group flex-wrap">
            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('chart')}}" class="nav-link" style="color: white"> <span>Chart |</span></a></button>

            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('overall')}}" class="nav-link" style="color: white"> <span>Overall   |</span></a></button>


            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button" ><a href="{{route('report')}}" class="nav-link" style="color: white"> <span>Swimming |</span></a></button>
            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('reportIns')}}" class="nav-link" style="color: white"> <span>Instructor</span></a></button>
        </div>











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
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="User_ID: activate to sort column descending">User_ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Payer_ID: activate to sort column ascending">Hiring Times</th>
                    </thead>
                    <tbody>
                    @foreach($instructor_book as $data)
                        <tr class="odd">
                            <td>{{$data->user_id}}</td>
                            <td>{{$data->qty}}</td>
                        </tr>
                    @endforeach

                    <tfoot>
                    <th rowspan="1" colspan="1">Total Hiring of Instructor</th>
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


