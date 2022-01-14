@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-12">
{{--            <div class="row justify-content-center">--}}

                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">View Bookings</h1>


                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;" >
                            <table class="table table-head-fixed text-nowrap" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Date and Time</th>
                                    <th>Booker ID</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($books as $data)
                                    <tr>
                                        <td>{{ $data -> id}}</td>
                                        <td>{{ $data -> category}}</td>
                                        <td>{{ $data -> datetime}}</td>
                                        <td>{{ $data -> user_id}}</td>
                                        <td>
                                            @if($data->status == 0)
                                                <span class="badge badge-warning">payment Pending</span>
                                            @elseif ($data->status == 1)
                                                <span class="badge badge-success">Payment Complete</span>
                                            @endif
                                        </td>

@if($data -> status==0)
                                        <form action="..." method="POST">

                                            <td><a class="btn btn-block btn-danger btn-sm" href="{{url('booking/delete/'.$data->id)}}">
                                                    <i class="fa fa-trash"> </i>&nbsp;Delete Booking
                                                </a></td>

@else
                                            <form action="..." method="POST">
                                                <td><a class="btn btn-block btn-secondary btn-sm" href="#">
                                                        <i class="fa fa-trash"> </i>&nbsp;Delete Booking
                                                    </a></td>
               @endif
                                        </form>




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
