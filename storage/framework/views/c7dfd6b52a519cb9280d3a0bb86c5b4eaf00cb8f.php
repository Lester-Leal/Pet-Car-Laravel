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
        <form method="POST" action="<?php echo e(route('events.activities')); ?>">
          <?php echo csrf_field(); ?>
          <?php echo method_field('patch'); ?>
            <input type="hidden" name="id" value="<?php echo e($id); ?>">
          <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  
                    <div class="form-group">
                      <label for="">Activity</label>
                      <input type="text" name="activity" id="activity" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($activity->activity); ?>" required>
                      
                    </div>
        
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="budget">Budget</label>
                          <input type="number"
                            class="form-control" name="budget" id="budget" aria-describedby="budget" placeholder="" value="<?php echo e($activity->budget); ?>">
                          <small id="budget" class="form-text text-muted">Allocated budget</small>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="number_of_times">Number of times</label>
                          <input type="number"
                            class="form-control" name="number_of_times" id="number_of_times" aria-describedby="helpId" placeholder="" value="<?php echo e($activity->number_of_times); ?>">
                          <small id="helpId" class="form-text text-muted">Number of times the activity is gonna happy within the project period</small>
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
            Update
          </button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/activityEditModal.blade.php ENDPATH**/ ?>