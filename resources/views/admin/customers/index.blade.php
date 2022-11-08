@extends('layout.app')

@section('title', 'Customer')

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
                            @include('admin.customers.create')
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @php
                                $page = 'User';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>PHONE</th>
                                        <th>ADDRESS</th>
                                 

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        @php
                                            $id = $user->id;
                                        @endphp
                                        <tr>
                                            <td>
                                                {{ $user->name }}
                                            </td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td>
                                                {{ $user->phone }}
                                            </td>
                                            <td>
                                                {{ $user->address }}
                                            <!-- </td>
                                            <td>
                                                @if ($user->pet != null)
                                                    @foreach ($user->pet as $pet)
                                                        <a class="badge badge-info">
                                                            {{ $pet->name }} ({{ $pet->category->name }})
                                                        </a>
                                                    @endforeach
                                                @else
                                                    <span class="badge badge-danger">0</span> -->
                                                <!-- @endif
                                            </td> -->
                                            <!-- <td> -->
                                                <!-- @if ($user->customer_status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td> -->

                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    <a class="btn btn-warning btn-sm" href="#" role="button"
                                                        data-toggle="modal" data-target="#edit{{ $id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>


                                                </div>
                                            </td>
                                        </tr>
                                        @include('admin.customers.edit')
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
