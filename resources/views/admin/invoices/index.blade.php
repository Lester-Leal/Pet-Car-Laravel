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
                        <div class="card-header">
                            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#add">
                                <i class="fas fa-plus-circle"></i>
                                Create
                            </a>
                            @include('admin.invoices.create')
                        </div>
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

                                        <th>ACTIONS</th>
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
                                                    <span class="badge badge-info">
                                                        {{ $invoice_detail->service->name }}
                                                    </span>
                                                @endforeach
                                            </td>
                                            <td>
                                                {{ $invoice->invoice_detail->sum('amount') }}
                                            </td>
                                            <td>
                                                {{ date('d-F-Y', strtotime($invoice->due_date)) }}
                                            </td>


                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    {{-- <a class="btn btn-warning" href="#" role="button"
                                                        data-toggle="modal" data-target="#edit{{ $id }}">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a> --}}

                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#delete{{ $id }}">
                                                        <i class="fas fa-trash"></i>

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('admin.invoices.edit')
                                        @include('deleteModal')
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
