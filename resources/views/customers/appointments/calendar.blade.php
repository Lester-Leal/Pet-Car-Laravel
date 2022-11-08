@extends('layout.app')

@section('title', 'Appointments Calendar')

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
                            <div class="" id="calendar_view">

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.card -->
@endsection
@push('scripts')
    <Script>
        $(document).ready(function() {
            var calendar = $('#calendar_view').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month'
                },
                events: '{{ route('customer.appointments.calendar.get') }}',

            });
        });
    </Script>
@endpush
