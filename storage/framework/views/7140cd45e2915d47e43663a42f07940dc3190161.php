<div class="modal fade" id="edit<?php echo e($id); ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
              EDIT
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="<?php echo e(route('projects.activities')); ?>">
          <?php echo csrf_field(); ?>
          <?php echo method_field('patch'); ?>

          <div class="modal-body">
              <div class="card">
                <div class="card-body">

                    <div class="form-group">
                      <label for="">
                          Activity
                      </label>
                        <input type="hidden" name="id" value="<?php echo e($id); ?>">
                        <input type="text" name="activity" value="<?php echo e($activity->activity); ?>" class="form-control" placeholder="" aria-describedby="helpId" required>

                    </div>

                    <div class="form-group">
                        <label for="person">Responsible Person</label>
                        <input type="text" name="person" id="person" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($activity->person); ?>" required>

                      </div>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" name="start_date" id="start_date" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($activity->start_date); ?>" required>

                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="date" name="end_date" id="end_date" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($activity->end_date); ?>" required>
                              </div>
                          </div>
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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/activities/update.blade.php ENDPATH**/ ?>