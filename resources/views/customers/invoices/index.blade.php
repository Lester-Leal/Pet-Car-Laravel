@extends('layout.app')

@section('title', 'Invoices')

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

                        <!-- /.card-header -->
                        <div class="card-body">
                            @php
                                $page = 'Invoice';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>CUSTOMER</th>
                                        <th>INVOICE NUMBER</th>
                                        <th>SERVICES</th>
                                        <th>TOTAL COST</th>
                                        <th>DUE DATE</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoices as $invoice)
                                        @php
                                            $id = $invoice->id;
                                        @endphp
                                        <tr>
                                            <td>
                                                {{ $invoice->user->name }}
                                            </td>
                                            <td>
                                                {{ $invoice->invoice_number }}
                                            </td>
                                            <td>
                                                @foreach ($invoice->invoice_detail as $invoice_detail)
                                                    <span class="badge badge-info mr-1">
                                                        {{ $invoice_detail->service->name }}({{ number_format($invoice_detail->amount) }})
                                                    </span>
                                                @endforeach
                                            </td>
                                            <td>
                                                {{ $invoice->invoice_detail->sum('amount') }}
                                            </td>
                                            <td>
                                                {{ date('d-F-Y', strtotime($invoice->due_date)) }}
                                            </td>



                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.card -->
@endsection
