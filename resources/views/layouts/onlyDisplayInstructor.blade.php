@extends('layouts.master')
@section('content')




    <div class="card-header">
        <h1 class="card-title">INSTRUCTOR HIRING</h1>
    </div>

    <div class="card-body pb-0">

        <div class="row">

    @foreach($name as $data)
                @if($data->status ==1)

                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">

                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Instructors_ID#: {{ $data -> id}}
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>{{ $data -> name}}</b></h2>
                                    <p class="text-muted text-sm"><b>About: </b> {{ $data -> description}} </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: {{ $data -> phone}}</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{ asset('/uploads/' . $data->image )}}" width="50" height="50" alt="Image" class="img-circle img-fluid"/>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">

                                <a class="btn btn-sm btn-outline-primary" href="{{url('book/instructor/'.$data->id)}}">
                                    <i class='fab fa-hire-a-helper fa-lg'></i>HIRE
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @endif
        @endforeach
        </div>
    </div>
    </div>

@endsection

