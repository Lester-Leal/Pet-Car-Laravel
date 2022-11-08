@extends('layout.app')

@section('title', 'Pets')

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
                            @include('admin.pets.create')
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @php
                                $page = 'Pets';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>PETS NAME</th>
                                        <th>OWNER</th>
                                        <th>BREED</th>
                                        <th>CATEGORY</th>
                                        <th>AGE</th>
                                        <th>GENDER</th>
                                        <th>HEIGHT</th>
                                        <th>WEIGHT</th>
                                        <th>STATUS</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pets as $pet)
                                        @php
                                            $id = $pet->id;
                                        @endphp
                                        <tr>
                                            <td>
                                                {{ $pet->name }}
                                            </td>
                                            <td>
                                                {{ $pet->bleed }}
                                            </td>
                                            <td>
                                                {{ $pet->user->name }}
                                            </td>
                                            <td>
                                                {{ $pet->category->name }}
                                            </td>

                                            <td>
                                                {{ $pet->age }}
                                            </td>
                                            <td>
                                                {{ $pet->gender }}
                                            </td>

                                            <td>
                                                @if ($pet->status == 1)
                                                    <span class="badge badge-success">Inpatient</span>
                                                @else
                                                    <span class="badge badge-danger">Outpatient</span>
                                                @endif
                                            </td>

                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    <a class="btn btn-warning" href="#" role="button"
                                                        data-toggle="modal" data-target="#edit{{ $id }}">
                                                        <i class="fas fa-edit"></i>

                                                    </a>

                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#delete{{ $id }}">
                                                        <i class="fas fa-trash"></i>

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('admin.pets.edit')
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
