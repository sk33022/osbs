@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="row justify-content-center">

        <div class="card">
            <div class="card-header">
                <h1 class="card-title">All Instructors</h1>


            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;" >
                <table class="table table-head-fixed text-nowrap" >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Available</th>
                        <th>Book</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($instructors as $data)
                    <tr>
                        <td>{{ $data -> id}}</td>
                        <td>{{ $data -> name}}</td>
                        <td>{{ $data -> phone}}</td>
                        <td>
                            @if($data->status == 0)
                                <span class="badge badge-warning">unavailalbe</span>
                            @elseif ($data->status == 1)
                                <span class="badge badge-success">Available</span>
                            @endif
                        </td>
                        <form action="..." method="POST">

                            <td> <a class="btn btn-sm btn-outline-primary" href="{{url('instructor/update/'.$data->id)}}">
                                    <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Book
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
