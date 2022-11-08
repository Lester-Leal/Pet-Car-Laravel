<div class="modal fade" id="edit{{ $id }}">
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
            <form method="POST" action="{{ route('admin.pets.update', ['pet' => $id]) }}">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">


                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="{{ $pet->category_id }}">{{ $pet->category->name }}</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Pets Name</label>
                                <input id="my-input" class="form-control" type="text" name="name"
                                    value="{{ $pet->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Age</label>
                                <input id="my-input" class="form-control" type="text" name="age"
                                    value="{{ $pet->age }}" required>
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="{{ $pet->gender }}">{{ $pet->gender }}</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="my-input">Breed</label>
                                        <input id="my-input" class="form-control" type="breed" name="breed"
                                            required value="{{ $pet->breed }}">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="gender">Status</label>
                                <select class="form-control" name="status" id="gender" required>
                                    <option value="{{ $pet->status }}">select</option>
                                    <option value="1">Inpatient</option>
                                    <option value="2">Outpatient</option>
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
