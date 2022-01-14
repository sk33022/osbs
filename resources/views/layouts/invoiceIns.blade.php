<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">

            <span class="float-left " > <img src="{{ asset('logo/swimlogo.jpg') }}" style="width:40%;" alt="No Logo"></span>

            <div class="float-center">

                <h4>Bajra Sports</h4>
                <small> Gurungtoll, Kalopul, Kathmadu, Nepal </small><br>
                <small>9876543210 &emsp;  welcome@bajra.com &emsp;   www.bajra.com </small>

            </div>

            <div class="float-right">

                <strong></strong> <br>
                <strong>Credit Term:[Stripe]</strong>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h6 class="mb-3">From:</h6>
                    <div>
                        <strong>[Bajra Sports]</strong>
                    </div>

                    <div>Email:welcome@bajra.com</div>
                    <div>Phone: 9876543210</div>
                </div>

                <div class="col-sm-6">
                    <h6 class="mb-3">To:</h6>
                    <div>

                        <strong>{{Auth::user()->name}}</strong>
                    </div>

                    <div>Email:{{Auth::user()->email}}</div>
                    <div>Phone: {{Auth::user()->phone}}</div>
                </div>



            </div>

            {{--            <div class="table-responsive-sm">--}}
            {{--                <table class="table table-striped">--}}
            {{--                    <thead>--}}
            {{--                    <tr >--}}
            {{--                        <th class="center">Book_ID</th>--}}
            {{--                        <th>Booking_Date</th>--}}
            {{--                        <th>Amount</th>--}}

            {{--                        <th class="left">Quantity</th>--}}
            {{--                        <th class="center">Unit Price (RM)</th>--}}
            {{--                        <th class="right">Amount(RM)</th>--}}
            {{--                    </tr>--}}
            {{--                    </thead>--}}
            {{--                    <tbody>--}}
            {{--                    <tr>--}}
            {{--                        <td class="center">1</td>--}}
            {{--                        <td class="left strong">Electrical wire</td>--}}
            {{--                        <td class="left">Longest wire ever</td>--}}

            {{--                        <td class="center">1</td>--}}
            {{--                        <td class="left">999,00</td>--}}
            {{--                        <td class="right">999,00</td>--}}
            {{--                    </tr>--}}
            {{--                    <tr>--}}
            {{--                        <td class="center">2</td>--}}
            {{--                        <td class="left">Interior design</td>--}}
            {{--                        <td class="left">Instalation and Customization (cost per hour)</td>--}}

            {{--                        <td class="left">20</td>--}}
            {{--                        <td class="center">150</td>--}}
            {{--                        <td class="right">3.000,00</td>--}}
            {{--                    </tr>--}}
            {{--                    <tr>--}}
            {{--                        <td class="center">3</td>--}}
            {{--                        <td class="left">Table</td>--}}
            {{--                        <td class="left">Round table</td>--}}

            {{--                        <td class="left">1</td>--}}
            {{--                        <td class="center">499,00</td>--}}
            {{--                        <td class="right">499,00</td>--}}
            {{--                    </tr>--}}

            {{--                    </tbody>--}}
            {{--                </table>--}}
            {{--            </div>--}}
            <div class="row">


                <div class="col-lg-4 col-sm-5 ml-auto " >
                    <table class="table table-clear ">
                        <th><strong> Payment Received </strong></th>
                        <tbody>

                        @foreach($instructor_payment as $data)
                            <tr style="page-break-after: always;">

                                <td class="left">
                                    Payment Method: Stripe
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    Hiring ID:{{$data->id}}
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    Amount Paid:{{$data->amount }}
                                </td>
                            </tr>
                            <tr>
                                <td class="left">
                                    Payment Date:{{$data->date}}
                                </td>
                            </tr>


                        <tbody>
                        @endforeach
                    </table>
                    {{--                    <div class="row no-print">--}}
                    {{--                        <div class="col-12">--}}
                    {{--                            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>--}}
                    {{--                            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit--}}
                    {{--                                Payment--}}
                    {{--                            </button>--}}
                    {{--                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">--}}
                    {{--                                <i class="fas fa-download"></i> Generate PDF--}}
                    {{--                            </button>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>



            </div>

        </div>

    </div>

    <h6 style="margin-left:30%;">This invoice is computer generated,no signature is required.</h6><hr>
    <a href="{{route('home')}}" class="nav-link">Dashboard</a>
</div>

</div>


</body>
</html>

