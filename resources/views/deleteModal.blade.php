<div class="modal fade" id="delete{{ $id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
              DELETE
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="{{ route('delete') }}">
          @csrf
          @method('delete')
          <input type="hidden" name="id" value="{{ $id }}">
          <input type="hidden" name="page" value="{{ $page }}">
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <div class="alert alert-danger">
                  Are you sure you want to delete?
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">
            <i class="fas fa-check-circle"></i>
            Delete
          </button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div