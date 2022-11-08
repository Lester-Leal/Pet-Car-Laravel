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
        <form method="POST" action="<?php echo e(route('setting.projects.objective', $project->id)); ?>">
          <?php echo csrf_field(); ?>
          <?php echo method_field('patch'); ?>
          
          <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  
                    <div class="form-group">
                      <label for="">
                          Objective
                      </label>
                        <input type="hidden" name="id" value="<?php echo e($id); ?>">
                        <input type="text" name="name" value="<?php echo e($objective->name); ?>" class="form-control" placeholder="" aria-describedby="helpId" required>
                      
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
  </div><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/projectObjectiveEditModal.blade.php ENDPATH**/ ?>