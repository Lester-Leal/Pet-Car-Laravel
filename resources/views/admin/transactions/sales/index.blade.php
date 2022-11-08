@extends('layout.app')

@section('title', 'Sale report')

@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        @yield('title')
                    </h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="btn-group">
                                <a name="" id="" class="btn btn-danger"
                                    href="{{ route('admin.transaction.report', ['period' => 'Daily']) }}" role="button">
                                    Daily
                                </a>
                                &nbsp; &nbsp;
                                <a name="" id="" class="btn btn-warning"
                                    href="{{ route('admin.transaction.report', ['period' => 'Weekly']) }}" role="button">
                                    Weekly
                                </a>
                                &nbsp; &nbsp;
                                <a name="" id="" class="btn btn-success"
                                    href="{{ route('admin.transaction.report', ['period' => 'Monthly']) }}" role="button">
                                    Monthly
                                </a>
                                &nbsp; &nbsp;
                                <a name="" id="" class="btn btn-info"
                                    href="{{ route('admin.transaction.report', ['period' => 'Annually']) }}" role="button">
                                    Annually
                                </a>
                                &nbsp;
                            </div>
                            <a href="#" onclick="Print()" class="btn btn-primary">
                                <i class="fas fa-print"></i>
                                Print
                            </a>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" id="printableArea">
                            <h3>
                                {{ $period }} Sales
                            </h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">

                                    <table class="table">
                                        <thead>
                                            <th>Customer</th>
                                            <th>Date</th>
                                            <th>Total Amount</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($transactions as $transaction)
                                                <tr>
                                                    <td>{{ $transaction->user->name }}</td>
                                                    <td>{{ date('d-F-Y', strtotime($transaction->created_at)) }}</td>
                                                    <td>{{ number_format($transaction->invoice->invoice_detail->sum('amount')) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <th class="text-right" colspan="2">
                                                    TOTAL
                                                </th>
                                                <td class="text-danger">
                                                    {{ number_format($transactions->sum('amount')) }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.card -->
@endsection
