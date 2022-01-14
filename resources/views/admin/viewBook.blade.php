@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-12">
{{--            <div class="row justify-content-center">--}}

                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">All Instructors</h1>


                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;" >
                            <table class="table table-head-fixed text-nowrap" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>category</th>
                                    <th>date and time</th>
                                    <th>Booker_ID</th>
                                    <th>Booker_name</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($name as $data)
                                    <tr>
                                        <td>{{ $data -> id}}</td>
                                        <td>{{ $data -> category}}</td>
                                        <td>{{ $data -> datetime}}</td>
                                        <td>{{ $data -> status}}</td>
                                        <form action="..." method="POST">
                                            <td><a class="btn btn-sm btn-danger" href="{{url('instructor/delete/'.$data->id)}}">
                                                    <i class="fa fa-trash"> </i>&nbsp;Remove Instructor
                                                </a></td>
                                            <td> <a class="btn btn-sm btn-outline-primary" href="{{url('instructor/update/'.$data->id)}}">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Update Instructor
                                                </a></td>
                                        </form>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
