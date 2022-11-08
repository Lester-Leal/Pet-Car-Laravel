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
                        <div class="card-header">
                            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#add">
                                <i class="fas fa-plus-circle"></i>
                                Create
                            </a>
                            @include('admin.schedules.create')
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @php
                                $page = 'schedule';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>TITLE</th>
                                        <th>CUSTOMER</th>
                                        <th>DATE</th>
                                        <th>TIME</th>

                                        <th></th>
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
                                                {{ $schedule->user->name }}
                                            </td>
                                            <td>
                                                {{ date('d-F-Y', strtotime($schedule->schedule_date)) }}
                                            </td>

                                            <td>
                                                {{ $schedule->schedule_time }}
                                            </td>

                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    <a class="btn btn-warning" href="#" role="button"
                                                        data-toggle="modal" data-target="#edit{{ $id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    &nbsp; &nbsp;
                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#delete{{ $id }}">
                                                        <i class="fas fa-trash"></i>

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('admin.schedules.edit')
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
