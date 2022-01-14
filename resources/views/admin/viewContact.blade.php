@extends('admin/master')
@section('content')





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
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row">
                        <th >Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Open Day</th>
                        <th>open Hour</th>
                        <th>Update</th>





                    </thead>
                    <tbody>
                    @foreach($contact as $data)
                        <tr class="odd">
                            {{--                            <td class="dtr-control sorting_1" tabindex="0">{{$data->id}}</td>--}}
                            <td>{{$data->address}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->address}}</td>
                            <td>{{$data->openday}}</td>
                            <td>{{$data->openhour}}</td>




                            <td> <a class="btn btn-sm btn-outline-primary" href="{{url('contact/update')}}">
                                    <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;&nbsp;Update
                                </a></td>
                    @endforeach


                </table>
            </div>
        </div>

    </div>
    </div>
    </div>

    <!-- /.card-body -->


@endsection


