@extends('layout.app')

@section('title', 'Bill Statements')

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
                            @include('admin.transactions.create')
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @php
                                $page = 'Transaction';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>CUSTOMER</th>
                                        <th>INVOICE NUMBER</th>
                                        <th>SERVICES</th>
                                        <th>TOTAL PAID</th>
                                        <th>DATE</th>

                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        @php
                                            $id = $transaction->id;
                                        @endphp
                                        <tr>
                                            <td>
                                                {{ $transaction->user->name }}
                                            </td>
                                            <td>
                                                {{ $transaction->invoice->invoice_number }}
                                            </td>
                                            <td>
                                                @foreach ($transaction->Invoice->invoice_detail as $invoice_detail)
                                                    <span class="badge badge-info">
                                                        {{ $invoice_detail->service->name }}
                                                    </span>
                                                @endforeach
                                            </td>
                                            <td>
                                                {{ $transaction->amount }}
                                            </td>
                                            <td>
                                                {{ date('d-F-Y, H:m', strtotime($transaction->created_at)) }}
                                            </td>


                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    {{-- <a class="btn btn-warning" href="#" role="button"
                                                        data-toggle="modal" data-target="#edit{{ $id }}">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a> --}}
                                                    <a class="btn btn-success"
                                                        href="{{ route('admin.transactions.show', ['transaction' => $id]) }}"
                                                        title="generate receipt">
                                                        <i class="fas fa-eye"></i>

                                                    </a>
                                                    &nbsp; &nbsp;
                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#delete{{ $id }}">
                                                        <i class="fas fa-trash"></i>

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('admin.transactions.edit')
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
@push('scripts')
    <Script>
        $('body').on('change', '#user_id', function() {
            var id = $(this).val();

            $.ajax({
                type: "get",
                url: "{{ route('admin.getInvoice') }}",
                data: {
                    id: id
                },
                beforeSend: () => {
                    Loader.open();
                },
                success: function(response) {
                    Loader.close();
                    $('#invoice_id').html(response);
                }
            });
        });

        $('body').on('change', '#invoice_id', function() {
            var id = $(this).val();

            $.ajax({
                type: "get",
                url: "{{ route('admin.getAmount') }}",
                data: {
                    id: id
                },
                beforeSend: () => {
                    Loader.open();
                },
                success: function(response) {
                    Loader.close();
                    $('#total_cost').val(response);
                }
            });
        });

        $('body').on('click', '#transactionButton', function(e) {
            e.preventDefault();
            var total = parseInt($('#total_cost').val());
            var amount_paid = parseInt($('#amount_paid').val());


            if (amount_paid >= total) {
                $('#transactionForm').submit()
            } else {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Amount paid is less than amount supposed to be paid',
                    showConfirmButton: false,
                    timer: 3000,
                });
            }
        });
    </Script>
@endpush
