@extends('layout.app')

@section('title', 'Diagnosis')

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
                                $page = 'Diagnosis';
                            @endphp
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>DOCTOR</th>
                                        <th>CUSTOMER</th>
                                        <th>PET NAME</th>
                                        <th>SERVICE</th>
                                        <th>RESULT</th>

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
