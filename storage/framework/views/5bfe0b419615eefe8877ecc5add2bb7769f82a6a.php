<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
              ADD
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="<?php echo e(route('projects')); ?>">
          <?php echo csrf_field(); ?>

          <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                         <div class="form-group">
                           <label for="">Project</label>
                           <select class="form-control" name="project_id" id="project_id" required>
                             <option value="">Select one</option>
                             <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option value="<?php echo e($project->id); ?>">
                                  <?php echo e($project->name); ?>

                               </option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
                         </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="objective">Target</label>
                          <select id="target_id" class="form-control" name="target_id" required>
                            <option value="">Select One</option>
                          </select>
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="">Catchment Area</label>
                    <select class="form-control" name="catchment_id" id="catchment_id" required>
                        <option value="">Select one</option>
                        <?php $__currentLoopData = $catchments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catchment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($catchment->id); ?>">
                            <?php echo e($catchment->region->name); ?>/<?php echo e($catchment->district->name); ?>/<?php echo e($catchment->traditional_authority); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>

                    <div class="form-group">
                      <label for="">Implementer</label>
                      <input type="text" name="implementer" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                      
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
  </div><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/projectsModal.blade.php ENDPATH**/ ?>