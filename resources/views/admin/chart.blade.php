@extends('admin/master')
@section('content')
    <head>

        <link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/echarts.min.js')}}"></script>
    </head>

    <div class="card">
        <div class="dt-buttons btn-group flex-wrap">
            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('chart')}}" class="nav-link" style="color: white"> <span>Chart   |</span></a></button>

            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('overall')}}" class="nav-link" style="color: white"> <span>Overall   |</span></a></button>


            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button" href="{{route('home')}}"><a href="{{route('report')}}" class="nav-link" style="color: white"> <span>Swimming   |</span></a></button>
            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><a href="{{route('reportIns')}}" class="nav-link" style="color: white"> <span>Instructor</span></a></button>
        </div>

        <div class="card-header">
            <h2 class="card-title">Overall Revenue: Rs.{{$total}}</h2>
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
                <div class="col-sm-12">







                    <div class="container p-4">


                        <div id="piechart" style="width: 800px; height: 500px;"></div>
                    </div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {

                            var data = google.visualization.arrayToDataTable([
                                ['Product Name', 'Sales', 'Quantity'],

                                @php
                                    //foreach($products as $product) {
                                        echo "['".'Swimming'."', ".$swim.", ".'1'."],";
                                                            echo "['".'Instructor'."', ".$instruct.", ".'1'."],";


                                        //echo "['".$product->name."', ".$product->sales.", ".$product->quantity."],";
                                    //}
                                @endphp
                            ]);

                            var options = {
                                title: 'Revenue Details',
                                is3D: false,
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                            chart.draw(data, options);
                        }
                    </script>







                </div>
            </div>

        </div>
    </div>
    </div>



@endsection



















