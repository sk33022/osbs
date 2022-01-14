@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-20">
            <div class="row justify-content-center">

                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">My Instructor Hirings</h1>


                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;" >
                            <table class="table table-head-fixed text-nowrap" >
                                <thead>
                                <tr>
                                    <th>Hiring_ID</th>
                                    <th>instructor ID</th>
                                    <th>Customer ID</th>
                                    <th>Duration</th>
                                    <th>Date</th>
                                    <th>Status</th>

                                    <th>Delete</th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach($instructor_book as $data)
                                    <tr>
                                        <td>{{ $data -> id}}</td>
                                        <td>{{ $data -> instructor_id}}</td>
                                        <td>{{ $data -> user_id}}</td>

                                        <td>
                                            @if($data->duration == '500')
                                                weekly
                                            @elseif($data->duration == '1500')
                                                monthly
                                            @else
                                                yearly

                                            @endif
                                        </td>
                                        <td>{{ $data -> date}}</td>
                                        <td>
                                            @if($data->status == 0)
                                                <span class="badge badge-warning">payment Pending</span>
                                            @elseif ($data->status == 1)
                                                <span class="badge badge-success">Payment Complete</span>
                                            @endif
                                        </td>
                                        <form action="..." method="POST">

                                            @if($data->status == 0)
                                                <td> <a class="btn btn-block btn-danger btn-sm" href="{{url('adminHire/delete/'.$data->id)}}">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete
                                                    </a></td>
                                            @elseif ($data->status == 1)
                                                <td> <a class="btn btn-block btn-secondary btn-sm" href="#">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete
                                                    </a></td>
                                            @endif

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


