@extends('layouts.master')
@section('content')
<div class="row" style="position:absolute; top:50px; right:50px;" >
    <div class="col-12" >
        <div class="row justify-content-center" >

            <div class="card">
                <div class="card-header" >
                    <h1 class="card-title"><b>My Bookings</b></h1>


                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;" >
                        <table class="table table-head-fixed text-nowrap" >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Date and Time</th>
                                <th>Status</th>
                                <th>cancel</th>
                                <th>Update</th>
                                <th>Payment</th>
                                <th>Invoice</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $data)
                                <tr>
                                    <td>{{ $data -> id}}</td>
                                    <td>
                                        @if($data->category == 'Gents')
                                            Gents | <i class="fas fa-mars"></i>
                                        @elseif($data->category == 'Ladies')
                                            Ladies | <i class="fas fa-venus"></i>
                                        @else($data->category == 'kid')
                                            Child | <i class="fas fa-child"></i>

                                        @endif
                                    </td>
                                    <td>{{ $data -> datetime}}</td>


                                    <td>
                                        @if($data->status == 0)
                                            <span class="badge badge-warning">payment Pending</span>
                                        @elseif ($data->status == 1)
                                            <span class="badge badge-success">Payment Complete</span>
                                        @endif
                                    </td>
{{--                                    <td>{{ $data->status}}</td>--}}

                                    <form action="..." method="POST">
                                    <td><a class="btn btn-sm btn-danger" href="{{url('book/delete/'.$data->id)}}">
                                            <i class="fa fa-trash"> </i>&nbsp;Delete
                                        </a></td>
                                        <td> <a class="btn btn-sm btn-outline-primary" href="{{url('booking/update/'.$data->id)}}">
                                                <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Update
                                            </a></td>

                                        @if($data->status == 0)

                                        <td> <a class="btn btn-block btn-outline-warning btn-sm" href="{{url('booking/pay/'.$data->id)}}">
                                                <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Pay
                                            </a></td>

                                        @elseif ($data->status == 1)
                                            <td> <a class="btn btn-block btn-outline-success btn-sm" href="#">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;paid
                                                </a></td>
                                        @endif
                                        <td> <a class="btn btn-block btn-outline-success btn-sm" href="{{url('booking/invoice/'.$data->id)}}">
                                                <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;print
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
