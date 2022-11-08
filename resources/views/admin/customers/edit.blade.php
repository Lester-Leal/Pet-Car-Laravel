<div class="modal fade" id="edit{{ $id }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Edit
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.customers.update', ['customer' => $id]) }}">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="my-input">Name</label>
                                <input id="my-input" class="form-control" type="text" name="name"
                                    value="{{ $user->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Phone</label>
                                <input id="my-input" class="form-control" type="number" name="phone"
                                    value="{{ $user->phone }}" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3" required>{{ $user->address }}</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="my-input">Email</label>
                                        <input id="my-input" class="form-control" type="email" name="email"
                                            value="{{ $user->email }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="" aria-describedby="helpId" value="0" required>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control" name="customer_status" id="">
                                    <option value="{{ $user->customer_status }}">Select</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
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
