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

                        <!-- /.card-header -->
                        <div class="card-body">
                            @php
                                $page = 'Pets';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>BREED</th>

                                        <th>CATEGORY</th>
                                        <th>AGE</th>
                                        <th>GENDER</th>

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
                                                {{ $pet->category->name }}
                                            </td>

                                            <td>
                                                {{ $pet->age }}
                                            </td>
                                            <td>
                                                {{ $pet->gender }}
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
