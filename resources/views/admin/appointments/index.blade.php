@extends('layout.app')

@section('title', 'Appointments')

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

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>CUSTOMER</th>
                                        <th>TITLE</th>
                                        <th>START DATE & TIME</th>
                                        <th>END DATE & TIME</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                        @php
                                            $id = $appointment->id;
                                        @endphp
                                        <tr>
                                            <td>
                                                {{ $appointment->user->name }}
                                            </td>

                                            <td>
                                                {{ $appointment->title }}
                                            </td>

                                            <td>
                                                {{ date('d-F-Y H:m', strtotime($appointment->start)) }}
                                            </td>

                                            <td>
                                                {{ date('d-F-Y H:m', strtotime($appointment->end)) }}
                                            </td>

                                            <td>
                                                @if ($appointment->status == 0)
                                                    <span class="text-warning">Pending</span>
                                                @elseif ($appointment->status == 1)
                                                    <span class="text-warning">Accepted</span>
                                                @else
                                                    <span class="text-warning">Rejected</span>
                                                @endif
                                            </td>

                                            {{-- <td>
                                                <div class="btn-group" role="group" aria-label="Button group">

                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#approve{{ $id }}">
                                                        <i class="fas fa-check-circle"></i>
                                                        Approve
                                                    </a>
                                                </div>
                                            </td> --}}
                                        </tr>
                                        @include('admin.appointments.approve')
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
