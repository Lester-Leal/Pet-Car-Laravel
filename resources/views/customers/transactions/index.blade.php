@extends('layout.app')

@section('title', 'Transactions')

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
                                $page = 'Transaction';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>INVOICE NUMBER</th>
                                        <th>TOTAL PAID</th>
                                        <th>DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $transaction)
                                        @php
                                            $id = $transaction->id;
                                        @endphp
                                        <tr>

                                            <td>
                                                {{ $transaction->invoice->invoice_number }}
                                            </td>
                                            <td>
                                                {{ $transaction->amount }}
                                            </td>
                                            <td>
                                                {{ date('d-F-Y', strtotime($transaction->created_at)) }}
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
