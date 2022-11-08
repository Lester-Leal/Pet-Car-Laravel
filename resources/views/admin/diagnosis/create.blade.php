<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Create
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.diagnosis.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="user_id">Doctor</label>
                                <select class="form-control" name="doctor_id">
                                    <option value="">Select</option>
                                    @foreach ($users->whereIn('role',3) as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="user_id">Customer</label>
                                <select class="form-control" name="user_id" id="customer_id">
                                    <option value="">Select</option>
                                    @foreach ($users->where('role', 4) as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="user_id">Pet</label>
                                <select class="form-control" name="pet_id" id="pet_id">

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="category_id">Service</label>
                                <select class="form-control" name="service_id" id="service_id">
                                    <option value="">Select</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">
                                            {{ $service->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Result</label>
                                <input id="my-input" class="form-control" type="text" name="result" value=""
                                    required>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-check-circle"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
