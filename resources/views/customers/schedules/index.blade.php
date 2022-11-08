@extends('layout.app')

@section('title', 'Schedules')

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

                        <div class="card-body">
                            @php
                                $page = 'schedule';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>TITLE</th>
                                        <th>DATE</th>
                                        <th>TIME</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schedules as $schedule)
                                        @php
                                            $id = $schedule->id;
                                        @endphp
                                        <tr>
                                            <td>
                                                {{ $schedule->title }}
                                            </td>

                                            <td>
                                                {{ date('d-F-Y', strtotime($schedule->schedule_date)) }}
                                            </td>

                                            <td>
                                                {{ $schedule->schedule_time }}
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
