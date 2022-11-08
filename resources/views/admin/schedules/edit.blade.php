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
            <form method="POST" action="{{ route('admin.schedules.update', ['schedule' => $id]) }}">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="my-input">Title</label>
                                <input id="my-input" class="form-control" type="text" name="title"
                                    value="{{ $schedule->title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Date</label>
                                <input id="my-input" class="form-control" type="date" name="schedule_date"
                                    value="{{ $schedule->schedule_date }}" required>
                            </div>

                            <div class="form-group">
                                <label for="my-input">Time</label>
                                <input id="my-input" class="form-control" type="time" name="schedule_time"
                                    value="{{ $schedule->schedule_time }}" required>
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
