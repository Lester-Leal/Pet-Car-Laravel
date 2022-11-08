@extends('layout.app')

@section('title', 'Medical Records')

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
                            @include('admin.diagnosis.create')
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @php
                                $page = 'Diagnosis';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>DOCTOR</th>
                                        <th>CUSTOMER</th>
                                        <th>PET NAME</th>
                                        <th>SERVICE</th>
                                        <th>DIAGNOSIS</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diagnoses as $diagnosis)
                                        @php
                                            $id = $diagnosis->id;
                                        @endphp
                                        <tr>
                                            <td>
                                                {{ $diagnosis->doctor->name }}
                                            </td>
                                            <td>
                                                {{ $diagnosis->user->name }}
                                            </td>
                                            <td>
                                                {{ $diagnosis->pet->name }}
                                            </td>
                                            <td>
                                                {{ $diagnosis->service->name }}
                                            </td>

                                            <td>
                                                {{ $diagnosis->result }}
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
                                        @include('admin.diagnosis.edit')
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
@push('scripts')
    <script>
        $('body').on('change', '#customer_id', function() {
            var id = $(this).val();
            $.ajax({
                type: "get",
                url: "{{ route('admin.getPets') }}",
                data: {
                    id: id
                },
                beforeSend: () => {
                    Loader.open();
                },

                success: function(response) {
                    Loader.close();
                    $('#pet_id').html(response);
                }
            });
        });
    </script>
@endpush
