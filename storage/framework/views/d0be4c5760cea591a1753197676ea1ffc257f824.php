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
        <form method="POST" action="<?php echo e(route('edit_more')); ?>">
          <?php echo csrf_field(); ?>

          <input type="hidden" name="id" value="<?php echo e($id); ?>">
          <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  
                    <div class="form-group">
                      <label for="">Group Village Headman</label>
                      <input type="text" name="group_village_headman" value="<?php echo e($detail->group_village_headman); ?>" class="form-control" placeholder="" aria-describedby="helpId" required>
                      
                    </div>
        
                    <div class="form-group">
                      <label for="">Village</label>
                      <input type="text" name="village" value="<?php echo e($detail->village); ?>" class="form-control" placeholder="" aria-describedby="helpId" required>
                      
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
  </div><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/catchmentEditDetailsModal.blade.php ENDPATH**/ ?>