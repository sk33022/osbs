
@extends('admin/master')
@section('content')




    <div class="card">
        <div class="dt-buttons btn-group flex-wrap">
            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('chart')}}" class="nav-link" style="color: white"> <span>Chart |</span></a></button>

            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('overall')}}" class="nav-link" style="color: white"> <span>Overall   |</span></a></button>


            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button" ><a href="{{route('report')}}" class="nav-link" style="color: white"> <span>Swimming |</span></a></button>
            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('reportIns')}}" class="nav-link" style="color: white"> <span>Instructor</span></a></button>
        </div>















    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="btn-group">
                        {{--                                <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span></button>--}}
                    </div> </div></div>
            <div class="col-sm-12 col-md-6">
                <div id="example1_filter" class="dataTables_filter">
                    {{--                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>--}}
                </div></div></div><div class="row">
            <div class="col-sm-10">
                <div class="dt-buttons btn-group flex-wrap">
{{--                    <button type="button" class="btn btn-block btn-info btn-sm">Info</button>--}}
                    <button class="btn btn-block btn-info btn-sm"  type="button" ><span><a href="{{route('overBook')}}" class="nav-link" style="color: white"> Most Frequent Customer to book swimming |</a></span></button>
                    <button class="btn btn-block btn-info btn-sm" type="button"><span><a href="{{route('overIns')}}" class="nav-link" style="color: white"> Most Frequnt Customer to Hire Instructor</a></span></button>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

    <!-- /.card-body -->


@endsection

