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
            <form method="POST" action="{{ route('admin.invoices.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="user_id">Customer</label>
                                <select class="form-control" name="user_id" id="user_id">
                                    <option value="">Select</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">
                                            {{ $user->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>



                            <div class="form-group">
                                <label for="my-input">Due Date</label>
                                <input id="my-input" class="form-control" type="date" name="due_date" value=""
                                    required>
                            </div>

                            <table class="table table-striped">
                                <thead>
                                    <th>Service</th>
                                    <th>Price</th>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            name="service_id[]" id=""
                                                            value="{{ $service->id }}">
                                                        {{ $service->name }}
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $service->price }}
                                                <input type="hidden" name="price[]" value="{{ $service->price }}">
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


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
