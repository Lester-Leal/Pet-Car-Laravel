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
        <form method="POST" action="<?php echo e(route('catchment')); ?>">
          <?php echo csrf_field(); ?>
          <?php echo method_field('patch'); ?>

          <input type="hidden" name="id" value="<?php echo e($id); ?>">
          <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  
                    <div class="form-group">
                      <label for="">T/A</label>
                      <input type="text" name="traditional_authority" value="<?php echo e($catchment->traditional_authority); ?>" class="form-control" placeholder="" aria-describedby="helpId" required>
                      
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
  </div><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/catchmentEditModal.blade.php ENDPATH**/ ?>