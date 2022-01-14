@extends('admin/master')
@section('content')

    <div class="card-header">
        <h2 class="card-title">ALL REGISTERED CUSTOMERS</h2>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="User_ID: activate to sort column ascending">User_ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending"> Email</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending">gender</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=" Age: activate to sort column ascending"> Age</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending"> phone</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending"> Delete</th>

                    </thead>
                    <tbody>
                    @foreach($users as $data)
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->gender}}</td>
                            <td>{{$data->age}}</td>
                            <td>{{$data->phone}}</td>
                            <form action="..." method="POST">
                                <td><a class="btn btn-sm btn-danger" href="{{url('user/delete/'.$data->id)}}">
                                        <i class="fa fa-trash"> </i>&nbsp;Delete
                                    </a></td>
                            </form>
                        </tr>
                    @endforeach

                    <tfoot>
{{--                    <th rowspan="1" colspan="4">Total Revenue From Swimming Pool</th>--}}
{{--                    <th rowspan="1" colspan="1">{{$revenue}}</th>--}}
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
    </div>

    <!-- /.card-body -->


@endsection


