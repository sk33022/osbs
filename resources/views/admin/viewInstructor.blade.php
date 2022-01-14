@extends('admin.master')
@section('content')

    <div class="row"  >
        <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">All Instructors</h1>


                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0"  >
                            <table class="table table-head-fixed text-nowrap" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Phone</th>
                                    <th>Available</th>
                                    <th>remove</th>
                                    <th>Update</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($instructors as $data)
                                    <tr>
                                        <td>{{ $data -> id}}</td>
                                        <td>{{ $data -> name}}</td>
                                        <td>{{ $data -> description}}</td>
                                        <td>
{{--                                            <input type="checkbox" name="images[]" value="{{$data->image}}"/>--}}
                                            <img src="{{ asset('/uploads/' . $data->image )}}" width="50" height="50" alt="Image"/>

{{--                                            <img src="{{url('/uploads/1632063784_IMG_0431.jpg')}}" width="50" height="50" alt="Image"/></td>--}}
                                        </td>


                                        <td>{{ $data -> phone}}</td>
                                        <td>{{ $data -> status}}</td>
                                        <form action="..." method="POST">
                                            <td><a class="btn btn-sm btn-danger" href="{{url('instructor/delete/'.$data->id)}}">
                                                    <i class="fa fa-trash"> </i>&nbsp;Remove
                                                </a></td>
                                            <td> <a class="btn btn-sm btn-outline-primary" href="{{url('instructor/update/'.$data->id)}}">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Update
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
@endsection

