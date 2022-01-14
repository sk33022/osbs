@extends('layouts.master')
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
                                    <th>Duration</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>Payment</th>
                                    <th>Invoice</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($instructor_book as $data)
                                    <tr>
                                        <td>{{ $data -> id}}</td>
                                        <td>{{ $data -> instructor_id}}</td>
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
                                            <td><a class="btn btn-sm btn-danger" href="{{url('hire/delete/'.$data->id)}}">
                                                    <i class="fa fa-trash"> </i>&nbsp;Hiring
                                                </a></td>
                                            @elseif ($data->status == 1)
                                                <td><a class="btn btn-sm btn-danger" href="#">
                                                        <i class="fa fa-trash"> </i>&nbsp;Hiring
                                                    </a></td>
                                            @endif
                                            @if($data->status == 0)
                                            <td> <a class="btn btn-sm btn-outline-primary" href="{{url('hire/update/'.$data->id)}}">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Update hiring
                                                </a></td>
                                            @elseif ($data->status == 1)
                                                <td> <a class="btn btn-sm btn-outline-primary" href="#">
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Update hiring
                                                    </a></td>
                                            @endif


                                            @if($data->status == 0)

                                                <td> <a class="btn btn-block btn-outline-warning btn-sm" href="{{url('hire/pay/'.$data->id)}}">
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;PAY
                                                    </a></td>

                                            @elseif ($data->status == 1)
                                                <td> <a class="btn btn-block btn-outline-success btn-sm" href="#">
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;PAID
                                                    </a></td>
                                            @endif
                                            <td> <a class="btn btn-block btn-outline-success btn-sm" href="{{url('hire/invoice/'.$data->id)}}">
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

