
{{--@extends('layouts.master')--}}

{{--@section('content')--}}
{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <div class="row justify-content-center">--}}

{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--<div class="card card-primary">--}}
{{--    <div class="card-header">--}}
{{--        <h3 class="card-title">Available Instructors</h3>--}}
{{--    </div>--}}
{{--    <!-- /.card-header -->--}}
{{--    <!-- form start -->--}}
{{--    <!-- /.card-header -->--}}
{{--    <div class="card-body table-responsive p-0" style="height: 300px;" >--}}
{{--        <table class="table table-head-fixed text-nowrap" >--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>ID</th>--}}
{{--                <th>Name</th>--}}
{{--                <th>phone</th>--}}
{{--                <th>status</th>--}}
{{--                <th>book</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($name as $data)--}}
{{--                <tr>--}}
{{--                    @if($data->status ==1)--}}
{{--                    <td>{{ $data -> id}}</td>--}}
{{--                    <td>{{ $data -> name}}</td>--}}
{{--                    <td>{{ $data -> phone}}</td>--}}

{{--                    <td><span class="badge badge-success">Available</span></td>--}}



{{--                    <form action="..." method="POST">--}}

{{--                        <td> <a class="btn btn-sm btn-outline-primary" href="{{url('book/instructor/'.$data->id)}}">--}}

{{--                                <i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Book--}}
{{--                            </a></td>--}}
{{--                    </form>--}}

{{--                    @endif--}}
{{--                </tr>--}}
{{--            @endforeach--}}

{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--    <!-- /.card-body -->--}}
{{--</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /.card -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
