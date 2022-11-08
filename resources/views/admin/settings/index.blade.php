@extends('layout.app')

@section('title', 'Settings')

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
                    <form action="{{ route('admin.settings') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <div class="form-group">
                                    <label for="appointments_per_day">Number of appointments per day</label>
                                    <input type="number" name="appointments_per_day" id="appointments_per_day"
                                        class="form-control" placeholder="" aria-describedby="helpId" min="3"
                                        value="{{ @$number->appointments_per_day }}" required>
                                </div>
                                <button name="" id="" class="btn btn-primary" href="#" type="submit">
                                    Update
                                </button>
                            </div>
                    </form>

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
