@extends('layout.app')

@section('title', 'Services')

@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Categories
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
                                $page = 'Service';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>CATEGORY</th>
                                        <th>PRICE</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        @php
                                            $id = $service->id;
                                        @endphp
                                        <tr>
                                            <td>
                                                {{ $service->name }}
                                            </td>
                                            <td>
                                                {{ $service->category->name }}
                                            </td>
                                            <td>
                                                {{ number_format($service->price, 2) }}
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
